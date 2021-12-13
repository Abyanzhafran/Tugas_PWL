<?php
include "partial/header.php";
include 'env.php';

if (isset($_GET['id'])) {
  $detail = mysqli_query($con, "SELECT id, nama, alamat FROM tb_biodata WHERE id='$_GET[id]' ");
  $data = mysqli_fetch_assoc($detail);
?>

<div id="main">
  <div class="page-heading">
    <section class="section">
      <div class="row">
        <div class="col-12">

          <div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-6">
									<h4 class="card-title">Detail Biodata</h4>
								</div>
								<div class="col-6"> <a href="index.php" class="btn btn-success float-end">Kembali</a>
								</div>
							</div>
						</div>
						<div class="card-content">
							<form action="controller_tambah.php" method="post" class="form form-horizontal">

								<div class="form-body mb-1 p-1">
									<div class="row">
										<label>Id : <?php echo $data['id'] ?> </label>
										<div class="col-md-4">
											<label>Nama : <?php echo $data['nama'] ?> </label>
										</div>  
										</div>
										<div class="col-md-4">
											<label>Alamat : <?php echo $data['alamat'] ?> </label>
										</div>
                    <?php
                      }
                    ?>
										<div class="col-md-8">
										</div>
									</div>
								</div>
								
							</form>
						</div>
					</div>
        </div>
      </div>
    </section>
  </div>
</div>

<?php include "partial/footer.php";?>