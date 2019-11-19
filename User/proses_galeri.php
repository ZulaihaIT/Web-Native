<?php
include "koneksi.php";
$jdl = $_POST['txt_judul'];
$ket = $_POST['txt_ket'];
$foto = "pic-".time().".jpg";
$get_foto = $_FILES['file_gambar']['tmp_name'];

if(isset($_POST['btn_simpan'])){
	move_uploaded_file($get_foto,"images/".$foto);
	$query = "INSERT INTO tb_galeri (judul_foto,ket_foto,foto)VALUES
	 ('$jdl','$ket','$foto');";
}  else if(isset($_POST['btn_edit'])){
	$id = $_GET['url'];
	if(!empty($get_foto)){
		move_uploaded_file($get_foto,"images/".$foto);
		$query = "UPDATE tb_galeri SET judul_foto = '$jdl', ket_foto = '$ket', foto = '$foto' WHERE id_galeri ='$id'";
	}else {
		$query = "UPDATE tb_galeri SET judul_foto = '$jdl', ket_foto = '$ket' WHERE id_galeri ='$id'";
	}
} else {
	$id = $_GET['url'];
	$query ="DELETE FROM tb_galeri WHERE id_galeri = '$id'";
}
mysqli_query($con, $query);
header("location:index.php");