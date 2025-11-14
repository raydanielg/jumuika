<?php
$publicIndex = __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'index.php';
if (!file_exists($publicIndex)) {
    http_response_code(500);
    echo 'Public index not found.';
    exit(1);
}
require $publicIndex;
