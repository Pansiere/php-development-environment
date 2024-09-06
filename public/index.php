<?php

require __DIR__ . '/../vendor/autoload.php';

use Pansiere\Env\Controller\Controller;

$page = rtrim(strtok($_SERVER['REQUEST_URI'], '?'), '/') ?: '/';

dd($uri, $pageOld, $page);
