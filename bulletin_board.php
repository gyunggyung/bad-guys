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




<meta http-equiv="content-type" content="text/html:charset=euc-kr">
</HEAD>
<BODY>
<!--하이버링크 색-->
<style type="text/css">
a:link {text-decoration: none; color: #F8F8FF;}
a:visited {text-decoration: none; color: #F8F8FF;}
a:active {text-decoration: none; color: #333333;}
a:hover {text-decoration: underline; color: red;}
table,th,td {border:0px solid black;border-collapse:collapse;}
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


<table name="frm" align="center" valign="top" border="0" width="800" height="408"> <!--총 테이블-->
<tr valign=top >
 <td>
 
<iframe src="board.php" width="800" height="500" name="board_t" border="0" style=" border-width:0;"></iframe>


  </td>
</table>


<script type="text/javascript">

</script>
        <div style="position: relative;  left: 1000;">
              
         </div>




<p align="center">
<a href="description.php" target="_blank"> <img src="../bad_guys_photo/10.png"></a>

</p>



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