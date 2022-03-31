<?php

class Binatang
{
    // public $nama; // variable global
    // public $jenis;

    // syarat:
    // 1. harus memiliki variable global 
    // 2. memiliki function __consttruct
    // 3. dapat memiliki nilai default
    
    public function __construct($nama = "Milo", $jenis = "cua-cua")
    {
        $this->nama = $nama;
        $this->jenis = $jenis;   
    }

    // attributes promotions

    // public function __construct(public $nama = "Milo", public $jenis = "cua-cua")
    // {}

    public function display():void
    {
        $nama = "black";

        echo "nama : " .$this->nama . "<br>";
        echo "jenis : ". $this->jenis;
    }
}

// inisialisasi objek
$binatang1 = new Binatang("Black", "herder");

echo $binatang1->display();