<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Metode GET</title> <!--judul untuk window/dokumen-->
</head>

<body> 
<!--action: merujuk pada file yang akan di eksekusi ketika tombol submit ditekan
tag form untuk membuat form-->
<form action="<?php $_SERVER['PHP_SELF'];?>"method="get"> <!--metode yang digunakan adalah metode GET-->
Nama
<input type="text" name="nama"/><br/> <!--untuk memasukkan baris teks-->

<input type="submit" value="OK" /> <!--tombol untuk melakukan proses-->
</form>

<?php
if(isset($_GET['nama'])) { //kondisi untuk memriksa apakah variabel nama di-set atau tidak 
	echo 'Hallo,'.$_GET ['nama'];
}
?>
</body>
</html>