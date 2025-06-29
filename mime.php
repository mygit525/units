<?php
// Set correct MIME type headers for JavaScript files
if (preg_match('/\.js$/', $_SERVER['REQUEST_URI'])) {
    header('Content-Type: application/javascript');
}
// Include the actual file
include __DIR__ . $_SERVER['REQUEST_URI'];
?>