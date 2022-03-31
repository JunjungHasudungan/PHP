<?php

class Barang
{
    private $harga; // variable global
    private $discon;

    public function __construct(int $harga = 5000, int $discon = 5)
    {
        $this->harga = $harga;
        $this->discon = $discon;
    }

    public function getTotal(int $jumlahJam)
    {
        $total = 0; // variable local

        if($jumlahJam <= 5)
        {
            $total += $jumlahJam * $this->harga;
            
            return $total;
        }
        elseif($jumlahJam >= 6 && $jumlahJam <= 10)
        {
            // diskon 5 %
            $total += ($jumlahJam * $this->harga) - (($this->harga * $this->discon) / 100);

            return $total;
        }
        elseif($jumlahJam >= 11 && $jumlahJam <= 24)
        {
            // diskon 10 %
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
