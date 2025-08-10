<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | Attain Enterprise Solutions</title>
    <meta name="description" content="<?= Html::encode($this->params['meta_description'] ?? 'Professional IT solutions and enterprise software implementation services.') ?>">
    <meta name="keywords" content="<?= Html::encode($this->params['meta_keywords'] ?? 'Cloud Solutions, Software Development, IT Consulting, Cybersecurity, Data Analytics') ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= Yii::$app->request->absoluteUrl ?>">
    <meta property="og:title" content="<?= Html::encode($this->title) ?> | Attain Enterprise Solutions">
    <meta property="og:description" content="<?= Html::encode($this->params['meta_description'] ?? 'Professional IT solutions and enterprise software implementation services.') ?>">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= Yii::$app->request->absoluteUrl ?>">
    <meta property="twitter:title" content="<?= Html::encode($this->title) ?> | Attain Enterprise Solutions">
    <meta property="twitter:description" content="<?= Html::encode($this->params['meta_description'] ?? 'Professional IT solutions and enterprise software implementation services.') ?>">
    
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>">
                <strong>Attain Enterprise Solutions</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->homeUrl ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Our Solutions
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/solutions/public-sector">Public Sector Solutions</a></li>
                            <li><a class="dropdown-item" href="/solutions/financial-services">Financial Services</a></li>
                            <li><a class="dropdown-item" href="/solutions/microsoft-solutions">Microsoft Solutions</a></li>
                            <li><a class="dropdown-item" href="/solutions/education">Education Sector</a></li>
                            <li><a class="dropdown-item" href="/solutions/health">Health Sector</a></li>
                            <li><a class="dropdown-item" href="/solutions/agriculture">Agriculture Sector</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/services">All Solutions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/site/successes">Successes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container-fluid">
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-4 bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-primary">Attain Enterprise Solutions</h5>
                <p class="mb-2">Your Trusted IT Partner for Digital Transformation</p>
                <p class="small text-muted">123 Technology Drive, Business District, City</p>
            </div>
            
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="text-primary">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-light">Home</a></li>
                    <li><a href="/about" class="text-light">About</a></li>
                    <li><a href="/services" class="text-light">Services</a></li>
                    <li><a href="/contact" class="text-light">Contact</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <h6 class="text-primary">Our Solutions</h6>
                <ul class="list-unstyled">
                    <li><a href="/solutions/cloud-solutions" class="text-light">Cloud Solutions</a></li>
                    <li><a href="/solutions/custom-software-development" class="text-light">Software Development</a></li>
                    <li><a href="/solutions/it-consulting" class="text-light">IT Consulting</a></li>
                    <li><a href="/solutions/cybersecurity" class="text-light">Cybersecurity</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <h6 class="text-primary">Contact Info</h6>
                <p class="mb-1"><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                <p class="mb-1"><i class="fas fa-mobile-alt"></i> +1 (555) 987-6543</p>
                <p class="mb-3"><i class="fas fa-envelope"></i> info@attain-es.com</p>
                <div class="social-links">
                    <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light me-2"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        
        <hr class="my-4">
        
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0">&copy; <?= date('Y') ?> Attain Enterprise Solutions. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0 small">Designed with <i class="fas fa-heart text-danger"></i> for modern businesses</p>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Contact Button -->
<div class="floating-contact-btn">
    <a href="/contact" class="fab-contact" title="Contact Us">
        <i class="fas fa-comments"></i>
        <span class="fab-text">Contact Us</span>
    </a>
</div>

<!-- Quick Contact Modal Trigger (Alternative) -->
<div class="floating-actions">
    <div class="fab-container">
        <button class="fab-main" id="fabToggle">
            <i class="fas fa-plus fab-icon"></i>
        </button>
        <div class="fab-options">
            <a href="/contact" class="fab-option" title="Contact Form">
                <i class="fas fa-envelope"></i>
                <span class="fab-tooltip">Contact Form</span>
            </a>
            <a href="tel:<?= str_replace([' ', '-'], '', Yii::$app->params['company']['phone'] ?? '+254202715680') ?>" class="fab-option" title="Call Us">
                <i class="fas fa-phone"></i>
                <span class="fab-tooltip">Call Now</span>
            </a>
            <a href="mailto:<?= Yii::$app->params['company']['email'] ?? 'info@attain-es.com' ?>" class="fab-option" title="Email Us">
                <i class="fas fa-at"></i>
                <span class="fab-tooltip">Email Us</span>
            </a>
            <a href="https://api.whatsapp.com/send?phone=<?= str_replace(['+', ' ', '-'], '', Yii::$app->params['company']['mobile'] ?? '254720857899') ?>&text=Hello%20Attain%20Enterprise%20Solutions%2C%20I%27m%20interested%20in%20your%20services." target="_blank" class="fab-option" title="WhatsApp">
                <i class="fab fa-whatsapp"></i>
                <span class="fab-tooltip">WhatsApp</span>
            </a>
        </div>
    </div>
</div>

<style>
/* Floating Contact Button Styles */
.floating-contact-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
    display: none; /* Hidden by default, shown via JavaScript */
}

.fab-contact {
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 12px 20px;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4);
    transition: all 0.3s ease;
    font-weight: 600;
}

.fab-contact:hover {
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 6px 25px rgba(102, 126, 234, 0.6);
    text-decoration: none;
}

.fab-contact i {
    margin-right: 8px;
    font-size: 1.1rem;
}

.fab-text {
    font-size: 0.9rem;
}

/* Advanced Floating Action Menu */
.floating-actions {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1001;
}

.fab-container {
    position: relative;
}

.fab-main {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fab-main:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 25px rgba(102, 126, 234, 0.6);
}

.fab-main.active .fab-icon {
    transform: rotate(45deg);
}

.fab-options {
    position: absolute;
    bottom: 70px;
    right: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
    opacity: 0;
    visibility: hidden;
    transform: scale(0);
    transition: all 0.3s ease;
    transform-origin: bottom right;
}

.fab-options.active {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
}

.fab-option {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: white;
    font-size: 1.2rem;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    position: relative;
}

.fab-option:nth-child(1) { background: #667eea; }
.fab-option:nth-child(2) { background: #28a745; }
.fab-option:nth-child(3) { background: #dc3545; }
.fab-option:nth-child(4) { background: #25d366; }

.fab-option:hover {
    color: white;
    text-decoration: none;
    transform: scale(1.1);
}

.fab-tooltip {
    position: absolute;
    right: 60px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 0.8rem;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.fab-option:hover .fab-tooltip {
    opacity: 1;
    visibility: visible;
}

/* Responsive Design */
@media (max-width: 768px) {
    .floating-contact-btn {
        bottom: 15px;
        right: 15px;
    }
    
    .floating-actions {
        bottom: 20px;
        right: 20px;
    }
    
    .fab-contact {
        padding: 10px 16px;
        font-size: 0.85rem;
    }
    
    .fab-text {
        display: none; /* Hide text on mobile, show only icon */
    }
    
    .fab-main {
        width: 55px;
        height: 55px;
        font-size: 1.3rem;
    }
    
    .fab-option {
        width: 45px;
        height: 45px;
        font-size: 1.1rem;
    }
}

/* Hide FAB on very small screens to avoid obstruction */
@media (max-width: 480px) {
    .fab-tooltip {
        display: none;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simple Floating Contact Button - Show after scroll
    const floatingBtn = document.querySelector('.floating-contact-btn');
    const fabToggle = document.getElementById('fabToggle');
    const fabOptions = document.querySelector('.fab-options');
    
    // Show floating button after scrolling 300px
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            floatingBtn.style.display = 'block';
        } else {
            floatingBtn.style.display = 'none';
        }
    });
    
    // Advanced FAB Menu Toggle
    fabToggle.addEventListener('click', function() {
        fabToggle.classList.toggle('active');
        fabOptions.classList.toggle('active');
    });
    
    // Close FAB menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.fab-container')) {
            fabToggle.classList.remove('active');
            fabOptions.classList.remove('active');
        }
    });
    
    // Close FAB menu after clicking an option
    document.querySelectorAll('.fab-option').forEach(option => {
        option.addEventListener('click', function() {
            fabToggle.classList.remove('active');
            fabOptions.classList.remove('active');
        });
    });
});
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
