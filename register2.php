<?

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>나쁜녀석들-회원가입</TITLE>
 <script language="javascript">

 function check_submit() {
         
        if (document.myForm.id.value == "") {
                 alert("가입할 아이디를 입력해주세요.");
                document.myForm.id.focus();
                 return;
        } else if (document.myForm.pw.value=="") {
                 alert("가입할 패스워드를 입력해주세요.");
                document.myForm.pw.focus();
                 return;
        
        } else {
                 document.myForm.action = "user_insert2.php";
                 document.myForm.submit();
       }
         
 }
 function check_id(){
  window.open("id_check.php?id=" + document.myForm.id.value,
"아이디 중복확인","left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
}
  function submit() {
                      document.myForm.action = "user_insert2.php";
                 document.myForm.submit();

 }
 
 </script>
 <style>
	#register{
		color:#000000; font-size:40pt; margin-top:20%;
		}
</style>

</HEAD>

<body>

<table align="center" height="90">
	<tr>
		<td><div id="register">JOIN</div></td>
	</tr>
</table>

<br>

<form name='myForm' method='post'>
<center>
  <table name="frm" align="center" valign="top" border="0" >
	<tr>
		<td>
			<input type="text" name='id' placeholder="아이디" maxlength="12">
		</td>
		<td>
			<input type="button" value="중복체크" onclick="javascript:check_id();" style="height:25px; width:90px; background-color:#FFFFFF; color:black; font-size:16px; border:solid 1px #A9A9A9;">
		</td>
	</tr>

	<tr>
		<td>
			<input type="password" name='pw' placeholder="비밀번호" maxlength="15">
		</td>
		<td>
			<input type="button" value="회원가입" onclick="javascript: check_submit();" style="height:25px; width:90px; background-color:#FFFFFF; color:black; font-size:16px; border:solid 1px #A9A9A9;">
		</td>
	</tr>
	
	<tr>
		<td><br><a href="../bad_guys.php"><img src="../bad_guys_photo/11.png"></a></td>
	</tr>
</table>
</center>
</form>
</body>
</html>
