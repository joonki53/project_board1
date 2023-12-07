<?php

//데이타베이스 정보
$db_host = "localhost";
$db_user = "root";
$db_password = "qwer";
$db_name = "web_db";
$connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    $con = mysqli_connect("localhost", "root", "qwer", "php_db");
    mysqli_query($con,'SET NAMES utf8');	
	
//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
	session_start();
  }

  $idx = $_GET['idx'];

 $select_query = "select * FROM board where idx = '$idx'";        
 $result = $connect->query($select_query);
 while($row = $result->fetch_assoc())
 {
    $title = $row['title'];    
    $writer = $row['writer'];  
    $content = $row['content'];
    
    
     // 날짜 포맷 
     $regdate = $row['reg_date'];
     $date = date_create($regdate);
     $_date = date_format($date, "Y.m.d");
 }

  

?>



<!DOCTYPE html>
<html lang="ko">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- //구글폰트 -->
 

    <title>H.J.K &copy; write page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">	
    <!-- Custom styles for this template -->	
    <link href="css/reset_responsive.css" rel="stylesheet">    
	
    <link href="css/board.css" rel="stylesheet">
	<link href="css/submenu2.css" rel="stylesheet">
	<link href="css/border.css" rel="stylesheet">
	<!--   -->
  </head>
  <body>
  <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">V i e w
                            </h1>
                            <p class="lead text-white-50 mb-4">-  글 상세 페이지 입니다.  -</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="login_index.html">HOME</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="board2.php">Board</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="join.php">Join</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="project_logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


<!--타이틀자리 -->



<!-- 헤더 네비게이션 -->
	
<!--//네비게이션 종료-->
  







<!-- 본문 -->
<div class="container">	
	


	
	<!-- 게시판 쓰기 -->
	
	<form action="write_ok.php" enctype="multipart/form-data" method="POST">
	
	<div id="board_write">
		<table>
			<colgroup>
				<col width="20%">
				<col>
			</colgroup>

			 
			<tbody>
				
				
				
				
				
				<tr>
        
        <tr>
			<th>제목</th>
			<?php if($answer==1) { ?>
				<td><input type="text" name="subject" id="subject" class="form-control" value="ㄴ[ <?=$subject?> ]의 답변" detect="" detect-check="true" required></td>
				<?php } else { ?>
				<td><output type="text" name="subject" id="subject" class="form-control" value="" detect="" detect-check="true" readonly=ture><?=$title?></td>
				<?php } ?>	
		</tr>
            <tr>
			    <th>작성자</th>					
			    <td><output type="text" name="writer" class="form-control" value="" detect="" detect-check="true" readonly=ture><?=$writer?></td>
					
			</tr>
          <tbody>
            <tr>
                <td colspan="2" class="editor"><textarea readonly ='readonly' name="contents" rows="20" title="내용"><?=$content?></textarea></td>
              
             </tr>
          </tbody>
        
					
				
					
				</tr>
				
				
				<!-- <tr>
					<th>첨부파일</th>
					<td>
						<div class="file_box">
							<input type="text" class="file_name" readonly="readonly"></input>
							<label for="uploadBtn" class="btn_file">찾아보기</label>
							<input type="file" id="uploadBtn" value="1" name="b_file" class="uploadBtn"></input>
							
						</div>
					</td>
				</tr>				
				 -->
			</tbody>
		
		</table>
	</div>
	<!-- //게시판 쓰기 -->
  <div class="border_btn2">
  <button type="button" class="btn gray" onclick="location.href='board_mod.php?idx=<?=$idx?>'; return false;"> 수정</button> 
    <button type="button" class="btn gray" onclick="location.href='board_del.php?idx=<?=$idx?>'; return false;"> 삭제</button> 
    <button type="button" class="btn gray" onclick="location.href='board2.php?idx=<?=$idx?>'; return false;"> 뒤로가기</button>

	</div>
	<!-- 게시판 버튼 -->
	<!-- <div class="btn_edit_body">
  <div class="btn_edit">
    <button type="button" class="btn_edit gray" onclick="location.href='board_mod.php?idx=<?=$idx?>'; return false;"> 수정</button> 
    <button type="button" class="btn_edit gray" onclick="location.href='board_del.php?idx=<?=$idx?>'; return false;"> 삭제</button>  
  </div>
</div> -->
    
	<!-- //게시판 버튼 -->
	<input type="hidden" name="page" value="<?=$page_name?>" />
	<input type="hidden" name="answer" value="<?=$answer?>" />
	<? if($answer==1) { ?>
	<input type="hidden" name="idx" value="<?=$idx?>" />
	<?}?>
	</form>
	
</div>
<!-- //본문 -->




<footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">H.J.K &copy; Black Board</p></div>
        </footer>
<!-- 하단 맨 끝 -->







  </body>

</html>
