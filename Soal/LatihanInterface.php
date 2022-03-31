<?php

interface Kendaraan
{
    public function onMachine():void;
}

class Beat implements Kendaraan
{
    public bool $startMachine = false;

    public function onMachine(): void
    {
        $this->startMachine = true;

        echo "Kondisi mesin hidup ya, sabi";
    }
}

class Avanza implements Kendaraan
{
    public bool $startMachine = false;

    public function onMachine(): void
    {
        $this->startMachine = true;

        echo "Kondisi mesin avanza hidup ya, sabi <br>";
    }
}

class KendaraanUser
{
    // deklarasi ulang nama interface serta member variablenya, ya 
    public Kendaraan $kendaraan;

    // membuat constructor 
    // konsep Dependency Injection
    public function __construct(Kendaraan $Kendaraan)
    {
        $this->kendaraan = $Kendaraan;
    }

    public function startonMachine()
    {
        $this->kendaraan->onMachine();
    }
}

// inisialisasi class object
$beat1 = new Beat();

$avanza1 = new Avanza();

$kendaraanUser = new KendaraanUser($beat1);
$kendaraanUser1 = new KendaraanUser($avanza1);

$kendaraanUser->startonMachine();
echo "<br>";
$kendaraanUser1->startonMachine();