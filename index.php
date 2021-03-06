<?php
/* 
 * Project: Nathan MVC
 * File: index.php
 * Purpose: landing page which handles all requests
 * Author: Nathan Davison
 */

//load the required classes
require("classes/basecontroller.php");  
require("classes/basemodel.php");
require("classes/view.php");
require("classes/viewmodel.php");
require("classes/loader.php");

$loader = new Loader(); //create the loader object
$controller = $loader->createController(); //creates the requested controller object based on the 'controller' URL value
$controller->executeAction(); //execute the requested controller's requested method based on the 'action' URL value. Controller methods output a View.

?>