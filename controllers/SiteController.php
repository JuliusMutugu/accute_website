<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\PageContent;
use common\models\Service;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $services = Service::getActiveServices();
        
        return $this->render('index', [
            'services' => $services,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $aboutContent = PageContent::find()
            ->where(['slug' => 'about', 'status' => PageContent::STATUS_ACTIVE])
            ->one();

        return $this->render('about', [
            'content' => $aboutContent,
        ]);
    }

    /**
     * Displays services page.
     *
     * @return mixed
     */
    public function actionServices()
    {
        $services = Service::getActiveServices();

        return $this->render('services', [
            'services' => $services,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays solutions page by category.
     *
     * @param string $category
     * @return mixed
     */
    public function actionSolutions($category)
    {
        $content = PageContent::find()
            ->where(['slug' => 'solutions-' . $category, 'status' => PageContent::STATUS_ACTIVE])
            ->one();

        if (!$content) {
            throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('solutions', [
            'content' => $content,
            'category' => $category,
        ]);
    }

    /**
     * Displays successes page.
     *
     * @return mixed
     */
    public function actionSuccesses()
    {
        return $this->render('successes');
    }
}
