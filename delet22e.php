<html>
 
<head>
<meta http-equiv="content-type" content="text/html:charset=UTF-8">
<title>글 삭제</title>
<STYLE TYPE="text/css">
BODY,TD,SELECT,input,DIV,form,TEXTAREA,center,option,pre,blockquote {font-family:굴림;font-size:9pt;color:#555555;}
A:link    {color:black;text-decoration:none;}
A:visited {color:black;text-decoration:none;}
A:active  {color:black;text-decoration:none;}
A:hover  {color:gray;text-decoration:none;}
</STYLE>
 
<script language="javascript">
 
function check_submit() {

                document.myForm.action = "delete_ok.php";
                document.myForm.submit();
        
}
 
</script>
 
 
</head>
 
<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
<form name="myForm" method="post">
<input type="hidden" name="page" value="<? echo $page; ?>">
<input type="hidden" name="number" value="<? echo $number; ?>">
<input type="hidden" name="id" value="<? echo $_COOKIE['user']; ?>">


<p align="center">[<a href="javascript:check_submit();">삭제</a>] [<a href="javascript:history.go(-1)">취소</a>]</p>
</form>
</body>
 
</html>