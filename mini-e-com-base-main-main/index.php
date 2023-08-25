<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/routes.php';
require __DIR__ . '/config.php';

$sContent = render(
    $_GET['pg'] ??= 'home' // Página padrão: 'home'
);

echo $sContent;
