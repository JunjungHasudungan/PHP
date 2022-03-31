<?php

class Babeh
{
    // data member / attributes
    public $nama;
    public $marga;

    // constructor
    public function __construct($marga = "Sitorus", $nama = "Asep")
    {
        $this->nama = $nama;
        $this->marga = $marga;
    } 

    public function setNama(string $nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
    public function display(): void
    {
      echo "nama : " . $this->getNama() . "<br>";
      echo "marga : " . $this->getMarga(); 
    }

    public function getMarga()
    {
        return $this->marga;
    }
}

class Bocil extends Babeh
{
    public $role;

    public function __construct($nama, $role = "Student")
    {
        parent::__construct($marga = "Sitorus", $nama);
        $this->role = $role;
    }

    public function fungsiSon()
    {
        parent::display()."<br>";
        echo "role : ".$this->getRole();
    }

    public function getRole()
    {
        return $this->role;
    }
}

$bocil1 = new Bocil("Hasudungan");
echo $bocil1->fungsiSon();
