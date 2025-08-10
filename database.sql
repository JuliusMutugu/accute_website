-- Create services table for PostgreSQL/MySQL compatibility
CREATE TABLE IF NOT EXISTS services (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    slug VARCHAR(255) UNIQUE,
    icon VARCHAR(100),
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample services data
INSERT INTO services (title, description, slug, icon, content) VALUES
('Cloud Computing Solutions', 'Comprehensive cloud architecture, migration, and management services to optimize your infrastructure.', 'cloud-computing', 'fas fa-cloud', 'Cloud Migration & Strategy
Multi-Cloud Management
Cost Optimization
Scalability Planning'),

('Custom Software Development', 'Tailored software solutions built with modern technologies to meet your specific business needs.', 'software-development', 'fas fa-code', 'Web & Mobile Applications
API Development
System Integration
Legacy System Modernization'),

('Cybersecurity Services', 'Protect your business with comprehensive security solutions and threat management.', 'cybersecurity', 'fas fa-shield-alt', 'Security Assessments
Threat Monitoring
Compliance Management
Incident Response'),

('Data Analytics & BI', 'Transform your data into actionable insights with advanced analytics and business intelligence.', 'data-analytics', 'fas fa-chart-line', 'Data Visualization
Predictive Analytics
Real-time Dashboards
Data Warehousing'),

('Process Automation', 'Streamline operations and increase efficiency with intelligent automation solutions.', 'automation', 'fas fa-robot', 'Workflow Automation
RPA Implementation
Process Optimization
Integration Services'),

('IT Support & Maintenance', 'Reliable ongoing support to keep your systems running smoothly and efficiently.', 'it-support', 'fas fa-headset', '24/7 Support
System Monitoring
Preventive Maintenance
Help Desk Services');

-- Create indexes for better performance
CREATE INDEX IF NOT EXISTS idx_services_slug ON services(slug);
CREATE INDEX IF NOT EXISTS idx_services_title ON services(title);
