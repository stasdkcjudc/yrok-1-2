<?php

$start_framework = microtime(true);

if (PHP_MAJOR_VERSION < 8) {
    die("Ваша версия php менее 8.0 и не поддерживается");
}

require_once __DIR__ . '/../config/config.php';
require_once ROOT . '/vendor/autoload.php';
require_once HELPERS . '/helpers.php';

$app = new PHPFramework\Application;

dump($app);
dump(request()->getMethod());
dump(request()->isGet());
dump(request()->isPost());
dump(request()->isAjax());
dump(request()->get('page', '10'));
dump(request()->post('page'));

dump("Time: " . (microtime(true) - $start_framework));dump("Time" . microtime(true) - $start_framework);