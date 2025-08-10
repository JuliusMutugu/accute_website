<?php

/* @var $this yii\web\View */
/* @var $model frontend\models\ContactForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;
$this->params['meta_description'] = 'Contact Attain Enterprise Solutions for professional ICT solutions, SharePoint, Dynamics NAV, CRM, and cloud services. Get in touch with our experts today.';
?>

<div class="contact-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bold mb-3"><?= Html::encode($this->title) ?></h1>
                    <p class="lead text-muted">
                        Ready to transform your business with our ICT solutions? Get in touch with our experts today.
                    </p>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0"><i class="fas fa-envelope me-2"></i>Send us a Message</h4>
                    </div>
                    <div class="card-body p-4">
                        <!-- Simple HTML Contact Form -->
                        <form id="contact-form" method="post" class="needs-validation" novalidate>
                            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->csrfToken ?>">
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="ContactForm-name" class="form-label fw-semibold">Full Name *</label>
                                    <input type="text" class="form-control" id="ContactForm-name" name="ContactForm[name]" 
                                           placeholder="Enter your full name" required>
                                    <div class="invalid-feedback">Please provide your name.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ContactForm-email" class="form-label fw-semibold">Email Address *</label>
                                    <input type="email" class="form-control" id="ContactForm-email" name="ContactForm[email]" 
                                           placeholder="Enter your email address" required>
                                    <div class="invalid-feedback">Please provide a valid email address.</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="ContactForm-phone" class="form-label fw-semibold">Phone Number</label>
                                    <input type="tel" class="form-control" id="ContactForm-phone" name="ContactForm[phone]" 
                                           placeholder="Enter your phone number">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ContactForm-subject" class="form-label fw-semibold">Subject *</label>
                                    <input type="text" class="form-control" id="ContactForm-subject" name="ContactForm[subject]" 
                                           placeholder="Enter message subject" required>
                                    <div class="invalid-feedback">Please provide a subject.</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="ContactForm-body" class="form-label fw-semibold">Message *</label>
                                <textarea class="form-control" id="ContactForm-body" name="ContactForm[body]" rows="5" 
                                          placeholder="Tell us about your project requirements..." required></textarea>
                                <div class="invalid-feedback">Please provide your message.</div>
                            </div>

                            <div class="mb-3">
                                <label for="ContactForm-verifyCode" class="form-label fw-semibold">Verification Code</label>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <!-- Simple Captcha placeholder -->
                                        <div class="captcha-placeholder bg-light border rounded p-2 text-center">
                                            <strong>5 + 3 = ?</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="ContactForm-verifyCode" 
                                               name="ContactForm[verifyCode]" placeholder="Enter verification code">
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-4">
                <div class="contact-info">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-primary mb-3">
                                <i class="fas fa-map-marker-alt me-2"></i>Our Office
                            </h5>
                            <p class="mb-0"><?= Html::encode(Yii::$app->params['company']['address']) ?></p>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-primary mb-3">
                                <i class="fas fa-phone me-2"></i>Phone Numbers
                            </h5>
                            <p class="mb-1">
                                <strong>Office:</strong> <?= Html::encode(Yii::$app->params['company']['phone']) ?>
                            </p>
                            <p class="mb-0">
                                <strong>Mobile:</strong> <?= Html::encode(Yii::$app->params['company']['mobile']) ?>
                            </p>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-primary mb-3">
                                <i class="fas fa-envelope me-2"></i>Email
                            </h5>
                            <p class="mb-0">
                                <a href="mailto:<?= Html::encode(Yii::$app->params['company']['email']) ?>" 
                                   class="text-decoration-none">
                                    <?= Html::encode(Yii::$app->params['company']['email']) ?>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-primary mb-3">
                                <i class="fas fa-clock me-2"></i>Business Hours
                            </h5>
                            <p class="mb-1"><strong>Monday - Friday:</strong> 8:00 AM - 5:00 PM</p>
                            <p class="mb-0"><strong>Saturday:</strong> 9:00 AM - 1:00 PM</p>
                            <p class="mb-0 text-muted"><small>Closed on Sundays and Public Holidays</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto text-center">
                <div class="cta-section bg-light rounded p-4">
                    <h3 class="fw-bold mb-3">Need Immediate Assistance?</h3>
                    <p class="mb-3">Our team is ready to help you with your ICT requirements and answer any questions you may have.</p>
                    <a href="tel:<?= str_replace(' ', '', Yii::$app->params['company']['phone']) ?>" 
                       class="btn btn-success btn-lg me-3">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                    <a href="mailto:<?= Html::encode(Yii::$app->params['company']['email']) ?>" 
                       class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-envelope me-2"></i>Email Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.contact-page .card {
    border-radius: 15px;
}

.contact-page .btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
}

.contact-page .btn-primary:hover {
    background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
    transform: translateY(-2px);
}

.captcha-placeholder {
    font-family: monospace;
    background-color: #f8f9fa !important;
}

.cta-section {
    border: 2px solid #667eea;
}

@media (max-width: 768px) {
    .contact-page .btn-lg {
        width: 100%;
        margin-bottom: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    
    // Bootstrap validation
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            // Simple captcha check
            const captchaInput = document.getElementById('ContactForm-verifyCode');
            if (captchaInput.value !== '8') {
                event.preventDefault();
                alert('Please enter the correct verification code (5 + 3 = ?)');
                captchaInput.focus();
                return false;
            }
            
            // Handle form submission
            event.preventDefault();
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
            
            // Simulate form submission (replace with actual form handling)
            setTimeout(function() {
                alert('Thank you for your message! We will get back to you within 24 hours.');
                form.reset();
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                form.classList.remove('was-validated');
            }, 2000);
        }
        
        form.classList.add('was-validated');
    });
});
</script>
