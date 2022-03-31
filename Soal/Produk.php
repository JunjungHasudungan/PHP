<?php

abstract class Produk
{
    public $nama;
    public $harga;

    public function __construct($nama = "produk", $harga = 0)
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;

        
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getAll()
    {
        $all = "{$this->getNama()} | {$this->getHarga()}";

        return $all;
    }

}

class Buku extends Produk
{
    public $penulis;

    // nama, harga, penulis
    public function __construct($nama, $harga, $penulis)
    {
        parent::__construct($nama, $harga);
        $this->penulis = $penulis;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getAll()
    {
        echo "Daftar Produk <br>";

        echo "Data Buku = ".$this->getNama() . " | " 
        . $this->getHarga() ." | " .$this->getPenulis();
    }
    
}

class Tampil
{
    public $daftarProduk = [];

    public function ambilData(Buku $buku)
    {
        $this-> daftarProduk = $buku;
    }

    public function getInfo()
    {
        
    }

    public function cetak()
    {
        $data =  "SEMUA DATA";
        $index = 1;

        foreach($this->daftarProduk as $item)
        {
            $data .= $index++ . " ";

            // $data .= []
        }
    }
}

$buku1 = new Buku("OOP PHP", 35000, "Nama kalian");

echo $buku1->getAll();


