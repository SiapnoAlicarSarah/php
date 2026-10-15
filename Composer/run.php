<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\Authentication;

$authentication = new Authentication();

echo $authentication->login('admin', '1234')
    ? 'Login successful.'
    : 'Login failed.';
echo PHP_EOL;