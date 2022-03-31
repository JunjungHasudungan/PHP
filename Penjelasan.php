<?php
class CheckNilai
{
    public $nilai = 50;
    public $names = ["a", "b"];


    public function all()
    {
        for($index = 0; $index < count($this->names); $index++)
        {

            // echo ($index+1) ."<br>";
        }
    }

/*     public function checkNilai($inputNilai = 0)
    {
        if($this->nilai > $inputNilai)
        {
            echo "NILAI LEBIH BESAR";
        }
        elseif($this->nilai == $inputNilai)
        {
            echo "NILAI SAMA";
        }
        else{
            echo "NILAI LEBIH KECIL";
        }
    } */
}
$checkNilai = new CheckNilai();

echo $checkNilai->all();
// echo $checkNilai->checkNilai();