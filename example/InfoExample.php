<?php

use ATereshchuk\BestChange\BestChange;
use ATereshchuk\BestChange\Methods\InfoMethod;

require_once __DIR__ . '/../vendor/autoload.php';

$bestChange = new BestChange();
$bestChange->setArchivePath(__DIR__);

if (! file_exists($bestChange->getArchivePath())) {
    $bestChange->download();
}

var_dump(
    $bestChange->getArray(InfoMethod::class)
);
