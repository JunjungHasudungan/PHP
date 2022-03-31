<?php

abstract class ProdukItem
{
    public static $judul = "ini abstract class Product Item";

   abstract public function getTitle():String;

    public static function showTitle():String
    {
        return self::$judul;
    }
}

class Buku extends ProdukItem 
{
    public function getTitle(): string
    {
        return $this->title;
    }
}
echo "<br>";
echo Buku::showTitle();
$obj = new Buku();
// echo $obj->