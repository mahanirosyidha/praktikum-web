<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>
<head>
	<title>Identifikasi Metode</title> <!--judul untuk window/dokumen-->
</head>

<body>
<!--action: merujuk pada file yang akan di eksekusi ketika tombol submit ditekan
tag form untuk membuat form-->
<form action="<?php $_SERVER ['PHP_SELF'];?>"method="get">
Nama
<input type="text" name="nama" /> <br/><!--untuk memasukkan baris teks-->

<input type="submit" value="OK" /><!--tombol untuk melakukan proses-->
</form>

<?php
if(isset($_REQUEST['nama'])){ //kondisi untuk memriksa apakah variabel nama di-set atau tidak 
	echo 'Metode,' . $_SERVER['REQUEST METHOD'];
}
?>

</body>
</html>
