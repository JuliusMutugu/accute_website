<?php

/* @var $this yii\web\View */
/* @var $service common\models\Service */
/* @var $relatedServices common\models\Service[] */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $service->title;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['/site/services']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="service-detail-page">
    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4"><?= Html::encode($service->title) ?></h1>
                    <p class="lead"><?= Html::encode($service->description) ?></p>
                    <div class="mt-4">
                        <a href="#service-details" class="btn btn-light btn-lg me-3">Learn More</a>
                        <a href="/contact" class="btn btn-outline-light btn-lg">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details Section -->
    <section class="py-5" id="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="service-content-wrapper">
                        <?php if (!empty($service->content)): ?>
                            <div class="service-content mb-5">
                                <?php
                                // Process content - if it's a simple list, convert to formatted content
                                $content = $service->content;
                                if (is_string($content) && strpos($content, "\n") !== false) {
                                    // Convert line-separated content to formatted HTML
                                    $lines = explode("\n", $content);
                                    echo '<div class="service-features-list">';
                                    echo '<h3 class="mb-4">Key Features & Benefits</h3>';
                                    echo '<ul class="list-group list-group-flush">';
                                    foreach ($lines as $line) {
                                        $line = trim($line);
                                        if (!empty($line)) {
                                            echo '<li class="list-group-item border-0 px-0">';
                                            echo '<i class="fas fa-check-circle text-success me-3"></i>';
                                            echo Html::encode($line);
                                            echo '</li>';
                                        }
                                    }
                                    echo '</ul>';
                                    echo '</div>';
                                } else {
                                    // Regular content
                                    echo '<div class="service-description">';
                                    echo '<h3 class="mb-4">Service Overview</h3>';
                                    echo '<p class="lead">' . Html::encode($content) . '</p>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        <?php endif; ?>

                        <!-- Default content based on service type -->
                        <div class="service-details-content">
                            <?php
                            // Dynamic content based on service title
                            $serviceType = strtolower($service->title);
                            
                            if (stripos($serviceType, 'cloud') !== false): ?>
                                <div class="row g-4 mb-5">
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-cloud-upload-alt text-primary me-2"></i>Cloud Migration</h4>
                                            <p>Seamless migration of your existing infrastructure to cloud platforms with minimal downtime and maximum efficiency.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-shield-alt text-primary me-2"></i>Security & Compliance</h4>
                                            <p>Enterprise-grade security measures and compliance frameworks to protect your cloud infrastructure.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-chart-line text-primary me-2"></i>Cost Optimization</h4>
                                            <p>Intelligent resource management and cost optimization strategies to maximize your cloud ROI.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-tools text-primary me-2"></i>24/7 Management</h4>
                                            <p>Round-the-clock monitoring and management of your cloud infrastructure for optimal performance.</p>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif (stripos($serviceType, 'development') !== false || stripos($serviceType, 'software') !== false): ?>
                                <div class="row g-4 mb-5">
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-code text-primary me-2"></i>Custom Development</h4>
                                            <p>Tailored software solutions built from the ground up to meet your specific business requirements.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-mobile-alt text-primary me-2"></i>Cross-Platform Apps</h4>
                                            <p>Native and hybrid mobile applications that work seamlessly across iOS and Android platforms.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-database text-primary me-2"></i>API Integration</h4>
                                            <p>Seamless integration with third-party systems and development of robust API solutions.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-bug text-primary me-2"></i>Testing & QA</h4>
                                            <p>Comprehensive testing and quality assurance to ensure your software meets the highest standards.</p>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif (stripos($serviceType, 'security') !== false || stripos($serviceType, 'cyber') !== false): ?>
                                <div class="row g-4 mb-5">
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-search text-primary me-2"></i>Security Assessment</h4>
                                            <p>Comprehensive security audits and vulnerability assessments to identify potential threats.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-eye text-primary me-2"></i>Threat Monitoring</h4>
                                            <p>24/7 monitoring and real-time threat detection to protect your digital assets.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-clipboard-check text-primary me-2"></i>Compliance</h4>
                                            <p>Ensure your organization meets industry standards and regulatory compliance requirements.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-graduation-cap text-primary me-2"></i>Security Training</h4>
                                            <p>Employee training and awareness programs to build a security-conscious culture.</p>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <!-- Generic service details -->
                                <div class="row g-4 mb-5">
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-cogs text-primary me-2"></i>Implementation</h4>
                                            <p>Professional implementation and deployment of solutions tailored to your business needs.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-headset text-primary me-2"></i>Support</h4>
                                            <p>Ongoing support and maintenance to ensure optimal performance and user satisfaction.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-chart-bar text-primary me-2"></i>Analytics</h4>
                                            <p>Detailed analytics and reporting to track performance and measure success.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-card">
                                            <h4><i class="fas fa-rocket text-primary me-2"></i>Optimization</h4>
                                            <p>Continuous optimization and improvement to ensure maximum efficiency and results.</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Our Process</h2>
                    <p class="section-subtitle">How we deliver this service</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">1</div>
                        <h5>Consultation</h5>
                        <p>We begin with a detailed consultation to understand your specific requirements and objectives.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">2</div>
                        <h5>Planning</h5>
                        <p>We develop a comprehensive plan and strategy tailored to your needs and timeline.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">3</div>
                        <h5>Implementation</h5>
                        <p>Our expert team executes the plan with precision and regular progress updates.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">4</div>
                        <h5>Support</h5>
                        <p>We provide ongoing support and optimization to ensure continued success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Services Section -->
    <?php if (!empty($relatedServices)): ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Related Services</h2>
                    <p class="section-subtitle">Other services that might interest you</p>
                </div>
            </div>
            <div class="row g-4">
                <?php foreach ($relatedServices as $relatedService): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <?php
                                // Dynamic icon assignment
                                $iconClass = 'fas fa-cogs'; // default icon
                                if (stripos($relatedService->title, 'cloud') !== false) {
                                    $iconClass = 'fas fa-cloud';
                                } elseif (stripos($relatedService->title, 'development') !== false || stripos($relatedService->title, 'software') !== false) {
                                    $iconClass = 'fas fa-code';
                                } elseif (stripos($relatedService->title, 'security') !== false || stripos($relatedService->title, 'cyber') !== false) {
                                    $iconClass = 'fas fa-shield-alt';
                                } elseif (stripos($relatedService->title, 'analytics') !== false || stripos($relatedService->title, 'data') !== false) {
                                    $iconClass = 'fas fa-chart-line';
                                } elseif (stripos($relatedService->title, 'automation') !== false) {
                                    $iconClass = 'fas fa-robot';
                                } elseif (stripos($relatedService->title, 'consulting') !== false) {
                                    $iconClass = 'fas fa-lightbulb';
                                } elseif (stripos($relatedService->title, 'support') !== false) {
                                    $iconClass = 'fas fa-headset';
                                } elseif (stripos($relatedService->title, 'integration') !== false) {
                                    $iconClass = 'fas fa-plug';
                                } elseif (stripos($relatedService->title, 'mobile') !== false) {
                                    $iconClass = 'fas fa-mobile-alt';
                                } elseif (stripos($relatedService->title, 'web') !== false) {
                                    $iconClass = 'fas fa-globe';
                                }
                                ?>
                                <i class="<?= $iconClass ?> fa-3x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title"><?= Html::encode($relatedService->title) ?></h4>
                                <p class="service-description"><?= Html::encode($relatedService->description) ?></p>
                                <div class="service-footer mt-auto">
                                    <a href="<?= Url::to(['/site/service-detail', 'slug' => $relatedService->slug]) ?>" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">Ready to Get Started with <?= Html::encode($service->title) ?>?</h2>
                    <p class="lead mb-4">
                        Let's discuss how this service can help transform your business and achieve your goals.
                    </p>
                    <a href="/contact" class="btn btn-light btn-lg me-3">Contact Us</a>
                    <a href="/services" class="btn btn-outline-light btn-lg">View All Services</a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.service-content-wrapper {
    background: white;
    border-radius: 15px;
    padding: 3rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
}

.service-features-list ul {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 2rem;
}

.detail-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
}

.detail-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
}

.detail-card h4 {
    color: #333;
    margin-bottom: 1rem;
    font-size: 1.1rem;
    font-weight: 600;
}

.detail-card p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 0;
}

.service-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
}

.service-icon {
    text-align: center;
    margin-bottom: 1.5rem;
}

.service-content {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.service-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: #333;
}

.service-description {
    color: #666;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.service-footer {
    margin-top: auto;
}

.process-step {
    position: relative;
    padding: 2rem 1rem;
}

.step-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0 auto 1rem;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.section-subtitle {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 2rem;
}

.hero-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 80px 0;
}

@media (max-width: 768px) {
    .service-content-wrapper {
        padding: 2rem;
    }
    
    .detail-card {
        padding: 1.5rem;
    }
    
    .service-card {
        padding: 1.5rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .step-number {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }
}
</style>
