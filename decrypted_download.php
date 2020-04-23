<?php
if (isset($_POST['decrypt']))
{
	$name = $_POST['filename3'];
	$Vdata = file_get_contents('D:\\xampp\\htdocs\\hoxi\\uploads\\'.$name);
}
?>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="https://drive.google.com/uc?id=1KDa0jn9zWQxtWJQ9S58l1OvqXpwiW_lP"></script>
	<script type="text/javascript" src="http://yandex.st/jquery/1.4.2/jquery.min.js"></script>
	<!--  <script type="text/javascript" src="jquery.blowfish.js"></script>-->
	</head>
	<form action="writefiledownload.php" method="post">
		<input type='text' name='filename1' value='<?php echo $name; ?>'>
		<button type='submit' name='download'>Confirm youre not a bot</button>
		<textarea name="result" rows="12" cols="70"></textarea>
	</form>
	<script type='text/javascript'> 
		console.log("hi");
		var key = 'My name is hoxi';
		var text = "<?php echo $Vdata ?>";
		var bf = new Blowfish(key);
		text = bf.base64Decode(text);
		var res = bf.decrypt(text);
		res = bf.trimZeros(res);
		$('textarea[name=result]').val(res);
	</script>
</html>