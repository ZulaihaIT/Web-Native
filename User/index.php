<?php include "header.php" ?>;
<?php include "sidebar.php" ?>;

	<?php include "admin.php" ?>;	
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="bs-example widget-shadow" data-example-id="bordered-table"> 
						<h4>Data Galeri</h4>
						<p><a href="input_galeri.php" class="btn btn-primary">Tambah Data</a></p><br>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>NO</th> 
									<th>JUDUL</th> 
									<th>FOTO</th>
									<th>KETERANGAN</th>
									<th>TAMPIL</th>
								</tr>
							</thead> 
							<tbody>
								<?php
								include "koneksi.php";
								$no = 1;
								$sql = mysqli_query($con,"SELECT * FROM tb_galeri");
								while ($row = mysqli_fetch_array($sql)){
									?>
									<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $row ['judul_foto'];?></td>
								<td><img src="images/<?php echo $row['foto'];?>" style="width: 100px"></td>
								<td><?php echo $row ['ket_foto'];?></td>
								<td>
									<a href="edit_galeri.php?url=<?php echo $row['id_galeri'];?>" class="btn btn-success">EDIT</a>
									<a href="proses_galeri.php?url=<?php echo $row['id_galeri'];?>" class="btn btn-danger" onclik ="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">DELETE</a>
								</td>
									</tr>
								</tbody> 
								<?php }?>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--footer-->
	<?php include "footer.php" ?>;