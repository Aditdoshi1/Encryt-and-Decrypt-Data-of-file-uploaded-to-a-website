<?php 
	$name= $_POST['filename1'];
	$data= $_POST['result'];
	$name="temp.txt";
	$myfile = fopen('D:\\xampp\\htdocs\\hoxi\\uploads\\'.$name, "w") or die("Unable to open file!");
	fwrite($myfile, $data);
	fclose($myfile);

?>
<html>
   <body>
		<a href="uploads/<?php echo $name; ?>" download>Download</a><br>
		<a href="redirect.php">Go back to initial</a>
   </body>
</html>