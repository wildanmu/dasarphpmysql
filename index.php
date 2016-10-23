<?php
	/*
	Latihan listing code yaitu menghubungkan dasar tabel dengan database php mysql
	- nama db       = tabeldb
	- nama tabel    = kolega
	- column tabel  = no, nama depan, nama belakan, telepon, alamat
	- primary key   = no (sebagai pemegang kunci utama dari data lainnya)
	- tabel belum ada isi sebab masih tahap awal belajar koneksi server side php dengan mysql
	*/


	//menghubungkan kedalam database 'tabeldb'
	mysql_connect("localhost", "root", "");
	mysql_select_db("tabeldb");

	//jalankan query dan tampilkan baris tabel 'kolega'
	$result  = mysql_query("SELECT * FROM kolega");

?>

<!--kode baris html-->
<!DOCTYPE html>
<html>
<head>
<title>Dasar Koneksi MySQL</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>

	<h1><font face ="Verdana" size="3">Menampilkan Tabel Database MySQL</font face></h1>
	<table align="left" border=".01" cellpadding="5" cellspacing="4" summary="Table holds collegue contact information ">
	<tr>
		<th>No.</th>
		<th>Nama Depan</th>
		<th>Nama Belakang</th>
		<th>Telepon</th>
		<th>Alamat</th>
	</tr>

	<?php

		//column tabel 'kolega'
		while ($kolom = mysql_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $kolom['id'] . "</td>";
			echo "<td>" . $kolom['namaDepan'] . "</td>";
			echo "<td>" . $kolom['namaBelakang'] . "</td>";
			echo "<td>" . $kolom['telepon'] ."</td>";
			echo "<td>" . $kolom['alamat'] . "</td>";
		}

		//stelah tampil hasil tabel, maka disconect atau putuskan koneksi database
		mysql_free_result($result);
		mysql_close();
	?>
	</table>
</body>
</html>