<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password,'webb') or die("Xatolik: ".$conn->connect_error);


//    if($conn->query("CREATE DATABASE webb")){
//        echo "Yaratildi!<br>";
//    }
//    else{
//        echo "Bunday Baza mavjud!<br>";
//    }

    $jadval = "users";

    if($conn->query("CREATE TABLE webb.$jadval(
                            id int NOT NULL AUTO_INCREMENT,
                            name varchar(255) NOT NULL,
                            password varchar(255) NOT NULL,
                            PRIMARY KEY(id)
    )")
    ){  echo "$jadval nomli jadval yaratildi<br>";  }
    else echo "$jadval nomli jadval mavjud!<br>";


//    $conn->query("DROP DATABASE dbTest");
    $conn->close();

