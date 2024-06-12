<?php

include_once 'function/main.php';
include_once 'app/config/static.php';
include_once 'controllers/main.php';

Router::url('index', 'get', 'AuthController::index');

