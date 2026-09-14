<?php
// Enable error display for debugging on Vercel
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Set working directory to project root for Vercel Serverless Function
$rootDir = dirname(__DIR__);
chdir($rootDir);

$mainIndex = $rootDir . '/index.php';
if (file_exists($mainIndex)) {
    require_once $mainIndex;
} else {
    http_response_code(500);
    echo "<h1>Configuration Error</h1><p>Could not find index.php at: " . htmlspecialchars($mainIndex) . "</p>";
}
