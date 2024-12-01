<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Wild Code School!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie . PHP_EOL;