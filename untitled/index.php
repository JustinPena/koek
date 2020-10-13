<?php

use controller\Controller;
include_once ("controller/Controller.php");

$controller = new Controller();
$controller->updateView();

$controller->updateModel(2,"Klets",5.00);
$controller->updateView();

$controller->updateModel(3,"Iets",15.00);
$controller->updateView();

