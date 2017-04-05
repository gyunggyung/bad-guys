<?session_start();?>
<?setcookie('user',$_SESSION['user_id'],0);?>



<HTML>
<HEAD>
<TITLE>³ª»Û³à¼®µé-³»Á¤º¸</TITLE>
<script>Response.Expires = 0</script>
<script> Response.CacheControl="cache"</script>
 <script language="javascript">
 


 function logout() {

         location.href='logout.php';
 
 }
 
 </script>
</HEAD>
<body>
<form name='myForm' method='post'>
<table name="frm" align="center" valign="top" border="0" width="390" height="600">
            <p><font face="¸¼Àº °íµñ"><b>³» Á¤º¸</b></font></p>
			<br><br><br>
           <p align="center"> <font face="¸¼Àº °íµñ" color="gray"><span style="font-size:20pt;  border-width:2;border-color:gray; border-style:dotted; padding-left:50; padding-top:20; padding-right:50; padding-bottom:20;"><b><?echo $_COOKIE['user']; ?>´Ô ¾È³çÇÏ¼¼¿ä</span></b></font></p>
		   <br><br>
            <p align="right"><font face="¸¼Àº °íµñ" color="black"><span onclick='javascript: logout();'>·Î±×¾Æ¿ô</font></span></p>
            
</form>
</p>
<script>refresh();</script>



</body>
</html>