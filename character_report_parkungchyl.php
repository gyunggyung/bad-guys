<?session_start();?>
<HTML>
<HEAD>
<TITLE>���۳༮��</TITLE>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>
<script language="javascript">
</script>
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
 <td width="30"><font color="gray"><a href="../login2.php">�α���</a></font></td>
 <?}
 else
 {?>
  <td width="30"><font color="gray"><a href="../logout.php">�α׾ƿ�</a></font></td>
  <?}?>
 <td width="30"><font color="gray"><a href="../register2.php">ȸ������</a></font></td>
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

</br></br></br>
<!--<table  align="center" valign="top" border="0" width="100%" height="1200" body bgcolor="gray"> 
 <td> 
 </td>
</table>-->

<table  align="center" valign="top" border="0" width="860" height="1200" body > <!--�� ���̺�-->
<tr valign=top >
 <td>

 <table  width="700" height="1000" cellpadding="0" cellspacing="0" border="0" align="left"> <!--���� ����-->
 <td align="left">
 <img src="../bad_guys_photo/character_report_parkungchyl.jpg" width="700" height="1000">
 </td>
 </table>
    
  <table  width="150" height="100" cellpadding="0" cellspacing="0" border="0" align="right"> <!--������ �̵�-->
<td align="right">

 <p><a href="../character_report.php"><img src="../bad_guys_photo/ohgutak.jpg" align="top" width="111" height="75" ></a></p>
 <p><a href="../character_report_parkungchyl.php"><img src="../bad_guys_photo/parkungchyl.jpg" align="top" ></a></p>
 <p><a href="../character_report_leejungmun.jpg.php"><img src="../bad_guys_photo/leejungmun.jpg" align="top"></a></p>
 <p><a href="../character_report_jungteasy.php"><img src="../bad_guys_photo/jungteasy.jpg" align="top"></a></p>
 <p><a href="../character_report_yumeeyoung.php"><img src="../bad_guys_photo/yumeeyoung.jpg" align="top"></a></p>

 </td>
</table>

    </td>
</table>

 </td>
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