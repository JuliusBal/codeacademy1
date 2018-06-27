<?php
/**
 * Created by PhpStorm.
 * User: Julius
 * Date: 2018-06-27
 * Time: 11:45
 */
require_once __DIR__ . "/vendor/autoload.php";

use Hello\SayHello;

$hello = new SayHello();

echo $hello->world();