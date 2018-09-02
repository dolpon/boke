<?php


spl_autoload_register(function($fun){
    echo 444;exit;
//    include strtolower($fun).'.php';

}, true, true);
funA();

