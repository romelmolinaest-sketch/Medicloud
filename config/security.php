<?php

header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("X-XSS-Protection: 1; mode=block");

function e($dato)
{
    return htmlspecialchars($dato, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
