<?php
 //데이타베이스 정보
 $db_host = "localhost";
 $db_user = "root";
 $db_password = "qwer";
 $db_name = "web_db";
 $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
 if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

 $id2 = $_POST['search2'];

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H.J.K &copy; Black Member Information Page</title>

    <link rel="stylesheet" href="css/board2.css">
    <link rel="stylesheet" href="css/search.css">
    
</head>
<body>
  

<h1><span class="blue">&lt;</span>MEMBER INFO<span class="blue">&gt;</span><br> <span class="yellow"></pan></h1>
<h2>go to <a href="login_index.html" target="_blank">HOME / </a><a href="join.php" target="_blank">JOIN / </a><a href="project_logout.php" target="_blank">Logout / </a><a href="member_info.php" target="_blank">Back</a></h2>


<table class="container">
  <thead>
    <tr>
      
      <th><h1>번호</h1></th>
      <th><h1>ID</h1></th>
      <th><h1>NAME</h1></th>
      <th><h1>PHONE NUMBER</h1></th>
      <th><h1>EAMIL</h1></th>
      <form method="post" action="board_search.php">
        <span class='green_window'>
        <input id=text type="text" class='input_text' name="search" onkeydown="enterSearch()"/></span>
        <input type="submit" class='sch_smit' value="검색" onclick="myFunction()"/>
       </form>
      <?php
        $select_query = "select * FROM member where id='$id2'";        
        $result = $connect->query($select_query);
        while($row = $result->fetch_assoc())
        {
          ?>
          <tbody>
            <tr>
              <td><?=$row['idx']?></td>
              <td class="left"><?=$row['id']?></a></td>
              <td class="left"><?=$row['name']?></a></td>
              <td><?=$row['hp']?></td>
              <td><?=$row['email']?></td>
             </tr>
          </tbody>
        <?php                       
        }
      ?> 
    </tr>
  </thead>
</table>
    
</body>
</html>


