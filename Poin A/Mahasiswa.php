<?php


class Mahasiswa{
    //atribut
    private $nim = "";
    private $nama = "";
    private $kelamin = "";
    private $prodi = "";
    private $semester = "";

    //konstruktor
    function __construct($nimc = "", $namac = "", $kelaminc = "", $prodic = "", $semesterc = "")
    {
        $this->nim = $nimc;
        $this->nama = $namac;
        $this->kelamin = $kelaminc;
        $this->prodi = $prodic;
        $this->semester = $semesterc;        
    }

    //methods get set
    function setNim($nimc){
        $this->nim = $nimc;
    }
    
    function setNama($namac){
        $this->nama = $namac;
    }

    function setKelamin($kelaminc){
        $this->kelamin = $kelaminc;
    }

    function setProdi($prodic){
        $this->prodi = $prodic;
    }

    function setSemester($semesterc){
        $this->semester = $semesterc;
    }

    function getNim(){
        return $this->nim;
    }

    function getNama(){
        return $this->nama;
    }

    function getKelamin(){
        return $this->kelamin;
    }

    function getProdi(){
        return $this->prodi;
    }
    function getSemester(){
        return $this->semester;
    }


}
?>