<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Our Successes';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="successes-page">
    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Our Success Stories</h1>
                    <p class="lead">Celebrating achievements and milestones in delivering exceptional ICT solutions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Major Achievement -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="achievement-highlight bg-gradient-primary text-white p-5 rounded-3 text-center mb-5">
                        <div class="achievement-icon mb-4">
                            <i class="fas fa-trophy fa-4x text-warning"></i>
                        </div>
                        <h2 class="display-5 fw-bold mb-3">Microsoft WECA ERP Partner of the Year 2013</h2>
                        <p class="lead mb-4">
                            Attain Enterprise Solutions was recognized among the best Microsoft partners Africa has to offer. 
                            After a stringent voting process, the judges unanimously reached their decision based on our 
                            outstanding nomination submission and exceptional service delivery.
                        </p>
                        <blockquote class="blockquote">
                            <p class="mb-0 fst-italic">"We work as a team, succeed as a team, and celebrate as a team!"</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Metrics -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Our Impact by Numbers</h2>
                    <p class="section-subtitle">Measurable success across various sectors and industries</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="metric-card text-center p-4">
                        <div class="metric-icon mb-3">
                            <i class="fas fa-calendar-alt fa-3x text-primary"></i>
                        </div>
                        <h3 class="metric-number text-primary fw-bold">20+</h3>
                        <p class="metric-label">Years of Excellence</p>
                        <small class="text-muted">Serving clients since 2003</small>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="metric-card text-center p-4">
                        <div class="metric-icon mb-3">
                            <i class="fas fa-handshake fa-3x text-success"></i>
                        </div>
                        <h3 class="metric-number text-success fw-bold">100+</h3>
                        <p class="metric-label">Satisfied Clients</p>
                        <small class="text-muted">Across multiple sectors</small>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="metric-card text-center p-4">
                        <div class="metric-icon mb-3">
                            <i class="fas fa-project-diagram fa-3x text-warning"></i>
                        </div>
                        <h3 class="metric-number text-warning fw-bold">500+</h3>
                        <p class="metric-label">Projects Delivered</p>
                        <small class="text-muted">Successfully implemented</small>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="metric-card text-center p-4">
                        <div class="metric-icon mb-3">
                            <i class="fas fa-award fa-3x text-info"></i>
                        </div>
                        <h3 class="metric-number text-info fw-bold">98%</h3>
                        <p class="metric-label">Client Retention</p>
                        <small class="text-muted">Long-term partnerships</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Sectors -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Sectors We've Transformed</h2>
                    <p class="section-subtitle">Successful implementations across diverse industries</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="sector-card h-100 p-4 text-center">
                        <div class="sector-icon mb-3">
                            <i class="fas fa-university fa-3x text-primary"></i>
                        </div>
                        <h5>Government & Public Sector</h5>
                        <p class="text-muted">Government Ministries, Parastatals, and County Governments with comprehensive ERP and management systems.</p>
                        <div class="success-indicators">
                            <span class="badge bg-success me-1">ERP Implementation</span>
                            <span class="badge bg-info me-1">Revenue Management</span>
                            <span class="badge bg-warning">Risk Management</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sector-card h-100 p-4 text-center">
                        <div class="sector-icon mb-3">
                            <i class="fas fa-hand-holding-heart fa-3x text-success"></i>
                        </div>
                        <h5>Non-Governmental Organizations</h5>
                        <p class="text-muted">NGOs with grant management, project tracking, and donor management solutions.</p>
                        <div class="success-indicators">
                            <span class="badge bg-success me-1">Grant Management</span>
                            <span class="badge bg-info me-1">M&E Systems</span>
                            <span class="badge bg-warning">Donor Tracking</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sector-card h-100 p-4 text-center">
                        <div class="sector-icon mb-3">
                            <i class="fas fa-building fa-3x text-warning"></i>
                        </div>
                        <h5>Private Business Enterprises</h5>
                        <p class="text-muted">Private companies with Microsoft solutions, ERP systems, and business process automation.</p>
                        <div class="success-indicators">
                            <span class="badge bg-success me-1">Microsoft Solutions</span>
                            <span class="badge bg-info me-1">Process Automation</span>
                            <span class="badge bg-warning">ERP Systems</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sector-card h-100 p-4 text-center">
                        <div class="sector-icon mb-3">
                            <i class="fas fa-graduation-cap fa-3x text-info"></i>
                        </div>
                        <h5>Education Sector</h5>
                        <p class="text-muted">Educational institutions with student information systems and administrative solutions.</p>
                        <div class="success-indicators">
                            <span class="badge bg-success me-1">Student Systems</span>
                            <span class="badge bg-info me-1">LMS Platforms</span>
                            <span class="badge bg-warning">Admin Solutions</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sector-card h-100 p-4 text-center">
                        <div class="sector-icon mb-3">
                            <i class="fas fa-heartbeat fa-3x text-danger"></i>
                        </div>
                        <h5>Healthcare Sector</h5>
                        <p class="text-muted">Healthcare institutions with patient management and hospital information systems.</p>
                        <div class="success-indicators">
                            <span class="badge bg-success me-1">Patient Systems</span>
                            <span class="badge bg-info me-1">Medical Records</span>
                            <span class="badge bg-warning">Hospital ERP</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sector-card h-100 p-4 text-center">
                        <div class="sector-icon mb-3">
                            <i class="fas fa-piggy-bank fa-3x text-success"></i>
                        </div>
                        <h5>Financial Services</h5>
                        <p class="text-muted">SACCOs, microfinance institutions, and financial service providers with specialized solutions.</p>
                        <div class="success-indicators">
                            <span class="badge bg-success me-1">SACCO Solutions</span>
                            <span class="badge bg-info me-1">Loan Management</span>
                            <span class="badge bg-warning">PENINVEST</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Achievements -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Key Milestones & Achievements</h2>
                    <p class="section-subtitle">Major accomplishments that define our journey</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="timeline-item p-4">
                        <div class="timeline-year">2003</div>
                        <h5>Company Founded</h5>
                        <p>Attain Enterprise Solutions established with a vision to bring ICT to the corporate world.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="timeline-item p-4">
                        <div class="timeline-year">2010</div>
                        <h5>Microsoft Partnership</h5>
                        <p>Became Certified Microsoft Business Solutions Partner, expanding our service capabilities.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="timeline-item p-4">
                        <div class="timeline-year">2013</div>
                        <h5>ERP Partner of the Year</h5>
                        <p>Awarded Microsoft WECA Enterprise Resource Planning Partner of the Year.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="timeline-item p-4">
                        <div class="timeline-year">2020+</div>
                        <h5>Digital Transformation</h5>
                        <p>Leading digital transformation initiatives across Africa with cloud and modern solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">What Our Clients Say</h2>
                    <p class="section-subtitle">Success stories from our valued partners</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-card h-100 p-4 text-center">
                        <div class="testimonial-icon mb-3">
                            <i class="fas fa-quote-left fa-2x text-primary"></i>
                        </div>
                        <p class="testimonial-text">"Attain Enterprise Solutions transformed our operations with their comprehensive ERP solution. Their support has been exceptional."</p>
                        <div class="testimonial-author">
                            <strong>Government Ministry</strong>
                            <small class="text-muted d-block">Public Sector Client</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card h-100 p-4 text-center">
                        <div class="testimonial-icon mb-3">
                            <i class="fas fa-quote-left fa-2x text-success"></i>
                        </div>
                        <p class="testimonial-text">"The SACCO solution has streamlined our member services and improved our operational efficiency significantly."</p>
                        <div class="testimonial-author">
                            <strong>Financial Cooperative</strong>
                            <small class="text-muted d-block">SACCO Client</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card h-100 p-4 text-center">
                        <div class="testimonial-icon mb-3">
                            <i class="fas fa-quote-left fa-2x text-warning"></i>
                        </div>
                        <p class="testimonial-text">"Their diagnostic approach and ongoing support ensure our systems run smoothly. True partnership in every sense."</p>
                        <div class="testimonial-author">
                            <strong>Private Enterprise</strong>
                            <small class="text-muted d-block">Corporate Client</small>
                        </div>
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
                    <h2 class="mb-4">Ready to Be Our Next Success Story?</h2>
                    <p class="lead mb-4">
                        Join our growing list of satisfied clients and experience the transformation that comes with 
                        working with a trusted technology partner.
                    </p>
                    <div class="cta-buttons">
                        <a href="/contact" class="btn btn-light btn-lg me-3 mb-2">
                            <i class="fas fa-comments me-2"></i>Start the Conversation
                        </a>
                        <a href="/services" class="btn btn-outline-light btn-lg mb-2">
                            <i class="fas fa-list me-2"></i>View Our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.achievement-highlight {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
}

.metric-card, .sector-card, .testimonial-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.metric-card:hover, .sector-card:hover, .testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
}

.timeline-item {
    background: white;
    border-radius: 10px;
    border-left: 4px solid #667eea;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    margin-bottom: 1rem;
}

.timeline-year {
    background: #667eea;
    color: white;
    display: inline-block;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-weight: bold;
    margin-bottom: 0.75rem;
}

.metric-number {
    font-size: 2.5rem;
}

.success-indicators .badge {
    font-size: 0.75rem;
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
    .section-title {
        font-size: 2rem;
    }
    
    .metric-number {
        font-size: 2rem;
    }
    
    .cta-buttons a {
        display: block;
        width: 100%;
        margin: 0 0 1rem 0 !important;
    }
    
    .achievement-highlight {
        padding: 2rem !important;
    }
}
</style>
