<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "belajar_pwl" ;

$con = mysqli_connect($hostname, $username, $password, $database);

if($con->connect_errno){
    echo "Koneksi database gagal karena".$con->connect_error;
    exit;
}


?>