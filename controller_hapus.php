<?php 
  include ("env.php");

  if (isset($_GET['id'])) {
    $delete = mysqli_query($con, "DELETE FROM tb_biodata WHERE id='$_GET[id]'") or exit("Error query : <b>" . $sql . "</b>.");

    session_start();
    $_SESSION['delete_data'] = '<div class="alert alert-danger" role="alert">Data berhasil dihapus</div>';
    header("Location: index.php");
  }
?>
