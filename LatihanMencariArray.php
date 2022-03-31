<?php

class SearchArray
{
    public $names = ["Asep","Arief","Anto", "Retno", "Reza"];
    public bool $search = false;
    public function getAllName():SearchArray{
        $index = 1;
        echo "Nama seluruh siswa: <br>";
        foreach($this->names as $name){
            echo $index++ . ". " .$name . "<br>";
        }
        return $this;
    }
    public function searchName(string $searchName):void{
        echo "Nama yang dicari : [" . $searchName ."] . <br>";
        for($i = 0; $i < count($this->names); $i++){
            if($searchName == $this->names[$i]){
                $this->search = true;
                echo  "Nama [".$this->names[$i]."] ada di index : " . ($i+1) ."<br>";
            }
        }
        if($this->search == false){
            echo  "Nama [" . $searchName. "] tidak ada di dalam array <br>";
        }
    }
}
$searchArray = new SearchArray();
echo $searchArray->getAllName()->searchName(searchName: "Retno");