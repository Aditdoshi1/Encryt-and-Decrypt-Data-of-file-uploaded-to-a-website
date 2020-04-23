<?php
//writes file
if (isset($_POST['upload'])) {
	$name= $_POST['filename1'];
	$data= $_POST['result2'];

	$myfile = fopen('D:\\xampp\\htdocs\\hoxi\\uploads\\'.$name, "w") or die("Unable to open file!");
	fwrite($myfile, $data);
	fclose($myfile);
}
?>
<html>
   <body>
		<a href="initial.php">File Uploaded! Go back to initial-></a>
   </body>
</html>