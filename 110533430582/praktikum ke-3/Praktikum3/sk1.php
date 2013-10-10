<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>data seleksi</title>
</head>
<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	 Jenjang
	 <select name="hobby">
		<option value="TK"
		<?php
		if($_POST['jenjang'] == 'TK'){
		echo 'selected="seleted"';
	}
	?>
	/>TK
		<option value="SD"
		<?php
		if($_POST['jenjang'] == 'SD'){
		echo 'selected="seleted"';
	}
	?>
	/>SD
		<option value="SMP"
		<?php
		if($_POST['jenjang'] == 'SMP'){
		echo 'selected="seleted"';
	}
	?>
	/>SMP
		<option value="SMA"
			<?php
			if($_POST['jenjang'] == 'SMA'){
			echo 'selected="seleted"';
		}
		?>
		/>SMA
	 </select> <br />
	 
	 <input type="submit" value="OK" >
</form>

<?php
if(isset($_POST['hobby'])){
	echo $_POST['hobby'];
}
?>

</body>
</html>