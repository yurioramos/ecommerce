<?php

require_once("vendor/autoload.php");

use \slim\slim;
use \ Hcode\page;

$app = new \slim\slim();

$app->config('debug', true);

$app->get('/',function() {

	$page = new Hcode\page();

	$page->setTpl("index");

});

$app->run();

?>