<?php
require 'vendor/autoload.php';
use CowSay\Cow;
$bessie = new Cow('Bonjour les gueux!');
$bessie->setEyes('^^')
    ->setTongue('U')
    ->setUdder('-');
echo $bessie;