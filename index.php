<?php
    session_start();
    define("ROOT", $_SERVER['DOCUMENT_ROOT']);
    define("CONTROLLER_PATH", ROOT . "/controllers/");
    define("MODEL_PATH",      ROOT . "/models/");
    define("VIEW_PATH",       ROOT . "/views/");

    require_once("Database.php");
    require_once("routers/Router.php");
    require_once MODEL_PATH      . 'Model.php';
    require_once VIEW_PATH       . 'View.php';
    require_once CONTROLLER_PATH . 'Controller.php';

    Router::route();
