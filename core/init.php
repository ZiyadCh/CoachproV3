<?php
// rempve in production
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// rempve in production

spl_autoload_register(function($classname){
  $filename = "../app/models/".ucfirst($classname).".php";
  require $filename;
});
require 'config.php';
require 'functions.php';
require 'Databases.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';
