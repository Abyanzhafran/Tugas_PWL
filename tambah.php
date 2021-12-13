<?php include "partial/header.php";?>
<div id="main">
	<div class="page-heading">
		<section class="section">
			<div class="row">
				<div class="col-12">

					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-6">
									<h4 class="card-title">Tambah Data Biodata</h4>
								</div>
								<div class="col-6"> <a href="index.php" class="btn btn-success float-end">Kembali</a>
								</div>
							</div>
						</div>
						<div class="card-content">
							<form action="controller_tambah.php" method="post" class="form form-horizontal">

								<div class="form-body mb-1 p-1">
									<div class="row">
										<div class="col-md-4">
											<label>Nama</label>
										</div>
										<div class="col-md-8">
											<div class="form-group has-icon-left">
												<div class="position-relative">
													<input required type="text" name="txtNama" type="text" class="form-control" placeholder="Nama"
														id="first-name-icon">
													<div class="form-control-icon">
														<i class="bi bi-person"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<label>Alamat</label>
										</div>
										<div class="col-md-8">
											<div class="form-group has-icon-left">
												<div class="position-relative">
													<input required name="txtAlamat" type="text" class="form-control" placeholder="Alamat "
														id="first-name-icon">
													<div class="form-control-icon">
														<i class="bi bi-building"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 d-flex justify-content-end">
											<button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
											<button type="submit" class="btn btn-primary me-1 mb-1">Tambah</button>
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