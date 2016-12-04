<?php
	require_once '../layout/header.php';
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
			<form action="./insertSub_db.php" method="post">
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
						<div class="art_tit_wrap">
							<h3 class="article_tit">상세정보 입력</h3>
							<p class="tip"><em>*</em>표시는 필수입력 항목입니다.</p>
						</div>					
						<div class="enter_area">
						<fieldset>
							<table class="enter_form">
							<caption><span>회원정보 입력</span></caption>	
							<tr>
								<th><label for="ko_name">한글이름</label><em>*</em></th>
								<td><input type="text" id="ko_name" class="inptxt" required name="name_Ko"></td>
							</tr>	
							<tr>
								<th><label for="eg_name">영문이름</label></th>
								<td><input type="text" id="eg_name" class="inptxt" name="name_En"></td>
							</tr>
							<tr>
								<th><span>생년월일</span><em>*</em></th>
								<td>
									<select name="birth_Year" class="sel_box" id="">
										<?php
                                                for($y = 1950 ;$y<2016; $y++)
                                                {
                                                    echo "<option value=".$y.">".$y."</option>";
                                                }
                                            ?>
									</select>
									<span class="year_txt">년</span>
									<select name="birth_Month" class="sel_box" id="">
                                            <?php
                                                for($m = 1 ;$m<13; $m++)
                                                {
                                                    echo "<option value=".$m.">".$m."</option>";
                                                }
                                            ?>
									</select>
									<span class="year_txt">월</span>
									<select name="birth_Day" class="sel_box" id="">
                                            <?php
                                                for($i = 1 ;$i<31; $i++)
                                                {
                                                    echo "<option value=".$i.">".$i."</option>";
                                                }
                                            ?>
									</select>
									<span class="year_txt">일</span>
								</td>
							</tr>	
							<tr>
								<th><label for="userid">아이디</label><em>*</em></th>
								<td>
									<input type="text" id="userid" name="id" class="inptxt" required>
									<a href="#" class="btn_img btn_cnfrm"><span class="btn_img">중복확인</span></a>
									<span class="tip2">사이트내에서 표시되는 본인정보이며 저장 후 수정하실 수 없습니다.</span>
								</td>
							</tr>
							<tr>
								<th><label for="password">비밀번호</label><em>*</em></th>
								<td>
									<input type="password" id="password" class="inptxt" name="pw" required>
									<span class="tip2">영문 소문자, 숫자 포함 4자리 이상 10자리 이하입니다.</span>
								</td>
							</tr>
							<tr>
								<th><label for="password_confirm">비밀번호 확인</label><em>*</em></th>
								<td>
									<input type="password" id="password_confirm" class="inptxt" name="pw_Re" required>
									<span class="tip2">비밀번호를 한번 더 입력하세요.</span>
								</td>
							</tr>
							<tr>
								<th><span>전화번호</span></th>
								<td>
									<div class="sel_box phone">
										<select name="number_1" class="sel_box phone" id="">
											<option value="02">02</option>
                                            <option value="031">031</option>
                                            <option value="032">032</option>
                                            <option value="033">033</option>
										</select>
									</div>
									<span class="hyphen">-</span>
									<input type="text" name="number_2" id="tel_m" title="전화번호 중간 번호 입력" class="inptxt w41">		
									<span class="hyphen">-</span>
									<input type="text" id="tel_e" name="number_3" title="전화번호 마지막 번호 입력" class="inptxt w41">
								</td>
							</tr>
							<tr>
								<th><span>휴대폰번호</span><em>*</em></th>
								<td>
									<select name="phonNum_1" class="sel_box" id="">
											<option value="010">010</option>
											<option value="011">011</option>
											<option value="016">016</option>
											<option value="017">017</option>
									</select>
									<span class="hyphen">-</span>
									<input type="text" name="phonNum_2" id="mobile_m" title="휴대폰 중간 번호 입력" class="inptxt w41" required>		
									<span class="hyphen">-</span>
									<input type="text" id="mobile_e" name="phonNum_3" title="휴대폰 마지막 번호 입력" class="inptxt w41" required>
									<span class="tip2">예약시 휴대폰으로 문자가 발송됩니다.</span>
								</td>
							</tr>				
							<tr>
								<th><span>SMS 수신여부</span><em>*</em></th>
								<td>
									<div class="rdo_wrap">
										<span class="rdo_btn" onclick="fn_smsclick('Y');">
										<input type="radio" name="answer" id="agreement_y" checked="checked" value="agreement_y">
										<span class="rdo_on" id="agree_fake_y"></span>
										</span>
										<label for="agreement_y">예</label>
										<span class="rdo_btn" onclick="fn_smsclick('N');">
										<input type="radio" name="answer" id="agreement_n" value="agreement_n">
										<span class="rdo_off" id="agree_fake_n"></span>
										</span>
										<label for="agreement_n">아니오</label>
									</div>
									<span class="tip2">회원공지 알람에 대한 수신여부입니다.</span>
								</td>
							</tr>			
							<tr>
								<th><label for="email">E-MAIL</label></th>
								<td>
									<input type="email" name="email" id="email" class="inptxt">
								</td>
							</tr>
							<tr>
								<th><span>자택 우편번호</span><em>*</em></th>
								<td>
									<input type="text" id="sample6_postcode" placeholder="우편번호" class="inptxt" name="home_post" id="h_postcode1" class="inptxt w23">
                                    <a href="#" class="btn_img btn_cnfrm"><span type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기" class="btn_img">우편번호 찾기</span></a><br>
								</td>
							</tr>
							<tr>
								<th><label for="home_addr1">자택주소</label><em>*</em></th>
								<td>
									<p><input type="text" id="sample6_address" placeholder="주소" name="home_address1" class="inptxt w416"></p>						
									<p><input type="text" id="sample6_address2" placeholder="상세주소" class="inptxt w416 gap"></p>
								</td>
							</tr>			
							<tr>
								<th><span>DM발송처</span><em>*</em></th>
								<td class="rdo_wrap">
									<span class="rdo_btn">
									<input type="radio" name="stay" id="home" value="home" checked="checked">
									<span class="rdo_on"></span>
									</span>
									<label for="home">자택</label>
									<span class="rdo_btn">
									<input type="radio" name="stay" value="office" id="office">
									<span class="rdo_off"></span>
									</span>
									<label for="office">직장</label>
								</td>
							</tr>										
							</table>
						</fieldset>	
						</div>					
						<div class="enter_area">
						<fieldset>
							<table class="enter_form">
							<tr>
								<th><label for="office_name">직장명</label><em>*</em></th>
								<td><input type="text" name="work_name" id="office_name" class="inptxt" required></td>
							</tr>			
							<tr>
								<th><label for="job_category">직종</label></th>
								<td><input type="text" name="work_kinds" id="job_category" class="inptxt"></td>
							</tr>			
							<tr>
								<th><label for="position">직위</label><em>*</em></th>
								<td><input type="text" name="work_spot" id="position" class="inptxt" required></td>
							</tr>
							<tr>
								<th><span>직장 우편번호</span><em>*</em></th>
								<td>
									<input type="text" name="work_post1" id="sample6_postcode_2" placeholder="우편번호" class="inptxt">
									<a href="#" class="btn_img btn_cnfrm"><span type="button" onclick="sample6_execDaumPostcode_2()" value="우편번호 찾기" class="btn_img">우편번호 찾기</span></a>
								</td>
							</tr>
							<tr>
								<th><label for="office_addr1">직장주소</label><em>*</em></th>
								<td>
									<p><input type="text" name="work_address1" id="sample6_address_2" placeholder="주소" class="inptxt w416"></p>
									<p><input type="text" name="work_address2" id="sample6_address2_2" placeholder="상세주소" class="inptxt w416 gap"></p>
								</td>
							</tr>
							<tr>
								<th><span>직장전화번호</span></th>
								<td>
										<select name="work_number1" class="sel_box" id="">
											<option value="">02</option>
											<option value="">031</option>
											<option value="">032</option>
											<option value="">033</option>
										</select>
									<span class="hyphen">-</span>
									<input type="text" id="office_tel_m" name="work_number2" title="직장전화 중간 번호 입력" class="inptxt w41">		
									<span class="hyphen">-</span>
									<input type="text" id="office_tel_e" name="work_number3" title="직장전화 마지막 번호 입력" class="inptxt w41">
								</td>
							</tr>
							<tr>
								<th><span>팩스번호</span></th>
								<td>
										<select name="fax_number1" class="sel_box" id="">
											<option value="010">010</option>
											<option value="011">011</option>
											<option value="016">016</option>
											<option value="017">017</option>
										</select>
									<span class="hyphen">-</span>
									<input type="text" id="fax_m" name="fax_number2" title="팩스 중간번호 입력" class="inptxt w41">
									<span class="hyphen">-</span>
									<input type="text" id="fax_e" name="fax_number3" title="팩스 마지막번호 입력" class="inptxt w41">
								</td>
							</tr>			
							<tr>
								<th><span>결혼여부</span></th>
								<td class="rdo_wrap">
									<span class="rdo_btn">
									<input type="radio" name="wed" id="single" value="single" checked="checked">
									<span class="rdo_on"></span>
									</span>
									<label for="single">미혼</label>
									<span class="rdo_btn">
									<input type="radio" name="wed" id="married" value="married">
									<span class="rdo_off"></span>
									</span>
									<label for="married">기혼</label>
								</td>
							</tr>
							<tr>
								<th><span>결혼기념일</span></th>
								<td>
										<select name="wed_year" class="sel_box" id="">
											<?php
                                                for($y = 1950 ;$y<2016; $y++)
                                                {
                                                    echo "<option value=".$y.">".$y."</option>";
                                                }
                                            ?>
										</select>
									<span class="year_txt">년</span>
										<select name="wed_month" class="sel_box" id="">
											<?php
                                                for($m = 1 ;$m<13; $m++)
                                                {
                                                    echo "<option value=".$m.">".$m."</option>";
                                                }
                                            ?>
										</select>
									<span class="year_txt">월</span>
										<select name="wed_day" class="sel_box" id="">
											<?php
                                                for($d = 1 ;$d<31; $d++)
                                                {
                                                    echo "<option value=".$d.">".$d."</option>";
                                                }
                                            ?>
										</select>
									<span class="year_txt">일</span>
								</td>
							</tr>										
							</table>
						</fieldset>	
						</div>
					</div>
					<div class="btn_wrap">
						<a href="../index.php" class="sp_sub btn_cancle">취소</a>
						<button type="submit" class="sp_sub btn_next">다음</button>
					</div>
				</div>
				</div>
				</form>
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
	<?php
    include "../layout/footer.php";
    ?>
</div>
</body>
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script>
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if(data.userSelectedType === 'R'){
                    //법정동명이 있을 경우 추가한다.
                    if(data.bname !== ''){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if(data.buildingName !== ''){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('sample6_postcode').value = data.zonecode; //5자리 새우편번호 사용자
                document.getElementById('sample6_address').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('sample6_address2').focus();
            }
        }).open();
    }
</script>
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script>
    function sample6_execDaumPostcode_2() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if(data.userSelectedType === 'R'){
                    //법정동명이 있을 경우 추가한다.
                    if(data.bname !== ''){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if(data.buildingName !== ''){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('sample6_postcode_2').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('sample6_address_2').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('sample6_address2_2').focus();
            }
        }).open();
    }
</script>
</html>
