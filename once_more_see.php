<?session_start()?>
<?
if(! (isset($_SESSION['user_id']) && isset($_SESSION['user_pw']) )){
 echo("
	<script>
	window.alert('�α����� �ؾ� �̿밡���մϴ�');
	history.go(-1);
	</script>
");
}
?>
<HTML>
<HEAD>
<TITLE>���۳༮��</TITLE>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>

<meta http-equiv="content-type" content="text/html:charset=euc-kr">
</HEAD>
<BODY>
<!--���̹���ũ ��-->
<style type="text/css">
a:link {text-decoration: none; color: #F8F8FF;}
a:visited {text-decoration: none; color: #F8F8FF;}
a:active {text-decoration: none; color: #333333;}
a:hover {text-decoration: underline; color: red;}
</style>

<table width="100%" cellpadding="3" cellspacing="0" border="0" > <!--������-->
<tr bgcolor="black" >
 <td width="10%"><!-- ���� --></td>
 <td width="10%"><font color="white">NST</font></td>
 <td width="30%"><!-- ���� --></td>
 <?
 if(! (isset($_SESSION['user_id']) && isset($_SESSION['user_pw']) ))
 {?>
 <td width="30"><font color="gray"><a href='../login.php')>�α���</a></font></td>
 <?}
 else
 {?>
  <td width="30"><font color="gray"><a href='../logout.php')>�α׾ƿ�</a></font></td>
  <?}?>
 <td width="30"><font color="gray"><a href="../register.php">ȸ������</a></font></td>
 <td width="100"><font color="gray"><marquee direction="left">�س��۳༮�� �������� �Դϴ١�</marquee></font></td>
 <td width="10%"><!-- ���� --></td>
</tr>
<tr height="5">

</tr>
</table>

<div align="center">
</br>
<!--<img src="../��������Ʈ/nst.png "width="192" height="100"> <!--nst ��ũ-->
<a href="../bad_guys.php"><img src="../bad_guys_photo/bad_guys.png"> </a><!--���۳༮�� �۾�-->
</div>

 <table  bgcolor="gray" width="100%" cellpadding="10" cellspacing="1" border="0" align="center"> <!--�Ұ� ���-->
<tr  align="center">

 <td width="20%"><!-- ���� --></td>
 <td width="15%"><font ><a href="../character_report.php">ĳ���� �Ұ�</a></font></td>
 <td width="15%"><font ><a href="../bulletin_board.php">���� �Խ���</a></font></td>
 <td width="10%"><font ><a href="../ost.php">OST</a></font></td>
 <td width="10%"><font ><a href="../once_more_see.php">�ٽú���</a></font></td>
 <td width="10%"><font ><a href="../my_information.php">�� ����</a></font></td>
 <td width="20%"><!-- ���� --></td>
</table>

</br></br>
<!--<table  align="center" valign="top" border="0" width="100%" height="1200" body bgcolor="gray"> 
 <td> 
 </td>
</table>-->

<table  align="center" valign="top" border="0" width="860" height="1000" body > <!--�� ���̺�-->
<tr valign=top >
 <td>

  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/0rnzeYUTquM" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/wLwB7BlrROo/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��11ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
 
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://dramalink.net/xoxo/?http://www.tudou.com/v/2DCAC5AzKqU/&resourceId=0_04_05_99/v.swf" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/xink/?xink=http://player.youku.com/player.php/sid/XODQzMTM5MzUy/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��10ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
 
 
 <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/hsxbpN9tcDE" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/qSaddC7QhYM/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��9ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
 <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left">  
  <a href="http://www.tudou.com/programs/view/j71dzCLTRds" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/Ow0nQcoWYhY/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��8ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/GfhZYZWTbOQ" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/G9aZcmhp1Tw/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��7ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/na2Mi04ks_0" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/5wYc6rWKEQs/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��6ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/ChWQSyBnxgc" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/npBdHeBtwTI/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��5ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/sG5kSYzeElU" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/R5FqT0jsIvo/resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��4ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/RtcVxQz1c14" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/N_S6RgcJKYY/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��3ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/CuVCVNkW2cY" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/5Tw3kyy0XK4/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��2ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  <table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="border-collapse:collapse; border:1px gray solid;">
  <tr>
  <td>    <p align="left"> 
  <a href="http://www.tudou.com/programs/view/e4WjlqRdk5E" target="_blank"><img src="../bad_guys_photo/once_more_see_photo.jpg" ></a>  &nbsp; &nbsp;
  <a href="http://dramalink.net/linkbank/?xink=http://www.tudou.com/v/j2TezBRm-Ss/&resourceId=0_04_05_99/v.swf" target="_blank" ><font color="black" >���� �༮��(+19) ��1ȸ �ٽú���</font></a> </p> </td>
  </tr>
  </table>
  
  <br>
  
  
</td>
 </tr>
</table>

<br><br><br><br>
<table width="100%" height="100" bgcolor="#161616"> <!--������ ���-->
<tr>
 <td>
  <table width="300" height="100">
   <tr valign=top >
    
    <td align="canter">
      <table width="1000" height="200" cellpadding="0" cellspacing="0" border="0" align="left">
       <img src="../bad_guys_photo/nstlogo.jpg" width="133" height="100"  align="left">
      </table>
      
      <p><font color="#FFFFFF"; size="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      ������ : �����, �̸��, �����</font></p>
      <p><font color="#FFFFFF"; size="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      ����Ư���� ������ ������ 457-30<font></p>
      <p><font color="#FFFFFF"; size="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Copyright �� NST</font></p>
    </td>
   </tr>
  </table>
 </td>
</tr>
</table>


</BODY>
</HTML>