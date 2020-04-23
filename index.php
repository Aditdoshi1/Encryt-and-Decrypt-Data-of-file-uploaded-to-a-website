<?php
// Uploads files
if (isset($_POST['save'])) {
    $filename = $_FILES['myfile']['name'];
    $destination = 'D:/xampp/htdocs/hoxi/uploads/'.$filename;
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    if (!in_array($extension, ['txt'])) {
        echo "You file extension must be .txt";
    } elseif ($_FILES['myfile']['size'] > 10000000) {
        echo "File too large!";
    } else {
        if (move_uploaded_file($file, $destination)) {
            echo "File encrypted successfully";
        } else {
            echo "Failed to upload file.";
        }
    }
    $Vdata = file_get_contents('D:\\xampp\\htdocs\\hoxi\\uploads\\'.$filename);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="https://drive.google.com/uc?id=1KDa0jn9zWQxtWJQ9S58l1OvqXpwiW_lP"></script>
  <script type="text/javascript" src="http://yandex.st/jquery/1.4.2/jquery.min.js"></script>
<!--  <script type="text/javascript" src="jquery.blowfish.js"></script>-->
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method = "post" enctype="multipart/form-data" >
			<h3>Upload File</h3>
			<input type="file" name="myfile"> <br>
			<textarea name="result1" rows="12" cols="70"></textarea>
			<button type="submit" name="save">encrypt</button>
		</form>
		<form action="writefile.php" method="post">
			<input type="text" name="filename1" value="filename">
			<textarea name="result2" rows="12" cols="70"></textarea>
			<input type="submit" name="upload" value="Upload">
		</form>
      </div>
    </div>
<script type="text/javascript">
	console.log("ho2");
	var key = 'My name is hoxi';
	var text = "<?php echo $Vdata ?>";
	var bf = new Blowfish(key);
    var res = bf.encrypt(text);
    res = bf.base64Encode(res);
    $('textarea[name=result1]').val(res);
	$('textarea[name=result2]').val(res); 
 </script>
  </body>
</html>