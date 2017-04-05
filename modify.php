<?

include 'connect.php';

$tablename="bbs"; //테이블 이름
$page=$HTTP_GET_VARS['page'];
$number=$HTTP_GET_VARS['number'];

$query = "select * from $tablename where number='$number'";
$result = mysql_query($query) or die (mysql_error());
$array = mysql_fetch_array($result);
 

$array[id] = stripslashes($array[id]);
$array[subject] = stripslashes($array[subject]);
$array[memo] = stripslashes($array[memo]);
 
//$array[subject] = $array[subject];
//$array[memo] = $array[memo];
 


?>
<html> 
<head>
<meta http-equiv="content-type" content="text/html:charset=UTF-8">
<title>나쁜녀석들 게시판</title>

 <STYLE TYPE="text/css">
BODY,TD,SELECT,input,DIV,form,TEXTAREA,center,option,pre,blockquote {font-family:굴림;font-size:9pt;color:#555555;}
A:link    {color:black;text-decoration:none;}
A:visited {color:black;text-decoration:none;}
A:active  {color:black;text-decoration:none;}
A:hover  {color:gray;text-decoration:none;}
</STYLE>
 <script language="javascript">
 
 function check_submit() {
         
			if (document.myForm.subject.value == "") {
                alert("제목을 입력해 주세요");
                document.myForm.subject.focus();
                 return;
                 
         } else if (document.myForm.memo.value == "") {
                 alert("내용을 입력해 주세요");
                 document.myForm.memo.focus();
                return;
                
        } else {
                 document.myForm.action = "modify_ok.php";
                 document.myForm.submit();
       }
         
 }

 
 </script>
</head>
 
<body bgcolor=white>
 
 
<br>
 
<form name='myForm' method='post' >
 
<input type=hidden name=page value='<? echo $page; ?>'>
<input type=hidden name=number value='<? echo $number; ?>'>
<input type=hidden name=id value='<? echo $_COOKIE['user']; ?>'>
<table border=0 cellspacing=1 cellpadding=0 width=670>
        <tr>
          <td align=center>
          <font color=green><b>나쁜녀석들 게시판</b></font>
          </td>
        </tr>
</table>
 
<table border=0 bgcolor=#CCCCF><tr><td>
 
<table border=0 width=670 cellspacing=0 cellpadding=0 bgcolor=#F0F0F0>
 
        <col width=100></col><col width=></col>
 
        <tr>
        <td colspan=2>
            <table border=0 cellspacing=0 cellpadding=0 width=100%>
                 <tr>
                 <td align=right><p align="left"> <font face="맑은 고딕" color="gray"><span style="font-size:15pt;  border-width:2;border-color:gray; border-style:dotted; padding-left:14; padding-top:3; padding-right:14; padding-bottom:3;"><b>작성자: <?echo $array[id];?></span></b></font></p></td>
                <td></td>                    
                 </tr>
                       </table>
          </td>
       </tr>
 
        <tr><td bgcolor=#CCCCF height=9 colspan=2></td></tr>
        
       
        <tr>
          <td align=right><b></b></td>
          <td> <input type=text name=subject size=87  maxlength=15 placeholder="제목을 입력해 주세요" value='<?echo $array[subject];?>' > </td>
      </tr>
 
       <tr><td bgcolor=white height=1 colspan=2></td></tr>

        <tr>
          <td align=right><b></b></td>
          <td valign=top>
         <textarea name=memo cols=85 rows=17 placeholder="내용을 입력해 주세요"><?echo $array[memo];?></textarea>
          </td>
        </tr>
 
</table>
 
<br>

<table border=0 width=670>
<tr><td>
<center>
<a href="javascript:check_submit();">수정</a> &nbsp;&nbsp;
<a href="board.php?page=<? echo $page ;  ?>">취소</a>
</center>
</td></tr>
</table>
</td></tr></table>
 
</form>
 
</body>
</html>