<?php
// $db_host = "localhost";
// $db_user = "root";
// $db_password = "qwer";
// $db_name = "web_db";
// $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
// if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); }

    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8');

	$idx = $_POST['idx'];
    $title = $_POST['subject'];
	$content = $_POST['contents'];
	$writer = $_POST['writer'];
	$update_query = "update board set title='$title', content = '$content',writer = '$writer' where idx='$idx'"; 

	if($con->query($update_query)){
		echo "<script>alert('글 수정이 완료되었습니다.')</script>";
		echo "<script>location.href='board2.php';</script>";
	}else{
			echo "<script>alert('글 수정시 오류! 관리자에게 문의주세요.')</script>";	   
			echo "<script>location.href='board2.php';</script>";
	}
    
?> 

