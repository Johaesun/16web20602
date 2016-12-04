<?php	
	require_once '../layout/header.php';
    include "../htdocs/db.php";
    $sql = "select * from board";
    $se = $pdo->prepare($sql);
    $se->execute();
    $result = $se->fetchAll();
	?>
<script>
	//jquery onload
	$(function(){
		//Html parsing 이 다 된 후 호출되는 영역.
	  $(".lnb li a").mouseover(function(){
	  	$(".lnb li a.selected").removeClass("selected");
	  	$(this).addClass("selected");
	  });
	});
</script>
<div id="wrap" class="sub_bg">
<?php
	include "../layout/header_menu.php";
	?>
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
				<div class="sub_con">
				<div class="left_con">
					<h2 class="sp_sub lnb_title">회원서비스</h2>
					<ul class="lnb">
					<li><a href="#" class="selected_hard">공지사항<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">자료실<span class="sp_sub select_ico"></span></a></li>
					</ul> 
				</div>		
				<div class="right_con">	
					<p class="pg_nav">	
						<a href="#">홈</a>
						<span>&gt;</span>
						<a href="#">회원서비스</a>						
						<span>&gt;</span>
						<strong>회원가입</strong>
					</p>
					<div class="join_wrap">	
						<h2 class="sp_sub join_title">공지사항</h2>
						<p class="join_txt">금강컨트리클럽을 이용하시기 불편함 없도록 밝고 건강한 새로운 소식을 회원님께 알려드립니다.</p>
						<form action="insert_db.php" method="post" enctype="multipart/form-data">
					<div class="view_wrap">
						<div class="view_tit">
							<div class="vt_left">
								글제목 : <input type="text" name="title" required>
							</div>
						</div>
						<div class="view_cont">
							내용 : <textarea name="notice" id="" cols="30" rows="10" required></textarea>
						</div>
						<label for="f_upload">첨부파일 :</label>
						<input type="file" name="upload" id="f_upload" value="">
					</div>
							<button type="submit" class="btn_notice sp_coms btn_view">작성</button>
						</form>
					</div>
				</div>
				</div>	
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
	<?php
			include "../layout/footer.php"
			?>
</div>
</body>
</html>