<?php

/* @var $this yii\web\View */
/* @var $services common\models\Service[] */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Our Services';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="services-page">
    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Our Services</h1>
                    <p class="lead">Comprehensive technology solutions to drive your business forward</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">What We Offer</h2>
                    <p class="section-subtitle">Explore our comprehensive range of technology services</p>
                </div>
            </div>
            
            <?php if (!empty($services)): ?>
                <div class="row g-4">
                    <?php foreach ($services as $service): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-card h-100">
                                <div class="service-icon">
                                    <?php
                                    // Dynamic icon assignment based on service title/slug
                                    $iconClass = 'fas fa-cogs'; // default icon
                                    if (stripos($service->title, 'cloud') !== false) {
                                        $iconClass = 'fas fa-cloud';
                                    } elseif (stripos($service->title, 'development') !== false || stripos($service->title, 'software') !== false) {
                                        $iconClass = 'fas fa-code';
                                    } elseif (stripos($service->title, 'security') !== false || stripos($service->title, 'cyber') !== false) {
                                        $iconClass = 'fas fa-shield-alt';
                                    } elseif (stripos($service->title, 'analytics') !== false || stripos($service->title, 'data') !== false) {
                                        $iconClass = 'fas fa-chart-line';
                                    } elseif (stripos($service->title, 'automation') !== false) {
                                        $iconClass = 'fas fa-robot';
                                    } elseif (stripos($service->title, 'consulting') !== false) {
                                        $iconClass = 'fas fa-lightbulb';
                                    } elseif (stripos($service->title, 'support') !== false) {
                                        $iconClass = 'fas fa-headset';
                                    } elseif (stripos($service->title, 'integration') !== false) {
                                        $iconClass = 'fas fa-plug';
                                    } elseif (stripos($service->title, 'mobile') !== false) {
                                        $iconClass = 'fas fa-mobile-alt';
                                    } elseif (stripos($service->title, 'web') !== false) {
                                        $iconClass = 'fas fa-globe';
                                    }
                                    ?>
                                    <i class="<?= $iconClass ?> fa-3x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h4 class="service-title"><?= Html::encode($service->title) ?></h4>
                                    <p class="service-description"><?= Html::encode($service->description) ?></p>
                                    <div class="service-features">
                                        <?php if (!empty($service->content)): ?>
                                            <ul class="list-unstyled">
                                                <?php 
                                                $features = is_string($service->content) ? explode("\n", $service->content) : $service->content;
                                                foreach (array_slice($features, 0, 3) as $feature): 
                                                    $feature = trim($feature);
                                                    if (!empty($feature)):
                                                ?>
                                                    <li><i class="fas fa-check text-success me-2"></i><?= Html::encode($feature) ?></li>
                                                <?php 
                                                    endif;
                                                endforeach; 
                                                ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                    <div class="service-footer mt-auto">
                                        <a href="<?= Url::to(['/site/service-detail', 'slug' => $service->slug]) ?>" class="btn btn-outline-primary">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Default Services if none in database -->
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-cloud fa-3x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Cloud Computing Solutions</h4>
                                <p class="service-description">Comprehensive cloud architecture, migration, and management services to optimize your infrastructure.</p>
                                <div class="service-features">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Cloud Migration & Strategy</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Multi-Cloud Management</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Cost Optimization</li>
                                    </ul>
                                </div>
                                <div class="service-footer mt-auto">
                                    <a href="/contact" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-code fa-3x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Custom Software Development</h4>
                                <p class="service-description">Tailored software solutions built with modern technologies to meet your specific business needs.</p>
                                <div class="service-features">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Web & Mobile Applications</li>
                                        <li><i class="fas fa-check text-success me-2"></i>API Development</li>
                                        <li><i class="fas fa-check text-success me-2"></i>System Integration</li>
                                    </ul>
                                </div>
                                <div class="service-footer mt-auto">
                                    <a href="/contact" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-shield-alt fa-3x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Cybersecurity Services</h4>
                                <p class="service-description">Protect your business with comprehensive security solutions and threat management.</p>
                                <div class="service-features">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Security Assessments</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Threat Monitoring</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Compliance Management</li>
                                    </ul>
                                </div>
                                <div class="service-footer mt-auto">
                                    <a href="/contact" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-chart-line fa-3x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Data Analytics & BI</h4>
                                <p class="service-description">Transform your data into actionable insights with advanced analytics and business intelligence.</p>
                                <div class="service-features">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Data Visualization</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Predictive Analytics</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Real-time Dashboards</li>
                                    </ul>
                                </div>
                                <div class="service-footer mt-auto">
                                    <a href="/contact" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-robot fa-3x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Process Automation</h4>
                                <p class="service-description">Streamline operations and increase efficiency with intelligent automation solutions.</p>
                                <div class="service-features">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Workflow Automation</li>
                                        <li><i class="fas fa-check text-success me-2"></i>RPA Implementation</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Process Optimization</li>
                                    </ul>
                                </div>
                                <div class="service-footer mt-auto">
                                    <a href="/contact" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-headset fa-3x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">IT Support & Maintenance</h4>
                                <p class="service-description">Reliable ongoing support to keep your systems running smoothly and efficiently.</p>
                                <div class="service-features">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>24/7 Support</li>
                                        <li><i class="fas fa-check text-success me-2"></i>System Monitoring</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Preventive Maintenance</li>
                                    </ul>
                                </div>
                                <div class="service-footer mt-auto">
                                    <a href="/contact" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Why Choose Our Services?</h2>
                    <p class="section-subtitle">What sets us apart in delivering exceptional technology solutions</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card text-center p-4">
                        <div class="advantage-icon mb-3">
                            <i class="fas fa-award fa-3x text-primary"></i>
                        </div>
                        <h5>Proven Expertise</h5>
                        <p>15+ years of experience delivering successful technology solutions across industries.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card text-center p-4">
                        <div class="advantage-icon mb-3">
                            <i class="fas fa-clock fa-3x text-primary"></i>
                        </div>
                        <h5>Rapid Delivery</h5>
                        <p>Agile methodologies and efficient processes ensure timely project completion.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card text-center p-4">
                        <div class="advantage-icon mb-3">
                            <i class="fas fa-dollar-sign fa-3x text-primary"></i>
                        </div>
                        <h5>Cost Effective</h5>
                        <p>Optimized solutions that deliver maximum value within your budget constraints.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="advantage-card text-center p-4">
                        <div class="advantage-icon mb-3">
                            <i class="fas fa-life-ring fa-3x text-primary"></i>
                        </div>
                        <h5>Ongoing Support</h5>
                        <p>Comprehensive support and maintenance to ensure continued success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Our Process</h2>
                    <p class="section-subtitle">How we deliver exceptional results</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">1</div>
                        <h5>Discovery</h5>
                        <p>We analyze your requirements and understand your business objectives.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">2</div>
                        <h5>Planning</h5>
                        <p>We create a detailed strategy and roadmap for your project.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">3</div>
                        <h5>Implementation</h5>
                        <p>We execute the plan with precision and regular progress updates.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">4</div>
                        <h5>Support</h5>
                        <p>We provide ongoing support and optimization for continued success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">Ready to Get Started?</h2>
                    <p class="lead mb-4">
                        Let's discuss how our services can help transform your business and achieve your technology goals.
                    </p>
                    <a href="/contact" class="btn btn-light btn-lg me-3">Contact Us</a>
                    <a href="/about" class="btn btn-outline-light btn-lg">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
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

.service-features {
    margin-bottom: 1.5rem;
    flex-grow: 1;
}

.service-footer {
    margin-top: auto;
}

.advantage-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.advantage-card:hover {
    transform: translateY(-5px);
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
