<?php
abstract class Product
{
    // public $nama;
    // syarat:
    // 1. memiliki atribute / properthies harus public 
    // 2. memiliki function yang bersifat abstract
    // 3. tidak memiliki contain body pada function
    // 4 . harus sama dengan class implementasinya

    abstract public function judul(String $nama) :void;
}

class Buku extends Product
{
    public $nama; // variable global

    public function __construct(String $nama = "moralandscape")
    {
        $this->nama = $nama;
    }

    public function getNama():String
    {
        return $this->nama;
    }

    public function judul(String $nama) :void //Overriding
    {
        $this->nama = $nama;
    }

    public function getJudul()
    {
        return $this->nama;
    }
}

$buku1 = new Buku();

echo $buku1->getJudul();