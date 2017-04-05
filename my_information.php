<?session_start();?>
<HTML>
<HEAD>
<TITLE>나쁜녀석들</TITLE>

 <script language="javascript">

 
 </script>
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
 <td width="30"><font color="gray"><a href="../login2.php">로그인</a></font></td>
 <?}
 else
 {?>
  <td width="30"><font color="gray"><a href="../logout.php">로그아웃</a></font></td>
  <?}?>
 <td width="30"><font color="gray"><a href="../register2.php">회원가입</a></font></td>
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

<form name='myForm' method='post'>
<table name="frm" align="center" valign="top" border="0" width="390" height="600">
            <p><font face="맑은 고딕"><b>내 정보</b></font></p>
			<br><br><br>
           <p align="center"> <font face="맑은 고딕" color="gray"><span style="font-size:20pt;  border-width:2;border-color:gray; border-style:dotted; padding-left:50; padding-top:20; padding-right:50; padding-bottom:20;"><b><?echo $_COOKIE['user']; ?>님 안녕하세요</span></b></font></p>
		   <br><br>
            <p align="right"><font face="맑은 고딕" color="black"><span onclick='javascript: logout();'>로그아웃</font></span></p>
            
</form>
</p>
<script>refresh();</script>



</body>
</html>