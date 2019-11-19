<?php include "header.php" ?>;
<?php include "sidebar.php" ?>;
<?php include "admin.php" ?>;	
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Forms Galeri</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Tambah Data Galeri</h4>
						</div>
						<div class="form-body">
							<form method="post" action="proses_galeri.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Judul</label> 
									<input type="text" class="form-control" name="txt_judul" placeholder="Masukan Judul" required="">
								</div>
								<div class="form-group">
									<label>Keterangan</label>
									<textarea class="form-control" name="txt_ket" placeholder="Masukan Keterangan" required=""></textarea>
								</div>
								<div class="form-group">
									<label>Foto</label> 
									<input type="file" class="form-control" name="file_gambar">
									</div> 
								<button type="submit"  class="btn btn-default" name="btn_simpan">SIMPAN</button>
							</form> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
	<?php include "footer.php" ?>;