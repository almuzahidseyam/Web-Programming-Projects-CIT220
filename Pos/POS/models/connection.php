<?php

class Connection{
    public static function connect(){
        $link = new PDO("mysql:host=localhost; dbname=pos","root","");
        $link -> exec("set names utf16");
        return $link;
    }
}