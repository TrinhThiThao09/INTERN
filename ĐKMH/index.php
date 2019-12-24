<?php
session_start();
    include "model/DB_config.php";
    $db = new database;
    $db->connect();

    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }else{
        $controller = '';
    }

    switch($controller){
        case 'actor':{
            require_once('controller/index_controller.php');
        }
        
    }
?>