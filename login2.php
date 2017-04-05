<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>나쁜녀석들-로그인</TITLE>
 <script language="javascript">
 

 function check_submit() {
         
        if (document.myForm.id.value == "") {
                 alert("아이디를 입력해주세요.");
                document.myForm.id.focus();
                 return;
        } else if (document.myForm.pw.value=="") {
                 alert("패스워드를 입력해주세요.");
                document.myForm.pw.focus();
                 return;
        
        } else {
                 document.myForm.action = "login_ok2.php";
                 document.myForm.submit();
       }
         
 }
 
  function submit() {
                      document.myForm.action = "login_ok2.php";
                 document.myForm.submit();

 }
 
 </script>
 
 <style>
	#login{
		color:#000000; font-size:40pt; margin-top:20%;
		}
</style>

</HEAD>

<body>

<table align="center" height="90">
	<tr>
		<td><div id="login">LOGIN</div></td>
	</tr>
</table>

<br>

<form name='myForm' method='post'>
<center>
  <table name="frm" align="center" valign="top" border="0" >
	<tr>
		<td><input type="text" name='id' placeholder="아이디" maxlength="12" ></td>
		<td rowspan=2><input type="button" value="로그인" style="height:50px; width:70px; background-color:#FFFFFF; color:black; font-size:16px; border:solid 1px #A9A9A9;" onclick="javascript: check_submit();"></td>
	</tr>
	<tr>
		<td><input type="password" name='pw' placeholder="비밀번호" maxlength="15"></td>
	</tr>
	<tr>
	  <td><br><a href="../bad_guys.php"><img src="../bad_guys_photo/11.png"></a></td>
	</tr>
	
  </table>
</center>
</form>
<br><br><br><br>
</body>
</html>