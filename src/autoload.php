<?php
spl_autoload_register(function ($class) {
    $class = str_replace("\\", "/", $class);
    $filePath = sprintf("%s/%s.php", __DIR__, $class);
    if (is_file($filePath)) {
        include($filePath);
    }
});

$venderAutoloadPath = sprintf("%s/vendor/autoload.php", __DIR__);
include($venderAutoloadPath);

