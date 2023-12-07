<?php
 //데이타베이스 정보
 $db_host = "localhost";
 $db_user = "root";
 $db_password = "qwer";
 $db_name = "web_db";
 $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
 if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H.J.K &copy; Black Board page</title>

    <link rel="stylesheet" href="css/board2.css">
    <link rel="stylesheet" href="css/search.css">
    
</head>
<body>
  

<h1><span class="yellow">&lt;</span><span class="yellow">Board Page</span><span class="yellow">&gt;</h1>
<h2>go to <a href="login_index.html">HOME / </a><a href="board_write.php">Write / </a><a href="project_logout.php">Logout</a></h2>


<table class="container">
  <thead>
    <tr>
      
      <th><h1>번호</h1></th>
      <th><h1>제목</h1></th>
      <th><h1>작성자</h1></th>
      <th><h1>작성일</h1></th>
      <form method="post" action="board_search.php">
        <span class='green_window'>
        <input id=text type="text" class='input_text' name="search" placeholder="제목을 입력하세요." onkeydown="enterSearch()"/></span>
        <input type="submit" class='sch_smit' value="검색" onclick="myFunction()"/>
       </form>
      <?php
        $select_query = "select * FROM board ORDER BY idx DESC";        
        $result = $connect->query($select_query);
        while($row = $result->fetch_assoc())
        {
          // 날짜 포맷 
          $regdate = $row['reg_date'];
          $date = date_create($regdate);
          $_date = date_format($date, "Y년m월d일H:i");
          ?>
          <tbody>
            <tr>
              <td><?=$row['idx']?></td>
              <td class="left"><a href="board_particular.php?idx=<?=$row['idx']?>"><?=$row['title']?></a></td>
              <td class="left"><?=$row['writer']?></a></td>
              <td><?=$_date?></td>
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


