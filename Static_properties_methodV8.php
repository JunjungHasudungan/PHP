<?php
//  static memiliki 2 jenis
// 1. early static
// 2. late static 

class Babeh
{
    public static string $judul = "ini dari class Babeh";

    public static function getJudul():String
    {
        return static::$judul;
    }

    public static function make():self
    {
        return new static;
    }
}

class Bocil extends Babeh 
{
    public static string $judul = "ini dari class Bocil";
}

// echo Babeh::make();
echo Babeh::getJudul();
// var_dump(Babeh::make());

echo "<br>";
echo Bocil::getJudul();
// var_dump(Bocil::make());

echo "<br>";
// echo Bocil::make();
