<?php	
require_once '../layout/header.php';
 include "../htdocs/db.php";
$idx=$_GET['idx'];
$sql="select * from board where idx='$idx'";
$see=$pdo->prepare($sql);
$see->execute();
$result=$see->fetchAll();
?>
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
					    <?php
   
						foreach($result as $row){
						?>
						  <form action="update_db.php?idx=<?=$idx?>" method="post">
					<div class="view_wrap">
						<div class="view_tit">
							<div class="vt_left">
								글제목 : <input type="text" value="<?= $row['title']; ?>" name="title" required>
							</div>
						</div>
						<div class="view_cont">
							내용 : <input type="text" value="<?= $row['notice']; ?>" name="notice" required>
						</div>
					</div>
							<button type="submit" class="btn_notice sp_coms btn_view">수정</button>
						</form>
						<?php
							}
							?>
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