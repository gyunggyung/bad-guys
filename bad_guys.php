<?session_start()?>
<?If($HTTP_GET_VARS['load'] == "") $load=1;
else $load=2;?>
<HTML>
<HEAD>
<TITLE>���۳༮��</TITLE>
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
 <td width="30"><font color="gray"><a href=javascript:url_change("../login.php")>�α���</a></font></td>
 <?}
 else
 {?>
  <td width="30"><font color="gray"><a href=javascript:url_change("../logout.php")>�α׾ƿ�</a></font></td>
  <?}?>
  

 <td width="30"><font color="gray"><a href=javascript:url_change("../register.php")>ȸ������</a></font></td>
 <td width="100"><font color="gray"><marquee direction="left">�ر׸��� ������ �������� 'F5'Ű�� ���������</marquee></font></td>
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

<table  align="center" valign="top" border="0" width="1200" height="1000" > <!--�� ���̺�-->
<tr valign=top >
 <td>
 
 <table  width="400" height="600" cellpadding="0" cellspacing="0" border="0" align="left"> <!--����-->
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


<!--�̹��� �����̵�-->
 <table  width="400" height="600" cellpadding="0" cellspacing="0" border="0" align="right"> <!--������-->
<td align="right">
    <ul id="slider1">   <!--����3��-->
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

            // �����̴� ����   
            var slider1 = $('#slider1').bxSlider({
                controls:false
            });

            var slider2 = $('#slider2').bxSlider({
                controls:false
            });

            // "����" ��ư Ŭ���� ���� ����    
            $('.slider-next').click(function(){
                slider1.goToNextSlide();
                slider2.goToNextSlide();
            });

            // "����" ��ư Ŭ���� ���� ����    
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

<embed src="���۳༮��ost.m3u">

</form>
</BODY>
</HTML>