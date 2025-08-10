<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="error-page py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="error-content">
                    <h1 class="display-1 fw-bold text-primary"><?= Html::encode($name) ?></h1>
                    <h2 class="h4 mb-4">Oops! Something went wrong.</h2>
                    <p class="lead text-muted mb-4"><?= nl2br(Html::encode($message)) ?></p>
                    
                    <div class="error-actions">
                        <a href="<?= Yii::$app->homeUrl ?>" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-home me-2"></i>Go Home
                        </a>
                        <a href="javascript:history.back()" class="btn btn-outline-secondary btn-lg">
                            <i class="fas fa-arrow-left me-2"></i>Go Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
