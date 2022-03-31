<?php

class Bapak 
{
    public $nama; // variable global
    public $marga;
    public $status;
    public $harga;

    public function __construct(
        String $nama = "Aref", String 
        $marga = "Margarin", 
        String $status = "Bapak", 
        int $harga = 5000
        )
    {
        $this->nama = $nama;
        $this->marga = $marga;
        $this->status = $status;
    }

    public function getNama() : String
    {
        return $this->nama;
    }
    
    public function getMarga() : String
    {
        return $this->marga;        
    }
    
    public function getStatus() : String
    {
        return $this->status;        
    }
    public function display():void
    {
        echo  $this->judul(). " <br>"; // overloading
        echo "Nama : " . $this->getNama() . "<br>";
        echo "Marga : " . $this->getMarga(). "<br>";
        echo "Status : " . $this->getStatus(). "<br>";
        // echo 
    }

    public function judul() : void
    {
        echo "ini dari class ". $this->getStatus();
    }
}

class Anak extends Bapak
{
 public $role;

 public function __construct(
     String $nama = "Asep", String $marga = "margarin", 
     String $status = "Anak", String $role = "Murid"
     )
    {
        // overriding constructor
        parent::__construct($nama, $marga, $status); 
        $this->role = $role;
    }

    public function displayChild():void
    {
        echo parent::display();
        echo "Role : ".$this->getRole(); 
    }

    public function getRole() : String
    {
        return $this->role;
    }
}
// inisialisasi object

$bapak = new Bapak();

$anak1 = new Anak();
echo $bapak->display();

echo "<hr>";
echo $anak1->displayChild();

