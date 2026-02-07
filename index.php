<?php
require './models/User.php';
require './models/Point.php';

session_start();
define('BASE_URL', '/ponto/');
$config = require('config.php');

// require 'models/Leilao.php';

require 'Flash.php';
require 'functions.php';
require 'database.php';
require 'routes.php';

//dd();
?>
