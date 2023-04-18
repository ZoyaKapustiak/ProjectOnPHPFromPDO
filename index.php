<?php

$controller = $_GET['controller'] ?? 'click';
$routes = require 'routes.php';

require_once $routes[$controller];
require 'fixture.php';