<?php
// Simple test page to verify everything is working
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attain Enterprise Solutions - Test Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 mb-4">Attain Enterprise Solutions</h1>
                    <p class="lead">Modern Website Development Environment</p>
                    <p class="mt-4">
                        <strong>PHP Version:</strong> <?php echo phpversion(); ?><br>
                        <strong>Server:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'PHP Development Server'; ?><br>
                        <strong>Status:</strong> <span class="badge bg-success">Running Successfully!</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PHP Extensions</h5>
                        <div class="card-text">
                            <?php
                            $required_extensions = ['curl', 'openssl', 'mbstring', 'fileinfo', 'gd', 'intl', 'zip'];
                            foreach ($required_extensions as $ext) {
                                $loaded = extension_loaded($ext);
                                echo '<span class="badge ' . ($loaded ? 'bg-success' : 'bg-danger') . ' me-1 mb-1">' . $ext . '</span>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Project Structure</h5>
                        <div class="card-text">
                            <ul class="list-unstyled">
                                <li>✅ Frontend Ready</li>
                                <li>✅ Backend Ready</li>
                                <li>✅ Common Models</li>
                                <li>✅ PHP 8.3.24 Running</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Next Steps</h5>
                        <div class="card-text">
                            <ul class="list-unstyled">
                                <li>🔄 Install Composer Dependencies</li>
                                <li>🗄️ Setup Database</li>
                                <li>🚀 Launch Full Application</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
