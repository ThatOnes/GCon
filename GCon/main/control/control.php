<?php 
    $koneksi = mysqli_connect("localhost", "root", "", "gcon");

    if(mysqli_connect_error()){
        echo "Koneksi ke database tidak berjalan",mysqli_connect_error();
    }


    
?>