<?php

try {
    require __DIR__ . '/data/system/create.php';
    ob_start();
    require __DIR__ . 'config/config.php';
    $app = new Application();
    init_config();
    $app->run();
} catch (\Exception $e) {
    echo $e->getMessage();
}
