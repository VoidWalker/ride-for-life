<?php

define('BP', getcwd());
require_once 'autoload.php';

class Main
{
    public $db;
    public static $_controller;
    public static $_action;

    public static function init()
    {
        self::parsRequest();
        $controller = new self::$_controller();
        $controller->{self::$_action}();
    }

    public static function parsRequest()
    {
        $request = explode('?', $_SERVER['REQUEST_URI']);
        $parts = explode('/', trim($request[0], '/'));
        self::$_controller = 'Controller_' . ((!empty($parts[0])) ? $parts[0] : 'index') . 'Controller';
        self::$_action = ((!empty($parts[1])) ? $parts[1] : 'index') . 'Action';
        $parameters = array();
        if (!empty($parts[2])) {
            for ($i = 2; $i < count($parts); $i++) {
                if ($i % 2 === 0) {
                    $parameters[$parts[$i]] = null;
                } else {
                    $parameters[$parts[$i - 1]] = $parts[$i];
                }
            }
        }
    }
}