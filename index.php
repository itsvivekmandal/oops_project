<?php

session_start();

require 'config.php';
require './Classes/message.php';
require './Classes/bootstrap.php';
require './Classes/controller.php';
require './Classes/model.php';

require './Controllers/home.php';
require './Controllers/user.php';
require './Controllers/task.php';

require './Models/home.php';
require './Models/user.php';
require './Models/task.php';


$bootstrap = new Bootstrap($_GET);
// print_r($_GET);
print_r($_SESSION);
$controller = $bootstrap->createController();
// print_r($controller);
if($controller){
  $controller->executeAction();
}