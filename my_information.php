<?session_start();?>
<HTML>
<HEAD>
<TITLE>���۳༮��</TITLE>

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

<form name='myForm' method='post'>
<table name="frm" align="center" valign="top" border="0" width="390" height="600">
            <p><font face="���� ���"><b>�� ����</b></font></p>
			<br><br><br>
           <p align="center"> <font face="���� ���" color="gray"><span style="font-size:20pt;  border-width:2;border-color:gray; border-style:dotted; padding-left:50; padding-top:20; padding-right:50; padding-bottom:20;"><b><?echo $_COOKIE['user']; ?>�� �ȳ��ϼ���</span></b></font></p>
		   <br><br>
            <p align="right"><font face="���� ���" color="black"><span onclick='javascript: logout();'>�α׾ƿ�</font></span></p>
            
</form>
</p>
<script>refresh();</script>



</body>
</html>