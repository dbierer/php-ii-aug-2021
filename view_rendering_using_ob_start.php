<?php
$title = 'TEST';
$body  = __FILE__;
$output = '';

// view rendering
ob_start();
include __DIR__ . '/includes/template.html';
$contents = ob_get_contents();
ob_end_clean();

// manipulation
$output = str_replace('%%TITLE%%', $title, $contents);
$output = str_replace('%%BODY%%', $body, $output);

// output
echo $output;

