<?php
  include("env.php");

  if (isset($_GET['id'])) {
    $data = mysqli_query($mysqli, "SELECT * FROM tb_biodata WHERE id='$_GET[id]'");

    session_start();
    $_SESSION['update_data'] = '<div class="alert alert-info" role="alert">Data berhasil diupdate</div>';
    header("Location: index.php");
  }
?>