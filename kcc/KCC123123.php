<html lang="ko"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body class="sub">﻿



<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title>KCC 금강컨트리클럽</title>
<link rel="stylesheet" type="text/css" href="./KCC 금강컨트리클럽_files/kcc.css">
<link rel="stylesheet" type="text/css" href="./KCC 금강컨트리클럽_files/rubyadd.css">
<link rel="stylesheet" type="text/css" href="./KCC 금강컨트리클럽_files/jquery-ui-1.9.2.min.css">


<script src="./KCC 금강컨트리클럽_files/jquery-1.8.3.min.js.다운로드"></script>
<script src="./KCC 금강컨트리클럽_files/jquery-ui-1.9.2.min.js.다운로드"></script>
<script src="./KCC 금강컨트리클럽_files/jquery.jqtransform.js.다운로드"></script>
<script src="./KCC 금강컨트리클럽_files/common.js.다운로드"></script>
<script src="./KCC 금강컨트리클럽_files/jquery.form.js.다운로드"></script>
<script src="./KCC 금강컨트리클럽_files/kccgolf.js.다운로드"></script>
<script src="./KCC 금강컨트리클럽_files/jquery.ui.datepicker-ko.js.다운로드"></script>

<style>

/* Z-index of #mask must lower than #boxes .window */
.mask {
  position:absolute;
  z-index:9000;
  background-color:#666;
  display:none;
}

</style>


<script type="text/javascript" language="javascript">


$(function(){

		
    // 셀렉트 스크립트
    $('.sel_box').jqTransform({imgPath:'img/'});

});

</script>





<script type="text/javascript" language="javascript">


$(function(){
    
    // 탑메뉴 열고 닫고
    $('.site_gnblist li').mouseover(function(){
        $('#header').addClass('site_gnb_opn');
        $(this).addClass('selected');
    });
    
    $('.site_gnblist li').mouseout(function(){
        $('#header').removeClass('site_gnb_opn');
         $(this).removeClass('selected');
    });
    

    // 로그인 클릭
    $('#btn_login_t').click(function()
    {
       $.ajax(
       {
            url: '/index.php/member/login',
            data:{ },
            type:"POST",
            success:function(msg)
            { 
                fn_pop(msg);
                //return false;
            }
        
        });        
        return false;        
    });
    
/*
    // 아이디비번찾기
    $('#btn_find, #left_find').live('click',function(){
      
      // fn_pop_hide();
      
       // 찾기 레이어 변환
       $.ajax(
       {
            url: '/index.php/member/find',
            data:{ },
            type:"POST",
            success:function(msg)
            { 
                fn_pop(msg);
                return false;
            }
        });        
        return false;        
 
    });

*/
    // 로그인필요
    $('.logchk').live('click',function(){
       
       if($('#se_id').val()=='')
       {
            $('#btn_login_t').click();
            return false;
       }
    });





    // 사이트맵
    $('#btn_sitemap').click(function()
    {
       $.ajax(
       {
            url: '/index.php/main/sitemap',
            data:{ },
            type:"POST",
            success:function(msg)
            { 
                fn_pop(msg);
                //return false;
            }
        
        });        
        return false;        
    });





});

</script>

<!-- skip nav -->
<ul id="skip">
<li><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list#site_gnb">주메뉴 바로가기</a></li>
<li><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list#content">본문 바로가기</a></li>
</ul>
<!-- //skip nav -->


<input type="hidden" name="se_id" id="se_id" value="">

<div id="wrap">	
	<!-- header -->
	<!-- [D] 메뉴 open시 class="site_gnb_opn" 추가 -->
	<div id="header" class="">
		<!-- global gnb -->
		<div id="gnb">
			<div class="gnb">
				<h1><a href="https://www.kccgolf.co.kr/index.php/main" class="sp_com lg_kcc"><strong class="blind">KCC 금강컨트리클럽 KUMKANG COUNTRY CLUB</strong></a></h1>
				<ul class="gnb_menu">
 				
                                <!-- 로그인전 -->
                <li><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list#" id="btn_login_t">로그인</a></li>
				<li><a href="https://www.kccgolf.co.kr/index.php/member/join1">회원가입</a></li>
                <!-- 로그인전 -->
                				<li><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list#" id="btn_sitemap">사이트맵</a></li>
				</ul>
			</div>
		</div>
		<!-- //global gnb -->		
		<!-- site gnb -->
		<div id="site_gnbarea">
			<div id="site_gnb">
				<!-- [D] 해당 메뉴 li에 selected 추가 -->
				<ul class="site_gnblist">
				<li class="m1"><a href="https://www.kccgolf.co.kr/index.php/intro/club" class="sp_com gnb_m1"><span class="blind">Introduction 클럽소개</span></a>
					<ul class="site_sublist">
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/intro/club" class="sp_com gnb_m1_1"><span class="blind">클럽소개</span></a></li>
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/intro/history" class="sp_com gnb_m1_2"><span class="blind">연혁</span></a></li>
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/intro/info" class="sp_com gnb_m1_3"><span class="blind">이용안내</span></a></li>
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/intro/company" class="sp_com gnb_m1_4"><span class="blind">관계사 소개</span></a></li>
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/intro/location" class="sp_com gnb_m1_5"><span class="blind">오시는 길</span></a></li>
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/intro/contactus" class="sp_com gnb_m1_6 logchk"><span class="blind">Contact Us</span></a></li>
					</ul>
				</li>
				<li class="m2"><a href="https://www.kccgolf.co.kr/index.php/res/reserve" class="sp_com gnb_m2 logchk"><span class="blind">RESERVATION 예약하기</span></a>
					<ul class="site_sublist">
					<li><a href="https://www.kccgolf.co.kr/index.php/res/reserve" class="sp_com gnb_m2_1 logchk"><span class="blind">예약관리</span></a></li>
										<li class=""><a href="https://www.kccgolf.co.kr/index.php/res/use_view" class="sp_com gnb_m2_3 logchk"><span class="blind">이용내역</span></a></li>
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/res/break_view" class="sp_com gnb_m2_4 logchk"><span class="blind">위약정보</span></a></li>
					</ul>
				</li>
				<li class="m3"><a href="https://www.kccgolf.co.kr/index.php/course/info" class="sp_com gnb_m3"><span class="blind">COURSE 코스안내</span></a>
					<ul class="site_sublist">
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/course/info" class="sp_com gnb_m3_1"><span class="blind">코스소개</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/course/west01" class="sp_com gnb_m3_2"><span class="blind">서코스</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/course/south01" class="sp_com gnb_m3_4"><span class="blind">남코스</span></a></li>
                    <li><a href="https://www.kccgolf.co.kr/index.php/course/east01" class="sp_com gnb_m3_3"><span class="blind">동코스</span></a></li>
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/course/gallery" class="sp_com gnb_m3_5"><span class="blind">코스 갤러리</span></a></li>
					</ul>
				</li>
				<li class="m4"><a href="https://www.kccgolf.co.kr/index.php/facil/clubhouse" class="sp_com gnb_m4"><span class="blind">FACILITIES 시설안내</span></a>
					<ul class="site_sublist">
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/facil/clubhouse" class="sp_com gnb_m4_1"><span class="blind">클럽하우스</span></a></li>
                    <li><a href="https://www.kccgolf.co.kr/index.php/facil/starthouse" class="sp_com gnb_m4_2"><span class="blind">팔각정(스타트하우스)</span></a></li>
					<li class=""><a href="https://www.kccgolf.co.kr/index.php/facil/menu" class="sp_com gnb_m4_3"><span class="blind">특선메뉴</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/facil/shadehouse" class="sp_com gnb_m4_4"><span class="blind">그늘집</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/facil/locker" class="sp_com gnb_m4_5"><span class="blind">락커룸</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/facil/proshop" class="sp_com gnb_m4_6"><span class="blind">프로샾</span></a></li>
					</ul>
				</li>
				<li class="m5"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list" class="sp_com gnb_m5"><span class="blind">COMMUNITY 커뮤니티</span></a>
					<ul class="site_sublist">
					<li><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list" class="sp_com gnb_m5_1"><span class="blind">공지사항</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/commu/down_list" class="sp_com gnb_m5_2"><span class="blind">자료실</span></a></li>
					                    </ul>
				</li>
				</ul>
			</div>
		</div>
		<!-- //site gnb -->
	</div>
	<!-- //header -->
    
    
    
    
    


<script type="text/javascript" language="javascript">



$(function()
{
});

</script>

<!-- content -->
	<div id="content">
		<div class="sub_cont">

        <!-- left메뉴 -->
        
			<div class="cont_l">
				<h2 class="nav_tit"><span class="sp_subtit com_tit">커뮤니티</span></h2>
				<ul class="nav_lst">
                    <li class="selected"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list">공지사항 <span class="sp_dot ico_arr">&nbsp;</span></a></li>
    				<li><a href="https://www.kccgolf.co.kr/index.php/commu/down_list">자료실 <span class="sp_dot ico_arr">&nbsp;</span></a></li>
    				
                                        
				</ul>
			</div>
        
			<div class="cont_r">
				<div class="loc_area">
					<p class="loc">
						<a href="https://www.kccgolf.co.kr/index.php/main/index">홈</a> <span class="arr">&gt;</span>
						<a href="https://www.kccgolf.co.kr/index.php/commu/notice_list">커뮤니티</a> <span class="arr">&gt;</span>
						<strong>공지사항</strong>
					</p>
				</div>
				<div class="comm_wrap">
					<h3 class="sp_subtit stit_notice">공지사항</h3>
					<p class="stxt">금강컨트리클럽을 이용하시기 불편함 없도록 밝고 건강한 새로운 소식을 회원님께 알려드립니다.</p>
					<table class="not_tb">
					<caption><span class="blind">공지사항 안내</span></caption>
					<colgroup>
					<col style="width:68px">
					<col>
					<col style="width:137px">
					<col style="width:82px">
					</colgroup>
					<thead>
					<tr>
						<th scope="col"><span class="in">번호</span></th>
						<th scope="col"><span class="in">제목</span></th>
						<th scope="col"><span class="in">등록일</span></th>
						<th scope="col"><span class="in">조회수</span></th>
					</tr>
					</thead>
					<tbody>
						                        <tr>
							<td>
								<div class="in">182</div>
							</td>
							<td class="con">
								<div class="in"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_view/182">2017년 연단체팀 모집</a></div>
							</td>
							<td>
								<div class="in">
									<div class="in">2016.10.27</div>
								</div>
							</td>
							<td>
								<div class="in">
									<div class="in">116</div>
								</div>
							</td>
						</tr>
                                                <tr>
							<td>
								<div class="in">181</div>
							</td>
							<td class="con">
								<div class="in"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_view/181">2016년 11월 그린피 안내</a></div>
							</td>
							<td>
								<div class="in">
									<div class="in">2016.10.24</div>
								</div>
							</td>
							<td>
								<div class="in">
									<div class="in">598</div>
								</div>
							</td>
						</tr>
                                                <tr>
							<td>
								<div class="in">180</div>
							</td>
							<td class="con">
								<div class="in"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_view/180">2016년 10월 ~ 11월 그린피 안내</a></div>
							</td>
							<td>
								<div class="in">
									<div class="in">2016.10.18</div>
								</div>
							</td>
							<td>
								<div class="in">
									<div class="in">1,905</div>
								</div>
							</td>
						</tr>
                                                <tr>
							<td>
								<div class="in">179</div>
							</td>
							<td class="con">
								<div class="in"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_view/179">2016년 10월 그린피 안내</a></div>
							</td>
							<td>
								<div class="in">
									<div class="in">2016.09.19</div>
								</div>
							</td>
							<td>
								<div class="in">
									<div class="in">7,574</div>
								</div>
							</td>
						</tr>
                                                <tr>
							<td>
								<div class="in">178</div>
							</td>
							<td class="con">
								<div class="in"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_view/178">2016년 9월~10월 그린피 안내</a></div>
							</td>
							<td>
								<div class="in">
									<div class="in">2016.09.12</div>
								</div>
							</td>
							<td>
								<div class="in">
									<div class="in">3,733</div>
								</div>
							</td>
						</tr>
                                                <tr>
							<td>
								<div class="in">177</div>
							</td>
							<td class="con">
								<div class="in"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_view/177">2016년 9월 그린피 안내</a></div>
							</td>
							<td>
								<div class="in">
									<div class="in">2016.08.16</div>
								</div>
							</td>
							<td>
								<div class="in">
									<div class="in">5,858</div>
								</div>
							</td>
						</tr>
                                                <tr>
							<td>
								<div class="in">176</div>
							</td>
							<td class="con">
								<div class="in"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_view/176">2016년 8월 그린피 안내</a></div>
							</td>
							<td>
								<div class="in">
									<div class="in">2016.07.18</div>
								</div>
							</td>
							<td>
								<div class="in">
									<div class="in">6,009</div>
								</div>
							</td>
						</tr>
                                                <tr>
							<td>
								<div class="in">175</div>
							</td>
							<td class="con">
								<div class="in"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_view/175">2016년 7월 그린피 안내</a></div>
							</td>
							<td>
								<div class="in">
									<div class="in">2016.06.28</div>
								</div>
							</td>
							<td>
								<div class="in">
									<div class="in">5,177</div>
								</div>
							</td>
						</tr>
                                                <tr>
							<td>
								<div class="in">174</div>
							</td>
							<td class="con">
								<div class="in"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_view/174">2016년 6월~7월 그린피 안내</a></div>
							</td>
							<td>
								<div class="in">
									<div class="in">2016.06.13</div>
								</div>
							</td>
							<td>
								<div class="in">
									<div class="in">4,602</div>
								</div>
							</td>
						</tr>
                                                <tr>
							<td>
								<div class="in">173</div>
							</td>
							<td class="con">
								<div class="in"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_view/173">2016년 하절기 복장 안내문</a></div>
							</td>
							<td>
								<div class="in">
									<div class="in">2016.05.26</div>
								</div>
							</td>
							<td>
								<div class="in">
									<div class="in">4,023</div>
								</div>
							</td>
						</tr>
                        						
					</tbody>
					</table>
					<div class="page">
                    <span class="num current">1</span><a class="num" href="https://www.kccgolf.co.kr/index.php/commu/notice_list?pg=2">2</a><a class="num" href="https://www.kccgolf.co.kr/index.php/commu/notice_list?pg=3">3</a><a class="num" href="https://www.kccgolf.co.kr/index.php/commu/notice_list?pg=4">4</a><a class="num" href="https://www.kccgolf.co.kr/index.php/commu/notice_list?pg=5">5</a><a class="btn_page btn_next" href="https://www.kccgolf.co.kr/index.php/commu/notice_list?pg=6">다음<span class="sp_dot">페이지 이동</span></a><a class="btn_page btn_last" href="https://www.kccgolf.co.kr/index.php/commu/notice_list?pg=17">맨뒤<span class="sp_dot">페이지 이동</span></a>      <!--              
						<a href="#" class="btn_page btn_first"><span class="sp_dot">페이지 이동</span>처음</a>
						<a href="#" class="btn_page btn_prev"><span class="sp_dot">페이지 이동</span>이전</a>
						<span class="num current">1</span>
						<a href="#" class="num">2</a>
						<a href="#" class="num">3</a>
						<a href="#" class="num">4</a>
						<a href="#" class="num">5</a>
						<a href="#" class="num">6</a>
						<a href="#" class="btn_page btn_next">다음<span class="sp_dot">페이지 이동</span></a>
						<a href="#" class="btn_page btn_last">맨뒤<span class="sp_dot">페이지 이동</span></a>
    -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //content -->
    
 <div id="mask" class="dimmed" style="display: none;"><div class="dimmed_inner"></div></div>


<div id="wrap_pop" style="position: absolute; display: none;"></div>

<div id="div_pop" style="position: absolute; display: none;"></div>

<div id="div_alert" style="position: absolute; display: none;">
	<div id="ly_wrap" class="ly_notice" style="position: absolute; display: none;">
		<div class="inner">
			<div class="ly_header">
				<h1 class="sp_ly tit_noti"><span class="blind">알림</span></h1>
			</div>
			<p class="ly_txt">비밀번호가 일치하지 않습니다.<br>확인 후 다시 입력해 주세요.</p>
			<div class="ly_footer">
				<div class="btn_area">
					<a href="https://www.kccgolf.co.kr/index.php/commu/notice_list#" class="sp_ly">확인</a>
				</div>
			</div>
		</div>
		<div class="ly_top">
			<span class="sp_edge ly_top_l"></span>
			<span class="ly_top_m"></span>
			<span class="sp_edge ly_top_r"></span>
		</div>
		<span class="ly_l"></span>
		<span class="ly_r"></span>
		<div class="ly_bottom">
			<span class="sp_edge ly_bottom_l"></span>
			<span class="ly_bottom_m"></span>
			<span class="sp_edge ly_bottom_r"></span>
		</div>
		<a href="https://www.kccgolf.co.kr/index.php/commu/notice_list#" class="sp_ly btn_close"><span class="blind">레이어 닫기</span></a>
	</div>

</div>


<script type="text/javascript" language="javascript">
// 레이어 마스크


$(function(){

		
    
    $('#div_alert .btn_close, #div_alert .btn_area a').click(function(){
       fn_alert_hide();
       return false;
    });

    $('#div_pop .btn_close, #div_pop .btn_area a').live('click',function(){
       fn_pop_hide();
       return false;
    });



});

</script>


<input type="hidden" name="loginval" id="loginval" value="">


	<!-- footer -->
	<div id="footer">
		<div class="ft_copy">
			<dl class="policy v2">
			<dt class="blind">KCC 약관 및 정책</dt>
			<dd>
				<a href="https://www.kccgolf.co.kr/index.php/intro/info_04" class="btn_agree">회칙 및 이용약관</a>
				<a href="https://www.kccgolf.co.kr/index.php/intro/info_04_03" class="btn_info"><strong>개인정보 취급방침</strong></a>
				<a href="http://gw.kccgolf.co.kr/kcc_admin/index.asp" target="_blank" class="btn_intranet">인트라넷</a>
			</dd>
			</dl>
			<dl class="kcc_info">
			<dt class="blind">금강 컨트리 클럽</dt>
			<dd>
				<strong class="kcc">(주)금강레저</strong> 대표자: 송충호 <span class="bar">ㅣ</span> 경기도 여주시 가남읍 여주남로 541 <span class="bar">ㅣ</span> 대표전화: 031-880-6000 <span class="bar">ㅣ</span> 팩스: 031-884-5155<br>
				사업자등록번호: 126-81-07997 <span class="bar">ㅣ</span> 통신판매법 신고 : 2009-경기여주-0058 <span class="bar">ㅣ</span> 개인정보관리책임자 : 윤두한 031-880-6000
				<!-- <a href="http://www.ftc.go.kr/info/bizinfo/communicationView.jsp?apv_perm_no=2009411000930200058&area1=&area2=&currpage=1&searchKey=04&searchVal=1268107997&stdate=&enddate=" target="_blank" class="sp_com btn_info"><span class="blind">사업자 정보확인</span></a>-->
                <a href="http://ftc.go.kr/info/bizinfo/communicationList.jsp" target="_blank" class="sp_com btn_info"><span class="blind">사업자 정보확인</span></a>
                
			</dd>
			</dl>
			<address class="copy">
			Copyright (c) KUMGANG LEISURE  Co., Ltd.  All rights reserved
			</address>
		</div>
	</div>
	<!-- //footer-->
</div>


    </body></html>