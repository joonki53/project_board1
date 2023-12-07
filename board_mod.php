<?php
    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8');	
	
//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
	session_start();
  }


  $idx = $_GET['idx'];                                             
  $sql = "select * from board where idx ='$idx'"; 
  $result = mysqli_query($con, $sql); 
  $row = mysqli_fetch_array($result);  

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
  </head>
  <body>


<!--타이틀자리 -->
<header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">M o d i f y
                            </h1>
                            <p class="lead text-white-50 mb-4">- 자유롭게 글을 수정하는 페이지 입니다. -</p>
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


<!-- 헤더 네비게이션 -->
	
<!--//네비게이션 종료-->
  







<!-- 게시판 쓰기 -->
<div class="container">
<form action="mod_ok.php" enctype="multipart/form-data" method="post">
	
	<div id="board_write">
		<table>
			<colgroup>
				<col width="20%">
				<col>
			</colgroup>

			 
			<tbody>
				<tr>
					<th>작성자</th>					
					<td><input type="text" name="writer" class="form-control" value="<?php echo $row['writer']?>" detect="" detect-check="true" readonly="true"></td>
					
				</tr>
				
				
				
				<tr>
					<th>제목</th>
					<td><input type="text" name="subject" id="subject" class="form-control" value="<?php echo $row['title']?>" detect="" detect-check="true" required></td>

				</tr>
				<tr>
					
					<td colspan="2" class="editor"><textarea name="contents" rows="20" title="내용" required><?php echo $row['content']?></textarea></td>
					
				</tr>
				
<!-- 				
				<tr>
					<th>첨부파일</th>
					<td>
						<div class="file_box">
							<input type="text" class="file_name" readonly="readonly"></input>
							<label for="uploadBtn" class="btn_file">찾아보기</label>
							<input type="file" id="uploadBtn" value="1" name="b_file" class="uploadBtn"></input>
							
						</div>
					</td>
				</tr>				 -->
				
			</tbody>
		
		</table>
	</div>
	<!-- 수정대상 글 idx 보내기 -->
	<input type="hidden" id="idx" name="idx" value="<?php echo $row['idx']?>">

	<!-- //게시판 쓰기 -->
<div class="border_btn2">
    <button type="submit" class="btn gray"> 수정완료</button> 
    <button type="button" class="btn gray" onclick="location.href='board2.php'; return false;"> 취소</button>  
  </div>

</form>
</div>


<!-- 하단 맨 끝 -->
<footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">H.J.K &copy; Black Board</p></div>
        </footer>







  </body>

</html>
