<?php


class SoccerClub{
    //atribut
    private $Name = "";
    private $Nation = "";
    private $Year = "";
    private $Players = array();

    //konstruktor
    function __construct($Namec = "", $Nationc = "", $Yearc = "", $Playersc = "")
    {
        $this->Name = $Namec;
        $this->Nation = $Nationc;
        $this->Year = $Yearc;
        $this->Players = $Playersc;        
    }

    //methods get set
    function setName($Namec){
        $this->Name = $Namec;
    }
    
    function setNation($Nationc){
        $this->Nation = $Nationc;
    }

    function setYear($Yearc){
        $this->Year = $Yearc;
    }

    function setPlayers($Playersc){
        $this->Players = $Playersc;
    }

    function getName(){
        return $this->Name;
    }

    function getNation(){
        return $this->Nation;
    }

    function getYear(){
        return $this->Year;
    }

    function getPlayers(){
        return $this->Players;
    }

    function output(){
        echo "Name Team : ". $this->getName()."<br>";
        echo "Country : ". $this->getNation() ."<br>";
        echo "Established : ". $this->getYear()."<br>";
        echo "Players : <br>";

        for($i = 0; $i < count($this->getPlayers()); $i++){
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp- ".$this->getPlayers()[$i]."<br>";
        }
    }


}
?>