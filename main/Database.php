<?php

class Database {
    public static $conn;
    public static function getDatabase(){
        if(!self::$conn){
            self::$conn = new PDO("mysql:host=localhost;dbname=guestbook","root","");
        }
        return self::$conn;
    }
}