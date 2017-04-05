<?session_start();?>
<html> 
 <head>
 <title>나쁜녀석들 게시판</title>
 <script language="javascript">
 
 function check_submit() {
         
			if (document.myForm.subject.value == "") {
                alert("제목을 입력하세요");
                document.myForm.subject.focus();
                 return;
                 
         } else if (document.myForm.memo.value == "") {
                 alert("내용을 입력하세요");
                 document.myForm.memo.focus();
                return;
                
        } else {
                 document.myForm.action = "board_insert.php";
                 document.myForm.submit();
       }
         
 }
  function submit() {
                      document.myForm.action = "board_insert.php";
                 document.myForm.submit();

 }
 
 </script>
 </head>

<form name='myForm' method='post'>
 
<p align="left"> <font face="맑은 고딕" color="gray"><span style="font-size:15pt;  border-width:2;border-color:gray; border-style:dotted; padding-left:14; padding-top:3; padding-right:14; padding-bottom:3;"><b>ID: <?echo $_COOKIE['user']; ?></span></b></font></p>
<p align="center"><input type='text' name='subject' placeholder="제목을 입력해 주세요" size=49  maxlength=70></p>
<p align="center"><textarea name='memo' placeholder="내용을 입력해 주세요" cols=50 rows=20  maxlength=500></textarea></p>
<p align="left"><input type="button" value="글작성" style="width:365; height:50; margin-left:200;" onclick="javascript: check_submit();"></p>

</form>



</body>
</html>