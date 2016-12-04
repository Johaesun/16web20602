<?php
require_once '../layout/header.php';
include "../htdocs/db.php";
$sql_2 = "select * from bar where idx='{$_GET['idx']}'";
$sql = "select * from board where idx='{$_GET['idx']}'";
$see=$pdo->prepare($sql);
$see->execute();
$result=$see->fetchAll();
$pdo->query("update board set hit = hit+1 where idx='{$_GET['idx']}'"); 
?>
<!-- //skip nav -->
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
					<h2 class="sp_sub lnb_title">COMMUNITY 커뮤니티</h2>
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
					<div class="comm_wrap join_wrap">	
						<h2 class="sp_sub join_title">공지사항</h2>
						<p class="join_txt">금강컨트리클럽을 이용하시기 불편함 없도록 밝고 건강한 새로운 소식을 회원님께 알려드립니다.
						</p>
                         <div class="view_wrap">
						<div class="view_tit">
							<div class="vt_left">
                            <?php
                              foreach($result as $row){
                              ?>
                                  글제목:<?=$row['title']?>
                              </div>
                              <div class="vt_right">
                                  조회수:<?=$row['hit']?>
                                  작성일:<?=$row['date']?>
                              	</div>
                              </div>
                              <div class="view_cont">
                                  <?=$row['notice']?>
                                  <?php
                                
                                $result1=$pdo->query($sql_2);
                                while($row1=$result1->fetch()){
									if($row1['upload']=="1"){
									}else{
                                    $temp=$row1['upload'];
                                    $img_name=substr($temp,19);
                                    echo"<img alt='image' class='ins_img' src='../f_up/$img_name'>";}
                                }
                                  ?>
                                  
                              </div>
                              
                                     <div class="btn_Btwrap">
                                      	 <button class=".btn_view"><a href="./update.php?idx=<?=$row['idx']?>">수정</a></button>
                                      	   <button class=".btn_view"><a href="./delete.php?idx=<?=$row['idx']?>">삭제</a></button>
                                     	                              <?php
										 }?> 
                                      	                              <button class=".btn_view"><a href="board.php">목록</a></button>
                                      </div>
			</div>	
		</div>	
	</div>
                    </div>
		</div>
	</div>
	<!-- //container -->
	
	<?php
			include "../layout/footer.php"
			?>
</div>

</body>
</html>