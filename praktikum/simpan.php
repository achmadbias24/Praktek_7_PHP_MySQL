<?php 
	include "koneksi.php";
	//menyimpan data kedalam variabel
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$pesan=$_POST['pesan'];
	//menjalankan query pada database untuk memasukkan data
	$query="INSERT INTO mahasiswa1 (id,NAMA,JKEL,EMAIL,ALAMAT,KOTA,PESAN) VALUES ('$nim','$nama','$jenis_kelamin','$email','$alamat','$kota','$pesan')";
	mysqli_query($conn,$query);
	header("location:index.php");
?>