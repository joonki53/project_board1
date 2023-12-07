<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8" />
	<title>H.J.K &copy; Black Board Login page</title>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form class="box" method="post" action="project_login_ok.php">
	<h1>Login</h1>
	<input type="text" name="id" placeholder="ID" required>
	<input type="password" name="pw" placeholder="PASSWORD" required>
<div>
	<button type="submit" name="loginbtn">Login</button>
	<button type="button" name="joinbtn" onclick="location.href='join.php'">Join</button>
	
	
</div>
	</form>
</body>
</html>
