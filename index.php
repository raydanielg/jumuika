<?php
/**
 * Front controller wrapper for Laravel
 * Ensures requests are routed to public/index.php safely
 */

declare(strict_types=1);

$publicIndex = __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'index.php';

// Check if the public/index.php exists
if (!is_file($publicIndex)) {
    http_response_code(500);
    echo 'Internal Server Error: public/index.php not found.';
    exit(1);
}

// Forward the request to Laravel's front controller
require $publicIndex;
