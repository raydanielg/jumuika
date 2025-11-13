<?php
// Root-level index that boots the Laravel app via public/index.php
// Useful when the host's web root cannot be pointed to the public directory.
$publicIndex = __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'index.php';

if (file_exists($publicIndex)) {
    require $publicIndex;
    exit;
}

http_response_code(500);
echo 'Error: public/index.php not found.';
