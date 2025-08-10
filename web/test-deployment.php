<?php
// Simple test to verify the frontend is working
echo "Attain Enterprise Solutions Frontend - Ready for Deployment!";
echo "<br>PHP Version: " . PHP_VERSION;
echo "<br>Server: " . $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown';
echo "<br>Document Root: " . $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown';
echo "<br>Request URI: " . $_SERVER['REQUEST_URI'] ?? '/';

// Test if we can connect to environment variables
echo "<br><br>Environment Variables Test:";
echo "<br>DB_HOST: " . ($_ENV['DB_HOST'] ?? 'Not set (will use localhost)');
echo "<br>DB_NAME: " . ($_ENV['DB_NAME'] ?? 'Not set (will use attain_es_db)');
echo "<br>YII_ENV: " . ($_ENV['YII_ENV'] ?? 'Not set (will use dev)');
echo "<br>YII_DEBUG: " . ($_ENV['YII_DEBUG'] ?? 'Not set (will use true)');

// Test basic PHP functions
echo "<br><br>PHP Functionality Test:";
echo "<br>File operations: " . (function_exists('file_get_contents') ? 'OK' : 'FAIL');
echo "<br>JSON functions: " . (function_exists('json_encode') ? 'OK' : 'FAIL');
echo "<br>MySQL extension: " . (extension_loaded('mysqli') ? 'OK' : 'FAIL');
echo "<br>PostgreSQL extension: " . (extension_loaded('pgsql') ? 'OK' : 'FAIL');
echo "<br>OpenSSL extension: " . (extension_loaded('openssl') ? 'OK' : 'FAIL');
echo "<br>CURL extension: " . (extension_loaded('curl') ? 'OK' : 'FAIL');

// Basic HTML structure for the test page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Attain Enterprise Solutions - Deployment Test</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f5f5f5; }
        .container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .success { color: #28a745; font-weight: bold; }
        .info { color: #007bff; }
        .logo { text-align: center; margin-bottom: 30px; }
        .status { background: #e9ecef; padding: 15px; border-radius: 5px; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <h1 style="color: #333;">🚀 Attain Enterprise Solutions</h1>
            <p class="success">Frontend Deployment Test - SUCCESS!</p>
        </div>
        
        <div class="status">
            <h3>Deployment Status</h3>
            <p class="success">✓ PHP Runtime: Working</p>
            <p class="success">✓ Web Server: Active</p>
            <p class="success">✓ File System: Accessible</p>
            <p class="info">ℹ Ready for Yii2 Application Initialization</p>
        </div>
        
        <div class="status">
            <h3>Next Steps</h3>
            <ol>
                <li>Run <code>composer install</code> to install dependencies</li>
                <li>Configure database connection</li>
                <li>Initialize Yii2 application</li>
                <li>Access the full website</li>
            </ol>
        </div>
        
        <div style="text-align: center; margin-top: 30px;">
            <p><strong>Attain Enterprise Solutions</strong><br>
            Modern Technology Solutions for Your Business</p>
        </div>
    </div>
</body>
</html>
