<?php

/* @var $this yii\web\View */
/* @var $content common\models\PageContent */

use yii\helpers\Html;

$this->title = 'About Us';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="about-page">
    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">About Attain Enterprise Solutions</h1>
                    <p class="lead">Your trusted technology partner for digital transformation and business growth</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <?php if ($content): ?>
                        <div class="content-section">
                            <h2><?= Html::encode($content->title) ?></h2>
                            <div class="content-body">
                                <?= $content->content ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="content-section">
                            <h2>Our Story</h2>
                            <p class="lead">
                                In the 21st Century, automation of business processes is key if any business intends to achieve its core objectives and sky-rocket productivity. Attain Enterprise Solutions Ltd. is a leading technology and solutions provider specializing in software development and implementation, systems support and I.T. consultancy.
                            </p>
                            
                            <p>
                                Having been in operation since 2003, we have gained vast experience in implementing IT solutions that help streamline your business operations and transform your organization. We employ proven best practices and processes to improve efficiency throughout your enterprise through improved service levels, and cutting down on operating costs thereby generating revenue growth.
                            </p>

                            <p>
                                The foundation of success is in our proficient and talented team of professionals who deliver a pool of extraordinary expertise in both ICT and management fields. Attain Enterprise Solutions Ltd. has also structured strategic partnerships with global IT giants such as Microsoft to become Certified Microsoft Business solutions partners allowing us to sell and service a range of Microsoft Information Systems.
                            </p>

                            <p>
                                Commanding a large share of clients in the industry with clients drawn from NGOs, Government Ministries, Parastatals and Private Business Enterprises, the company boasts of proven best practices and processes that improve efficiency in businesses, cuts operating costs and generally contributes to revenue growth.
                            </p>

                            <div class="highlight-box bg-light p-4 mt-4 rounded">
                                <h4 class="text-primary mb-3">Microsoft WECA Enterprise Resource Planning (ERP) Partner of the Year 2013</h4>
                                <p class="mb-0">
                                    Attain Enterprise Solutions was among the best partners Africa has to offer and after a stringent voting process, the judges unanimously reached a decision based on Attain Enterprise Solutions' outstanding nomination submission. We work as a team, succeed as a team, and celebrate as a team!
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission and Vision Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="mission-card h-100 p-4 border-start border-primary border-4">
                        <h3 class="mb-3 text-primary">Our Mission</h3>
                        <p class="lead">
                            Our Corporate Philosophy, "Bringing ICT to the Corporate World" is a distillate of our corporate mission, encompassing the multiple objectives of adding value to our clients operations, and improving productivity and revenue.
                        </p>
                        <p>
                            Our approach is meant to build long term and mutually beneficial partnerships in which we make decisions with the future in mind.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="vision-card h-100 p-4 border-start border-success border-4">
                        <h3 class="mb-3 text-success">Our Vision</h3>
                        <p class="lead">
                            Our Vision is to become the preferred Software Solutions Provider in Africa. We aim to achieve this through excellence in training, implementation and support.
                        </p>
                        <p>
                            We continually invest in high quality staff and related service consultants. We manage this through controlled growth and strategic partnerships.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="commitment-card p-4 bg-light rounded">
                        <h3 class="mb-3 text-dark">Our Commitment</h3>
                        <p>
                            We are committed to elevating and enriching the internal operations of our clients. We prefer to approach our clients from a diagnostic point of view, where we get to know their current processes, and issues being faced.
                        </p>
                        <p class="mb-0">
                            Knowing that one unhappy client can drive away more prospective clients than they can bring in, we prefer to ensure our implementations are smooth and the client benefits from engaging us all the way. This is evident from the fact that we are on support contracts with almost all of our clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Our Core Values</h2>
                    <p class="section-subtitle">The principles that guide everything we do</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="value-card text-center p-4">
                        <div class="value-icon mb-3">
                            <i class="fas fa-users fa-3x text-primary"></i>
                        </div>
                        <h5>Customer Focus</h5>
                        <p>Our customers are the most important stakeholders in our business and the lifeblood of our business.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card text-center p-4">
                        <div class="value-icon mb-3">
                            <i class="fas fa-handshake fa-3x text-primary"></i>
                        </div>
                        <h5>Integrity</h5>
                        <p>We are honest in all interactions. We earn our reputation by adhering to the highest ethical standards.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card text-center p-4">
                        <div class="value-icon mb-3">
                            <i class="fas fa-chart-line fa-3x text-primary"></i>
                        </div>
                        <h5>Continuous Improvement</h5>
                        <p>We constantly look for ways to innovate and improve. We embrace change as an opportunity and strive for excellence.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card text-center p-4">
                        <div class="value-icon mb-3">
                            <i class="fas fa-people-carry fa-3x text-primary"></i>
                        </div>
                        <h5>Teamwork</h5>
                        <p>We treat one another with respect, foster collaboration while maintaining individual accountability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-item">
                        <h2 class="stat-number text-primary fw-bold">500+</h2>
                        <p class="stat-label">Projects Completed</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-item">
                        <h2 class="stat-number text-primary fw-bold">200+</h2>
                        <p class="stat-label">Happy Clients</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-item">
                        <h2 class="stat-number text-primary fw-bold">15+</h2>
                        <p class="stat-label">Years Experience</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-item">
                        <h2 class="stat-number text-primary fw-bold">50+</h2>
                        <p class="stat-label">Team Members</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Our Expertise</h2>
                    <p class="section-subtitle">Areas where we excel and drive innovation</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card p-4 h-100">
                        <div class="expertise-icon mb-3">
                            <i class="fas fa-cloud text-primary fa-2x"></i>
                        </div>
                        <h5>Cloud Computing</h5>
                        <p>Expert cloud architecture, migration, and management services across all major platforms.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card p-4 h-100">
                        <div class="expertise-icon mb-3">
                            <i class="fas fa-code text-primary fa-2x"></i>
                        </div>
                        <h5>Software Development</h5>
                        <p>Custom application development using modern frameworks and best practices.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card p-4 h-100">
                        <div class="expertise-icon mb-3">
                            <i class="fas fa-shield-alt text-primary fa-2x"></i>
                        </div>
                        <h5>Cybersecurity</h5>
                        <p>Comprehensive security solutions to protect your business from evolving threats.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card p-4 h-100">
                        <div class="expertise-icon mb-3">
                            <i class="fas fa-chart-line text-primary fa-2x"></i>
                        </div>
                        <h5>Data Analytics</h5>
                        <p>Advanced analytics and business intelligence solutions for data-driven decisions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card p-4 h-100">
                        <div class="expertise-icon mb-3">
                            <i class="fas fa-cogs text-primary fa-2x"></i>
                        </div>
                        <h5>Process Automation</h5>
                        <p>Streamline operations with intelligent automation and workflow optimization.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="expertise-card p-4 h-100">
                        <div class="expertise-icon mb-3">
                            <i class="fas fa-users text-primary fa-2x"></i>
                        </div>
                        <h5>Digital Transformation</h5>
                        <p>Strategic guidance and implementation for complete digital business transformation.</p>
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
                    <h2 class="mb-4">Ready to Transform Your Business?</h2>
                    <p class="lead mb-4">
                        Let's discuss how our expertise can help you achieve your technology goals and drive business growth.
                    </p>
                    <a href="/contact" class="btn btn-light btn-lg">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.value-card, .expertise-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.value-card:hover, .expertise-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
}

.stat-number {
    font-size: 3rem;
    font-weight: 700;
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
</style>
