<?php
    
    include "Mahasiswa.php";

    //Input using set method
    $mhs1 = new Mahasiswa();
    $mhs1->setNim("2003721");
    $mhs1->setNama("Alvin Giovani");
    $mhs1->setKelamin("Pria");
    $mhs1->setProdi("Ilmu Komputer");
    $mhs1->setSemester("4");

    //input by parameter
    $mhs2 =  new Mahasiswa("2000000", "Andin", "Wanita", "Manajemen Kewanitaan", "6");
    
    //output student 1
    echo "NIM : ". $mhs1->getNim()."<br>";
    echo "Nama : ". $mhs1->getNama() ."<br>";
    echo "Kelamin : ". $mhs1->getKelamin()."<br>";
    echo "Prodi : ". $mhs1->getProdi() ."<br>";
    echo "Semester : ". $mhs1->getSemester() ."<br>";

    echo "<br>";

    //output student 2
    echo "NIM : ". $mhs2->getNim()."<br>";
    echo "Nama : ". $mhs2->getNama() ."<br>";
    echo "Kelamin : ". $mhs2->getKelamin()."<br>";
    echo "Prodi : ". $mhs2->getProdi() ."<br>";
    echo "Semester : ". $mhs2->getSemester() ."<br>";

    

?>