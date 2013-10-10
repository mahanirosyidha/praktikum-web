<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Data Checkbox</title> 
</head>

<body>

	<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
	 Mapel
	 <!--checkbox: boleh memilih lebih dari satu option-->
	 <input type="checkbox" name="mapel[]" value="Fisika"
	 <option value="Fisika"
		<?php
		if($_POST['mapel'] == 'Fisika'){
		echo 'selected="seleted"';//preselecting yg menangani 
		echo 'checked="CHECKED"';
		}
	 ?>
	 />Fisika
	 
	 <input type="checkbox" name="mapel[]" value="Matematika"
	 <option value="Matematika"
		<?php
		if($_POST['mapel'] == 'Matematika'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Matematika
	 
	 <input type="checkbox" name="mapel[]" value="Kimia"
	 <option value="Kimia"
		<?php
		if($_POST['mapel'] == 'Kimia'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Kimia
	 
	 <input type="checkbox" name="mapel[]" value="Biologi"
	 <option value="Kimia"
		<?php
		if($_POST['mapel'] == 'Biologi'){
		echo 'selected="seleted"';
		}
	 ?>
	 />Biologi
	 <br />
	 
	 <input type="submit" value="ok" >
</form>

<?php 
// Ekstraksi nilai 
if (isset($_POST['mapel'])) { 
  foreach ($_POST['mapel'] as $key => $val) { 
    echo $key . ' -> ' .$val . '<br />'; 
  } 
} 
?> 
 
</body> 
 
</html> 