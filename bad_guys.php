<?session_start()?>
<?If($HTTP_GET_VARS['load'] == "") $load=1;
else $load=2;?>
<HTML>
<HEAD>
<TITLE>나쁜녀석들</TITLE>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>
<script language="javascript">
 
function url_change(code) {
//alert(location.href);
        document.getElementById("view_iframe").src=code;
}
 
</script>
<meta http-equiv="content-type" content="text/html:charset=euc-kr">
</HEAD>
<form name=badguys_main method="GET">
<BODY>
<!--하이버링크 색-->
<style type="text/css">
a:link {text-decoration: none; color: #F8F8FF;}
a:visited {text-decoration: none; color: #F8F8FF;}
a:active {text-decoration: none; color: #333333;}
a:hover {text-decoration: underline; color: red;}
</style>

<table width="100%" cellpadding="3" cellspacing="0" border="0" > <!--맨위쪽-->
<tr bgcolor="black" >
 <td width="10%"><!-- 여백 --></td>
 <td width="10%"><font color="white">NST</font></td>
 <td width="30%"><!-- 여백 --></td>
 <?
 if(! (isset($_SESSION['user_id']) && isset($_SESSION['user_pw']) ))
 {?>
 <td width="30"><font color="gray"><a href=javascript:url_change("../login.php")>로그인</a></font></td>
 <?}
 else
 {?>
  <td width="30"><font color="gray"><a href=javascript:url_change("../logout.php")>로그아웃</a></font></td>
  <?}?>
  

 <td width="30"><font color="gray"><a href=javascript:url_change("../register.php")>회원가입</a></font></td>
 <td width="100"><font color="gray"><marquee direction="left">※그림이 밑으로 내려갈시 'F5'키를 누르세요※</marquee></font></td>
 <td width="10%"><!-- 여백 --></td>
</tr>
<tr height="5">

</tr>
</table>

<div align="center">
</br>
<!--<img src="../웹프로잭트/nst.png "width="192" height="100"> <!--nst 마크-->
<a href="../bad_guys.php"><img src="../bad_guys_photo/bad_guys.png"> </a><!--나쁜녀석들 글씨-->
</div>

 <table  bgcolor="gray" width="100%" cellpadding="10" cellspacing="1" border="0" align="center"> <!--소개 등등-->
<tr  align="center">

 <td width="20%"><!-- 여백 --></td>
 <td width="15%"><font ><a href="../character_report.php">캐릭터 소개</a></font></td>
 <td width="15%"><font ><a href="../bulletin_board.php">자유 게시판</a></font></td>
 <td width="10%"><font ><a href="../ost.php">OST</a></font></td>
 <td width="10%"><font ><a href="../once_more_see.php">다시보기</a></font></td>
 <td width="10%"><font ><a href="../my_information.php">내 정보</a></font></td>
 <td width="20%"><!-- 여백 --></td>
</table>

<table  align="center" valign="top" border="0" width="1200" height="1000" > <!--총 테이블-->
<tr valign=top >
 <td>
 
 <table  width="400" height="600" cellpadding="0" cellspacing="0" border="0" align="left"> <!--왼쪽-->
 <td align="left">
<? 


	if( ! (isset($_SESSION['user_id']) && isset($_SESSION['user_pw'])) )
	{?>
		<iframe id="view_iframe" src="login.php" width="480" height="600" name="view_iframe" onload="resizeIframe(this)" border="0" style="border-width:0;"></iframe>
		<?
	}

	else
	{?>
		<iframe id="view_iframe" src="welcome.php" width="480" height="600" name="view_iframe" onload="resizeIframe(this)" border="0" style="border-width:0;"></iframe>
		<?
	}?>


</table>


<!--이미지 슬라이드-->
 <table  width="400" height="600" cellpadding="0" cellspacing="0" border="0" align="right"> <!--오른쪽-->
<td align="right">
    <ul id="slider1">   <!--사진3개-->
      <li><img src="../bad_guys_photo/main1.jpg" hspace=""/  width="588" height="800"  ></li>
      <li><img src="../bad_guys_photo/main2.jpg" hspace=""/ width="588" height="800"  ></li>
      <li><img src="../bad_guys_photo/main3.jpg" hspace=""/ width="588" height="760"  ></li>
    </ul>

    </div>

    <span class="slider-prev"><img src="../bad_guys_photo/left.png" width="40" height="38" border="0" ></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span class="slider-next"><img src="../bad_guys_photo/right.png" width="40" height="38" border="0" HSPACE=40></span>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <script type="text/javascript">
        $(document).ready(function(){

            // 슬라이더 생성   
            var slider1 = $('#slider1').bxSlider({
                controls:false
            });

            var slider2 = $('#slider2').bxSlider({
                controls:false
            });

            // "다음" 버튼 클릭시 동작 정의    
            $('.slider-next').click(function(){
                slider1.goToNextSlide();
                slider2.goToNextSlide();
            });

            // "이전" 버튼 클릭시 동작 정의    
            $('.slider-prev').click(function(){
                slider1.goToPrevSlide();
                slider2.goToPrevSlide();
            });

        });
    </script>
    </td>
</table>

 </td>
</table>

<br><br><br><br>
<table width="100%" height="100" bgcolor="#161616"> <!--만든사람 등등-->
<tr>
 <td>
  <table width="300" height="100">
   <tr valign=top >
    
    <td align="canter">
      <table width="1000" height="200" cellpadding="0" cellspacing="0" border="0" align="left">
       <img src="../bad_guys_photo/nstlogo.jpg" width="133" height="100"  align="left">
      </table>
      
      <p><font color="#FFFFFF"; size="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      제작자 : 염모모, 이모모, 조모모</font></p>
      <p><font color="#FFFFFF"; size="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      서울특별시 마포구 아현동 457-30<font></p>
      <p><font color="#FFFFFF"; size="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Copyright ⓒ NST</font></p>
    </td>
   </tr>
  </table>
 </td>
</tr>
</table>

<embed src="나쁜녀석들ost.m3u">

</form>
</BODY>
</HTML>