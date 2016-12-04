<?php
	require_once '../layout/header.php';
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>KCC 금강컨트리클럽</title>
<link rel="stylesheet" type="text/css" href="css/kcc_style.css" />
<link rel="stylesheet" type="text/css" href="js/jquery/flexslider/flexslider.css" />
<script type="text/javascript" src="js/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/jquery/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<!-- skip nav -->
<ul id="skip">
<li><a href="#site_menu" tabindex="0">주메뉴 바로가기</a></li>
<li><a href="#content">본문 바로가기</a></li>
</ul>
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
					<h2 class="sp_sub lnb_title">회원서비스</h2>
					<ul class="lnb">
					<li><a href="#">로그인<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#" class="selected_hard">회원가입<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">아이디/비밀번호찾기<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">회원정보 수정<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">개인정보 취급방침<span class="sp_sub select_ico"></span></a></li>
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
						<h2 class="sp_sub join_title">회원가입</h2>
						<p class="join_txt">다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</p>
						<ol class="join_step">
						<li class="selected">약관동의</li>
						<li>본인인증<span class="sp_sub ico_arr"></span></li>
						<li>회원정보입력<span class="sp_sub ico_arr"></span></li>
						<li>가입완료<span class="sp_sub ico_arr"></span></li>
						</ol>
					</div>	
					<div class="article_box">
						<h3>실명확인</h3>
						<div class="art_box_in">
							<div class="btn_area">
								<a href="#" class="sp_sub certify_ipin">아이핀 인증</a>
								<a href="#" class="sp_sub certify_me">본인 인증</a>
							</div>
							<p class="certify_tip">
								반드시 회원님의 실명으로 가입하셔야 하며, 성명과 주민등록번호를 입력하신 후,<br>
								[아이핀인증] 또는 [본인인증] 버튼을 클릭하세요.
							</p>
						</div>
					</div>	
					<div class="btn_wrap btn_wrap2">
						<a href="./sub1.php" class="sp_sub btn_cancle">취소</a>
						<a href="./sub3.php" class="sp_sub btn_next">다음</a>
					</div>
				</div>
				</div>	
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
<?php
	include "../layout/footer.php";
?>
</div>
</body>
</html>