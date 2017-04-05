<?

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>나쁜녀석들-회원가입</TITLE>
 <script language="javascript">
 function page_load()
{
	
	var thispage=top.location.pathname;
	if(top.location.pathname!="/bad_guys.php"){
		top.location.href="../bad_guys.php?load=2";
	
		}
}

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
                 document.myForm.action = "user_insert.php";
                 document.myForm.submit();
       }
         
 }
 function check_id(){
  window.open("id_check.php?id=" + document.myForm.id.value,
"아이디 중복확인","left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
}
  function submit() {
                      document.myForm.action = "user_insert.php";
                 document.myForm.submit();

 }
 
 </script>
 <script>page_load();</script>
</HEAD>
<body>
<form name='myForm' method='post'>
<table name="frm" align="center" valign="top" border="0" width="390" height="600">
            <p><font face="맑은 고딕"><b>회원가입</b></font></p>
           <p align="left"> <input type="text"  name='id' placeholder="아이디" maxlength="12" style="font-size:15; text-align:center; width:300; height:50; margin-left:70; border:2px solid green;">
	<input type="button" value="중복체크" onclick="javascript:check_id();" style="text-align:center; height:45; background-color:white; font-size:12; font-family:맑은 고딕;" ></p>
            <p align="left"> <input type="password" name='pw' placeholder="비밀번호" maxlength="15" style="font-size:15; text-align:center; width:300; height:50; margin-left:70; margin-top:5; border:2px solid green;"></p>
            <p align="left"><input type="button" value="회원가입" style="width:300; height:50; margin-left:70;;" onclick="javascript: check_submit();"></p>
            
</form>
</p>
</body>
</html>