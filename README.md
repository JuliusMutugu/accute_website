# Attain Enterprise Solutions Frontend

Modern frontend application for Attain Enterprise Solutions built with Yii2 Framework.

## Features

- Modern responsive design with Bootstrap 5
- Dynamic service management
- Floating contact action button
- Multi-contact options (Phone, Email, WhatsApp)
- Optimized for mobile and desktop

## Quick Deploy to Render

### Step 1: Prepare Your Repository

1. **Initialize Git Repository**:
   ```bash
   cd frontend
   git init
   git add .
   git commit -m "Initial commit - Attain Enterprise Frontend"
   ```

2. **Push to GitHub**:
   - Create a new repository on GitHub
   - Push your code:
   ```bash
   git branch -M main
   git remote add origin https://github.com/yourusername/attain-frontend.git
   git push -u origin main
   ```

### Step 2: Deploy on Render

1. **Create Web Service**:
   - Go to [Render Dashboard](https://dashboard.render.com)
   - Click "New +" → "Web Service"
   - Connect your GitHub repository
   - Select the repository you just created

2. **Configure Service**:
   - **Name**: `attain-enterprise-frontend`
   - **Environment**: `Docker` (or leave as auto-detect)
   - **Region**: Choose closest to your users
   - **Branch**: `main`
   - **Root Directory**: Leave empty (or set to `frontend` if you're deploying the whole yii folder)

3. **Build & Start Commands**:
   - **Build Command**: 
     ```bash
     composer install --no-dev --optimize-autoloader --no-interaction && chmod -R 755 runtime && chmod -R 755 web/assets
     ```
   - **Start Command**: 
     ```bash
     cd web && php -S 0.0.0.0:$PORT index.php
     ```

4. **Environment Variables** (Add in Render dashboard):
   ```
   YII_DEBUG=false
   YII_ENV=prod
   COMPOSER_ALLOW_SUPERUSER=1
   ```

### Step 3: Database Setup

1. **Create PostgreSQL Database**:
   - In Render dashboard, click "New +" → "PostgreSQL"
   - Name: `attain-database`
   - Select plan (Free tier available)

2. **Connect Database**:
   - Once database is created, go to your web service
   - In Environment Variables, add:
     - `DB_HOST` → Copy from PostgreSQL info page
     - `DB_NAME` → Copy from PostgreSQL info page  
     - `DB_USER` → Copy from PostgreSQL info page
     - `DB_PASSWORD` → Copy from PostgreSQL info page

3. **Initialize Database**:
   - Access your deployed app
   - Run the SQL script in `database.sql` to create tables

### Step 4: Test Deployment

1. **Initial Test**: 
   - Visit: `https://your-app-name.onrender.com/test-deployment.php`
   - Should show deployment test page

2. **Full Application**:
   - Visit: `https://your-app-name.onrender.com`
   - Should show the complete Attain Enterprise Solutions website

## Alternative: Deploy Specific Frontend Folder

If you want to deploy just the frontend folder (not the whole yii directory):

1. **Copy frontend folder** to a new directory
2. **Ensure all dependencies** are included:
   - `common/` folder with models and config
   - `vendor/` folder with Yii2 framework
   - All necessary configuration files

3. **Follow the same deployment steps** above

## Local Development

1. **Install Dependencies**:
   ```bash
   composer install
   ```

2. **Configure Database**:
   - Edit `common/config/main-local.php`
   - Set your local database credentials

3. **Start Development Server**:
   ```bash
   cd web
   php -S localhost:8080
   ```

4. **Access Application**:
   - Main site: http://localhost:8080
   - Test page: http://localhost:8080/test-deployment.php

## File Structure

```
frontend/
├── common/          # Shared models and configuration
├── config/          # Application configuration
├── controllers/     # Application controllers
├── models/          # Frontend-specific models
├── runtime/         # Runtime files (cache, logs)
├── views/           # View templates
├── web/             # Web accessible files
│   ├── assets/      # Compiled assets
│   ├── css/         # Stylesheets
│   ├── js/          # JavaScript files
│   └── index.php    # Entry point
├── composer.json    # Dependencies
├── init.php         # Initialization script
├── database.sql     # Database schema
└── README.md        # This file
```

## Troubleshooting

### Common Issues:

1. **Composer Install Fails**:
   - Ensure `COMPOSER_ALLOW_SUPERUSER=1` is set
   - Check SSL certificate issues (common with some firewalls)

2. **Database Connection Fails**:
   - Verify environment variables are correctly set
   - Check database credentials in Render dashboard

3. **Assets Not Loading**:
   - Ensure `web/assets` directory has write permissions
   - Check CDN links in layout file

4. **PHP Errors**:
   - Check `runtime/logs` for error details
   - Ensure all required PHP extensions are available

### Support:

- **Website**: [attain-es.com](https://attain-es.com)
- **Email**: info@attain-es.com
- **Documentation**: See inline comments in code files

## Configuration Notes

- Database automatically switches between MySQL (local) and PostgreSQL (production)
- All static assets use CDN for better performance
- Application is optimized for production deployment
- CSRF protection and security headers are enabled

## License

Proprietary - Attain Enterprise Solutions
