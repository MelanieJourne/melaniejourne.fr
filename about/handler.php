<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;

$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->field('name')->isRequired()->maxLength(50);
$validator->field('email')->isRequired()->maxLength(50)->isEmail();
$validator->field('message')->maxLength(6000);

$pp->sendEmailTo('melaniejourne@gmail.com'); // ← Your email here

echo $pp->process($_POST);
