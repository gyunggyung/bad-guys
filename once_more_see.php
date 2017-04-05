<?session_start()?>
<?
if(! (isset($_SESSION['user_id']) && isset($_SESSION['user_pw']) )){
 echo("
	<script>
	window.alert('로그인을 해야 이용가능합니다');
	history.go(-1);
	</script>
");
}
?>
<HTML>
<HEAD>
<TITLE>나쁜녀석들</TITLE>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>

<meta http-equiv="content-type" content="text/html:charset=euc-kr">
</HEAD>
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
 <td width="30"><font color="gray"><a href='../login.php')>로그인</a></font></td>
 <?}
 else
 {?>
  <td width="30"><font color="gray"><a href='../logout.php')>로그아웃</a></font></td>
  <?}?>
 <td width="30"><font color="gray"><a href="../register.php">회원가입</a></font></td>
 <td width="100"><font color="gray"><marquee direction="left">※나쁜녀석들 팬페이지 입니다※</marquee></font></td>
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

</br></br>
<!--<table  align="center" valign="top" border="0" width="100%" height="1200" body bgcolor="gray"> 
 <td> 
 </td>
</table>-->

<table  align="center" valign="top" border="0" width="860" height="1000" body > <!--총 테이블-->
<tr valign=top >
 <td>

  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/0rnzeYUTquM" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/wLwB7BlrROo/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제11회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
 
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://dramalink.net/xoxo/?http://www.tudou.com/v/2DCAC5AzKqU/&resourceId=0_04_05_99/v.swf" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/xink/?xink=http://player.youku.com/player.php/sid/XODQzMTM5MzUy/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제10회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
 
 
 <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/hsxbpN9tcDE" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/qSaddC7QhYM/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제9회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
 <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left">  
  <a href="http://www.tudou.com/programs/view/j71dzCLTRds" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/Ow0nQcoWYhY/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제8회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/GfhZYZWTbOQ" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/G9aZcmhp1Tw/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제7회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/na2Mi04ks_0" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/5wYc6rWKEQs/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제6회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/ChWQSyBnxgc" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/npBdHeBtwTI/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제5회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/sG5kSYzeElU" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/R5FqT0jsIvo/resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제4회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/RtcVxQz1c14" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/N_S6RgcJKYY/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제3회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/CuVCVNkW2cY" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/5Tw3kyy0XK4/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제2회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/e4WjlqRdk5E" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/j2TezBRm-Ss/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >나쁜 녀석들(+19) 제1회 다시보기</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  
</td>
 </tr>
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


</BODY>
</HTML>