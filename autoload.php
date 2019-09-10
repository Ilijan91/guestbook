<?php

function autoloadCore($class){
    require_once "main/{$class}.php";
}

spl_autoload_register('autoloadCore');