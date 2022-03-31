<?php

class User 
{
    //  member / atribute
    // 4 . visibity accsess modifier
        // public, protected, private, default
    public $nama;
    public $umur; // 

    public function all()
    {
        $number = 1; // variable local
    }
   
}

// inisialisasi object
$user1 = new User();

echo $user1->nama = "Hasudungan <br>";
echo $user1->umur = 24;