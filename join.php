<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title>H.J.K &copy; Black Board Join page</title>
	
	<link rel="stylesheet" href="css/style.css">
    
</head>
<body>
	<form class="report" method="post" action="join_ok.php">
	<h1>Join</h1>

	<p style="font-size:25px;">ID</p>
	<input type='text' name='id'  style="font-size: 20px;" required >

	<p style="font-size:25px;">PW</p>
	<input type="text" name="pw"   style="font-size: 20px;" required >

    <p style="font-size:25px;">PW_check</p>
	<input type="text" name="pw_r"  style="font-size: 20px;" required >

	<p style="font-size:25px;">NAME</p>
	<input type="text" name="name"  style="font-size: 20px;"required >

	<p style="font-size:25px;">HP</p>
	<input type="text" name="hp"  style="font-size: 20px;"required >

	<p style="font-size:25px;">Email</p>
	<input type="text" name="email"  style="font-size: 20px;"required >

	<button type="submit" name="compeletebtn">Join</button>
</form>

</body>
</html>