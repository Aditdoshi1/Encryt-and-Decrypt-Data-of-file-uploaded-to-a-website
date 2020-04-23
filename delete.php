<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Delete files</title>
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
<form action="delete_redirect.php" method="post">
	<h3> Enter Filename to Delete</h3>
	<input type="text" name="filename3">
	<button name="delete" type="submit">Delete</button>
</form>
</body>
</html>
