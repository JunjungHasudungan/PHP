<?php

class A 
{
    public static $title = "A";

    public static function getTitle():String
    {
        return self::$title;
    }

    public static function checkClass()
    {
        return static::getTitle();
    }
}

class B extends A
{
    public static $title = "B";
}

echo A::getTitle();
echo "<br>";
var_dump(A::checkClass());
echo "<hr>";

echo B::getTitle();
echo "<br>";
var_dump(B::checkClass());