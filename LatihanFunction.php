<?php

class Barang
{
    public function __construct(private int $harga = 5000, private int $discon = 5)
    {}
    
    public function getTotal(int $jumlahJam) : int
    {
        $total = 0; // variable local
        if($jumlahJam <= 5){
            $total += $jumlahJam * $this->harga;   
            return $total;
        }
        elseif($jumlahJam >= 6 && $jumlahJam <= 10){
            $total += ($jumlahJam * $this->harga) - (($this->harga * $this->discon) / 100);
            return $total;
        }
        elseif($jumlahJam >= 11 && $jumlahJam <= 24){
            $total += ($jumlahJam * $this->harga) - (($this->harga * ($this->discon + 5)) / 100);

            return $total;
        }
        else{
            return $total;
        }
    }
}

    $barang = new Barang();
    echo $barang->getTotal(jumlahJam: 16 );
