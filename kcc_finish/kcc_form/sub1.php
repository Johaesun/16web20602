<?php
	require_once '../layout/header.php';
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
						<h3 class="sp_sub join_title">회원가입</h3>
						<p class="join_txt">다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</p>
						<ol class="join_step">
						<li class="selected">약관동의</li>
						<li>본인인증<span class="sp_sub ico_arr"></span></li>
						<li>회원정보입력<span class="sp_sub ico_arr"></span></li>
						<li>가입완료<span class="sp_sub ico_arr"></span></li>
						</ol>
					</div>								
					<form>
						<div class="article_box">
							<h4>이용약관</h4>	
							<div class="terms_area">
								<h5>제1조 목적</h5>
								<p>이 약관은 골프장 사업자인 금강레져CC (이하 “사업자”라 한다)과 골프장의 시설물을 이용하려는 모든 내장객(이하 “이용자”라 한다) 간의 골프장 시설물이용 및 이에 따르는 책임에 관한 사항을 규정함을 목적으로 한다.</p>					
								<h5>제2조 적용</h5>
								<p>이 약관은 골프장 사업자인 금강레져CC (이하 “사업자”라 한다)과 골프장의 시설물을 이용하려는 모든 내장객(이하 “이용자”라 한다) 간의 골프장 시설물이용 및 이에 따르는 책임에 관한 사항을 규정함을 목적으로 한다.</p>				
								<h5>제3조 약관의 성립</h5>
								<p>이 약관은 골프장 사업자인 금강레져CC (이하 “사업자”라 한다)과 골프장의 시설물을 이용하려는 모든 내장객(이하 “이용자”라 한다) 간의 골프장 시설물이용 및 이에 따르는 책임에 관한 사항을 규정함을 목적으로 한다.</p>
							</div>
							<p class="agree_check">
							<input type="checkbox" id="agree1"><label for="agree1">이용약관에 동의합니다.</label>
							</p>
						</div>
						<div class="article_box">
							<h3>개인정보 보호정책</h3>
							<div class="terms_area">
								<h4>제1조 목적</h4>
								<p>이 약관은 골프장 사업자인 금강레져CC (이하 “사업자”라 한다)과 골프장의 시설물을 이용하려는 모든 내장객(이하 “이용자”라 한다) 간의 골프장 시설물이용 및 이에 따르는 책임에 관한 사항을 규정함을 목적으로 한다.</p>					
								<h4>제2조 적용</h4>
								<p>이 약관은 골프장 사업자인 금강레져CC (이하 “사업자”라 한다)과 골프장의 시설물을 이용하려는 모든 내장객(이하 “이용자”라 한다) 간의 골프장 시설물이용 및 이에 따르는 책임에 관한 사항을 규정함을 목적으로 한다.</p>				
								<h4>제3조 약관의 성립</h4>
								<p>이 약관은 골프장 사업자인 금강레져CC (이하 “사업자”라 한다)과 골프장의 시설물을 이용하려는 모든 내장객(이하 “이용자”라 한다) 간의 골프장 시설물이용 및 이에 따르
								는 책임에 관한 사항을 규정함을 목적으로 한다.</p>
							</div>
							<p class="agree_check">
							<input type="checkbox" id="agree2"><label for="agree2">이용약관에 동의합니다.</label>
							</p>
						</div>
					</form>
					<p class="join_notice"><span class="sp_sub notice_ico"></span>회원가입을 하시기 전에 이용약관 및 개인정보 보호정책을 반드시 읽어보시기 바랍니다.</p>
					<div class="btn_wrap">
						<a href="../index.php" class="sp_sub btn_cancle">취소</a>
						<a href="./sub2.php" class="sp_sub btn_next">다음</a>
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