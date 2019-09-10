<?php

class Input {
    public static function exists($type='post'){
        switch($type){
            case 'post':
                return (!empty($_POST)) ? true :false;
            break;
            case 'get':
                return (!empty($_GET)) ? true :false;
            break;
            default:
                return false;
            break;
        }
    }

    public static function get($iteam){

        if(isset($_POST[$iteam])){
            return $_POST[$iteam];
        }else if (isset($_GET[$iteam])){
            return $_GET[$iteam];
        }
        return "";
        
    }












}