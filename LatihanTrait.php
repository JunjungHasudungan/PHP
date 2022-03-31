<?php

trait serviceGreeting
{
    // syarat:
    // 1. bisa memiliki variable member
    // 2. memiliki contain body
    public string $nama;

    public function sayHelo(string $nama):string
    {
        return "halo ". $nama;
    }
}

class User 
{
    // mendeklarasi saja
    use serviceGreeting;

    public function sayHelo($nama)
    {
        return "halo".$nama;
    }
}

// inisialisasi class object
$user1 = new User();
$user1->sayHelo(nama: " Hasudungan");
