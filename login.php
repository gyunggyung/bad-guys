<?

?>
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
                 document.myForm.action = "login_ok.php";
                 document.myForm.submit();
       }
         
 }
 
  function submit() {
                      document.myForm.action = "login_ok.php";
                 document.myForm.submit();

 }
 
 </script>
 
</HEAD>


<body>
<form name='myForm' method='post'>
<table name="frm" align="center" valign="top" border="0" width="390" height="600">
            <p><font face="맑은 고딕"><b>로그인</b></font></p>
           <p align="left"> <input type="text"  name='id' placeholder="아이디" maxlength="12" style="font-size:15; text-align:center; width:300; height:50; margin-left:70;">
            <p align="left"> <input type="password" name='pw' placeholder="비밀번호" maxlength="15" style="font-size:15; text-align:center; width:300; height:50; margin-left:70; margin-top:5;"></p>
            <p align="left"><input type="button" value="로그인" style="width:300; height:50; margin-left:70;" onclick="javascript: check_submit();"></p>
            
</form>
</p>
</body>
</html>