<?php
 $db_host = "localhost";
 $db_user = "root";
 $db_password = "qwer";
 $db_name = "web_db";
 $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
 if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

 $name = $_POST['name'];                   //Writer

$title = $_POST['title'];               //Title
$content = $_POST['content'];           //Content
$date = date('Y-m-d');            //Date

$URL = 'index.php';                   //return URL


$query = "INSERT INTO board (title, content, reg_date, hit, writer) 
        values('$title', '$content', '$date', 0, '$name')";


$result = $connect->query($query);
if ($result) {
?> <script>
        alert("<?php echo "게시글이 등록되었습니다." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
    echo "게시글 등록에 실패하였습니다.";
}

mysqli_close($connect);
?>