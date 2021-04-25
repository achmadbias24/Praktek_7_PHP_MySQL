<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--menampilkan tulisan dengan format heading 2-->
	<h2>LIST MAHASISWA</h2>
	<!--membuat tabel untuk menampilkan hasil query-->
	<table border="1">
		<tr>
			<td>NO</td>s
			<td>NIM</td>
			<td>NAMA</td>
			<td>GENDER</td>
			<td>JURUSAN</td>
		</tr>
		<?php
			//mengeksekusi file koneksi.php
			include "koneksi.php";
			//menjalankan query
			$mahasiswa=mysqli_query($conn,"SELECT * from mahasiswa");
			$no=1;
			//menampilkan hasil query
			foreach ($mahasiswa as $row) {
				$jenis_kelamin = $row['jenis_kelamin']=='P'?'PEREMPUAN':'Laki_Laki';
				echo "<tr>
				<td>$no</td>
				<td>".$row['nim']."</td>
				<td>".$row['nama']."</td>
				<td>".$jenis_kelamin."</td>
				<td>".$row['jurusan']."</td>
				</tr>";
				$no++;
			}
		?>
	</table>
</body>
</html>