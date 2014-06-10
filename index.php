<?php
//ini_set( 'display_errors', 'On' );
//error_reporting( 1 );

// Use on autoloader
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

// Library
require 'libs/Database.php';
require 'libs/Session.php';

// Config
require 'config/paths.php';
require 'config/database.php';

$app = new Bootstrap();




