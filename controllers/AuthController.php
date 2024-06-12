<?php

include_once 'function/main.php';
include_once 'app/config/static.php';

class AuthController{
    static function index(){
        view('index', ['url' => 'index']);
    }
}