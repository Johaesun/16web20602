<?php
require_once './layout/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<div id="wrap" class="main">

<?php
include "./layout/header_menu.php"
?>
	
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
			<div class="sp_bg spot_wth">
				<h2 class="blind">날씨온도 정보</h2>
				<ol class="wth_list">
				<li class="today">						
					<strong class="w_tit">오늘</strong>
					<strong class="w_tit2">02. 14 FRI</strong>
					<img src="img/img_wth.png" width="90" height="70" alt="구름많음" class="w_img">
					<div class="tmpr_info">
						<span class="now_tmpr">23</span>
						<span class="tmpr_ico">℃</span>
					</div>
					<p class="tmpr_info2">
					<span>최고 25℃</span>
					<span>최저 14℃</span>
					<span>강수확률 0%</span>
					</p>
				</li>
				<li class="tomorrow">
					<strong class="w_tit">내일</strong>
					<img src="img/img_wth2.png" width="60" height="45" alt="맑음" class="w_img">
				</li>
				<li class="after_tmr">
					<strong class="w_tit">모레</strong>
					<img src="img/img_wth3.png" width="60" height="45" alt="구름많음" class="w_img">
				</li>
				</ol>
				<a href="#" class="week_wth">주간 날씨보기<span class="sp_main ico"></span></a>
			</div>
			<ul class="spot_link">
			<li>
				<a href="#" class="sp_main reserv">RESERVATION<span class="blind">온라인 예약하기</span></a>
			</li>	
			<li>
				<a href="#" class="sp_main webcam">WEBCAM<span class="blind">현재 필드상태를 보여드립니다</span></a>
			</li>
			<li>
				<a href="#" class="sp_main mobileapp">MOBILE APP<span class="blind">모바일에서도 금강CC를 만나세요</span></a>	
			</li>	
			</ul>	
			<div class="notice_area">
				<div class="sp_bg notice">
					<h3 class="sp_main notice_txt">공지사항</h3>
				</div>
				<div class="sp_bg notice_list">
					<table class="notice_list_in">
					<thead>
					<tr>
					<th scope="col">제목</th>
					<th scope="col">등록일</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					<td class="title"><a href="#">1~2월 동계휴장 및 그린피 안내1~2월 동계휴장 및 그린피 안내</a></td>
					<td class="reg_date">13.12.18</td>
					</tr>
					<tr>
					<td class="title"><a href="#">12월 티업시간 및 그린피 안내</a></td>
					<td class="reg_date">13.11.14</td>
					</tr>
					<tr>
					<td class="title"><a href="#">2014년 연단체팀 혜택 및 조건</a></td>
					<td class="reg_date">13.11.05</td>
					</tr>
					<tr>
					<td class="title"><a href="#">10월 21일 회원초청 친선골프</a></td>
					<td class="reg_date">13.10.23</td>
					</tr>
					<tr>
					<td class="title"><a href="#">11월 그린피 안내</a></td>
					<td class="reg_date">13.10.26</td>
					</tr>
					</tbody>
					</table>					
					<div class="notice_pg">
						<a href="#" class="sp_main btn_pre">이전 공지사항 목록</a>
						<a href="#" class="sp_main btn_next">다음 공지사항 목록</a>
						<a href="#" class="notice_more">+ 더보기</a>
					</div>
				</div>
				<!-- http://flexslider.woothemes.com/ -->
				<div class="banner">
					<ul class="bnn_list slides">
					<li>
						<a href="#"><img src="img/main_banner2.gif" width="490" height="220" alt="현대카드 M포인트 사용가능"/></a>
					</li>
					<li>
						<a href="#"><img src="img/main_banner3.jpg" width="490" height="220" alt="클럽회원 모집 안내"/></a>
					</li>
					<li>
						<a href="#"><img src="img/main_banner4.jpg" width="490" height="220" alt="국민관광 상품권을 이용하세요"/></a>
					</li>
					</ul>
				</div>	
			</div>
			<ul class="link_area">			
			<li>
				<a href="#" class="dirctns"><span class="sp_main dirctns_txt">찾아오는 길</span></a>
			</li>
			<li>
				<a href="#" class="contactus"><span class="sp_main contactus_txt">연락하기</span></a>
			</li>
			<li>
				<a href="#" class="clubhouse"><span class="sp_main clubhouse_txt">CLUB HOUSE</span></a>
			</li>
			<li>
				<a href="#" class="courceinfo"><span class="sp_main courceinfo_txt">코스안내</span></a>
			</li>
			</ul>
			<span class="sp_main bg_ico"></span>
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
	<?php
	include "./layout/footer.php";
	?>
</div>
</body>
</html>