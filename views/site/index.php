<?php

/* @var $this yii\web\View */
/* @var $services common\models\Service[] */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Home';
$this->params['meta_description'] = 'Attain Enterprise Solutions - Leading provider of ICT solutions, SharePoint, Dynamics NAV, CRM, and cloud-based services in Kenya and Africa.';
$this->params['meta_keywords'] = 'ICT solutions, SharePoint, Dynamics NAV, CRM, Cloud solutions, Enterprise software, Kenya, Africa';
?>

<!-- Hero Section -->
<section id="hero" class="hero-section bg-gradient-primary text-white">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="display-4 fw-bold mb-4 animate-fade-in">
                        Bringing ICT To The 
                        <span class="text-warning">Corporate World</span>
                    </h1>
                    <p class="lead mb-4 animate-fade-in-delay">
                        Leading technology and solutions provider specializing in software development, systems support, 
                        and I.T. consultancy. Microsoft Certified Business Solutions Partner since 2003.
                    </p>
                    <div class="hero-buttons animate-fade-in-delay-2">
                        <?= Html::a('Our Solutions', ['/site/services'], [
                            'class' => 'btn btn-warning btn-lg me-3 mb-2',
                            'role' => 'button'
                        ]) ?>
                        <?= Html::a('Contact Us', ['/site/contact'], [
                            'class' => 'btn btn-outline-light btn-lg mb-2',
                            'role' => 'button'
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image text-center animate-slide-in">
                    <img src="/images/hero-tech.svg" alt="ICT Solutions" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="hero-scroll">
        <a href="#services" class="scroll-down">
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="section-title fw-bold">Our Core Services</h2>
                <p class="section-subtitle text-muted">
                    Comprehensive ICT solutions designed to elevate your business operations and improve productivity
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <?php if (!empty($services)): ?>
                <?php foreach ($services as $index => $service): ?>
                    <div class="col-lg-6 col-xl-3">
                        <div class="service-card card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body text-center p-4">
                                <div class="service-icon mb-3">
                                    <i class="<?= Html::encode($service->icon ?: 'fas fa-cogs') ?> fa-3x text-primary"></i>
                                </div>
                                <h5 class="card-title fw-bold"><?= Html::encode($service->title) ?></h5>
                                <p class="card-text text-muted"><?= Html::encode($service->description) ?></p>
                                <a href="<?= Url::to(['/site/solutions', 'category' => $service->slug]) ?>" 
                                   class="btn btn-outline-primary btn-sm">
                                    Learn More <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Default services based on Attain's actual offerings -->
                <div class="col-lg-6 col-xl-3">
                    <div class="service-card card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="fas fa-building fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title fw-bold">Public Sector Solutions</h5>
                            <p class="card-text text-muted">Risk-based supervision, county management, revenue management, and public sector ERP systems</p>
                            <a href="<?= Url::to(['/site/solutions', 'category' => 'public-sector']) ?>" 
                               class="btn btn-outline-primary btn-sm">
                                Learn More <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-xl-3">
                    <div class="service-card card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="fas fa-university fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title fw-bold">Financial Services</h5>
                            <p class="card-text text-muted">PENINVEST, SACCO solutions, microfinance, loan management, and underwriting solutions</p>
                            <a href="<?= Url::to(['/site/solutions', 'category' => 'financial-services']) ?>" 
                               class="btn btn-outline-primary btn-sm">
                                Learn More <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-xl-3">
                    <div class="service-card card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="fab fa-microsoft fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title fw-bold">Microsoft Solutions</h5>
                            <p class="card-text text-muted">Certified Microsoft Business Solutions Partner - SharePoint, Dynamics NAV, Office 365</p>
                            <a href="<?= Url::to(['/site/solutions', 'category' => 'microsoft']) ?>" 
                               class="btn btn-outline-primary btn-sm">
                                Learn More <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-xl-3">
                    <div class="service-card card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="fas fa-cogs fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title fw-bold">Specialized Solutions</h5>
                            <p class="card-text text-muted">Education, health, agriculture, NGO solutions, grant management, and bespoke systems</p>
                            <a href="<?= Url::to(['/site/solutions', 'category' => 'specialized']) ?>" 
                               class="btn btn-outline-primary btn-sm">
                                Learn More <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section id="why-choose-us" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Why Choose Attain Enterprise Solutions?</h2>
                <div class="feature-list">
                    <div class="feature-item d-flex mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-award text-success fa-lg"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold">Microsoft Certified Partner</h6>
                            <p class="text-muted mb-0">Microsoft WECA ERP Partner of the Year 2013 and certified Microsoft Business Solutions Partner</p>
                        </div>
                    </div>
                    
                    <div class="feature-item d-flex mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-calendar-alt text-success fa-lg"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold">Since 2003</h6>
                            <p class="text-muted mb-0">Over 20 years of experience implementing IT solutions that streamline business operations</p>
                        </div>
                    </div>
                    
                    <div class="feature-item d-flex mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-handshake text-success fa-lg"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold">Diagnostic Approach</h6>
                            <p class="text-muted mb-0">We analyze current processes and issues before implementing solutions</p>
                        </div>
                    </div>
                    
                    <div class="feature-item d-flex">
                        <div class="feature-icon me-3">
                            <i class="fas fa-users text-success fa-lg"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold">Diverse Client Base</h6>
                            <p class="text-muted mb-0">Serving NGOs, Government Ministries, Parastatals, and Private Enterprises</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="stats-grid">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stat-card card bg-primary text-white text-center p-4">
                                <h3 class="fw-bold mb-1">20+</h3>
                                <p class="mb-0">Years Experience</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card card bg-success text-white text-center p-4">
                                <h3 class="fw-bold mb-1">100+</h3>
                                <p class="mb-0">Satisfied Clients</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card card bg-warning text-dark text-center p-4">
                                <h3 class="fw-bold mb-1">2013</h3>
                                <p class="mb-0">ERP Award Year</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card card bg-info text-white text-center p-4">
                                <h3 class="fw-bold mb-1">24/7</h3>
                                <p class="mb-0">Support Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="cta" class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3 class="fw-bold mb-2">Ready to Transform Your Business?</h3>
                <p class="mb-0">Let us help you implement the right ICT solutions for your organization's success.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <?= Html::a('Get Started Today', ['/site/contact'], [
                    'class' => 'btn btn-warning btn-lg',
                    'role' => 'button'
                ]) ?>
            </div>
        </div>
    </div>
</section>
