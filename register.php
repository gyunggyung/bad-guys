<?

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>���۳༮��-ȸ������</TITLE>
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
                 alert("������ ���̵� �Է����ּ���.");
                document.myForm.id.focus();
                 return;
        } else if (document.myForm.pw.value=="") {
                 alert("������ �н����带 �Է����ּ���.");
                document.myForm.pw.focus();
                 return;
        
        } else {
                 document.myForm.action = "user_insert.php";
                 document.myForm.submit();
       }
         
 }
 function check_id(){
  window.open("id_check.php?id=" + document.myForm.id.value,
"���̵� �ߺ�Ȯ��","left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
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
            <p><font face="���� ���"><b>ȸ������</b></font></p>
           <p align="left"> <input type="text"  name='id' placeholder="���̵�" maxlength="12" style="font-size:15; text-align:center; width:300; height:50; margin-left:70; border:2px solid green;">
	<input type="button" value="�ߺ�üũ" onclick="javascript:check_id();" style="text-align:center; height:45; background-color:white; font-size:12; font-family:���� ���;" ></p>
            <p align="left"> <input type="password" name='pw' placeholder="��й�ȣ" maxlength="15" style="font-size:15; text-align:center; width:300; height:50; margin-left:70; margin-top:5; border:2px solid green;"></p>
            <p align="left"><input type="button" value="ȸ������" style="width:300; height:50; margin-left:70;;" onclick="javascript: check_submit();"></p>
            
</form>
</p>
</body>
</html>