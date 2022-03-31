<?php

interface Binatang
{
    // $nama = "interface binatang";
    public function lari();
}

class Anjing implements Binatang
{
    public function __construct(public string $nama = "chiko")
    {}

    public function lari()
    {
        return $this->nama;
    }
}

$anjing1 = new Anjing();

echo $anjing1->lari();