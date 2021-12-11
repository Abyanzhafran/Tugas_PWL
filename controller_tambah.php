<?php 
include("env.php");

$sql = "INSERT INTO tb_biodata(nama,alamat) ";
$sql.= "VALUES ('".$_POST['txtNama']."','".$_POST['txtAlamat']."')";
$query = mysqli_query($con,$sql) or exit("Error query : <b>".$sql."</b>.");

if($query->connect_errno){
    echo "Koneksi database gagal karena".$query->connect_error;
    exit;
}else{
    session_start();
    $_SESSION['Flash_data'] = '<div class="alert alert-success">Data Berhasil di tambahkan.</div>';
    header("Location: index.php");
}
?>