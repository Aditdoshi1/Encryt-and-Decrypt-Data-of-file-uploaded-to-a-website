<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<?php
$dir = "D:/xampp/htdocs/hoxi/uploads/";

$a = scandir($dir);

print_r($a);

foreach ($a as $value):?>
    <br>
	<tr>
      <td><?php echo $value; ?></td>
    </tr>
  <?php endforeach;?>
<form action="decrypted_download.php" method="post">
	<h3> Enter Filename to Decrypt</h3>
	<input type="text" name="filename3">
	<button name="decrypt" type="submit">Decrypt</button>
</form>
</body>
</html>
