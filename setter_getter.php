<?php

class Contoh2
{
    // variable global
    public $nama;
    private $harga;


    // constructor 
    public function __construct(string $nama = "kopi", int $harga = 1000)
    {
        $this->nama = $nama; 
        $this-> harga = $harga;  
    }

    // function setter dengan parameter
    public function setNama(string $nama)
    {
        $this->$nama = $nama;
    }

    public function getNama():string
    {
        return $this->nama;
    }

    public function display():void
    {
       echo "nama : ".$this->getNama();
    }
}

$contoh1 = new Contoh2();

$contoh1->setNama(nama: "Buku");

echo $contoh1->display();


