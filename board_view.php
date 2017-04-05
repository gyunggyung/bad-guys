<?session_start();?>
<?
 include 'connect.php';
//변수 설정
$tablename="bbs"; //테이블 이름
$page=$HTTP_GET_VARS['page'];
 $number=$HTTP_GET_VARS['number'];
//테이블에서 글을 가져옴
$query = "select * from $tablename where number='$number'"; // 글 번호를 가지고 조회를 합니다.
$result = mysql_query($query) or die (mysql_error());
$array = mysql_fetch_array($result);
 
//백슬래쉬 제거, 특수문자 변환(HTML용), 개행(<br>)처리 등
$array[id] = stripslashes($array[id]);
$array[subject] = stripslashes($array[subject]);
$array[memo] = stripslashes($array[memo]);
 
//$array[subject] = htmlspecialchars($array[subject]);
//$array[memo] = htmlspecialchars($array[memo]);
 
//$array[memo] = nl2br($array[memo]);
// 조회수 카운터 증가
$query = "update $tablename set count = count + 1 where number='$number'";
mysql_query($query);
 
?>
 
<html>
<head>
<meta http-equiv="content-type" content="text/html:charset=euc-kr">
<title>PHP 게시판</title>
<STYLE TYPE="text/css">
BODY,TD,SELECT,input,DIV,form,TEXTAREA,center,option,pre,blockquote {font-family:굴림;font-size:9pt;color:#555555;}
A:link    {color:black;text-decoration:none;}
A:visited {color:black;text-decoration:none;}
A:active  {color:black;text-decoration:none;}
A:hover  {color:gray;text-decoration:none;}
</STYLE>
</head>
<body>
<table border=0 cellspacing=1 cellpadding="3" width=670 >
        <tr>
          <td align=center>
          </br>
          <font color=green><b>나쁜녀석들 게시판</b></font>
          </td>
        </tr>
    <tr>
          <td bgcolor="grey">
<table border=0 cellspacing=1 cellpadding=0 width=670 bgcolor="white">
        <tr>
          <td width="100">
            <p align="right"><b>제목 &nbsp;</b></p>
 
          </td>
          <td width="400">
                        <p><? echo $array[subject]; ?></p>
          </td>
          <td width="100">
                        <p align="right"><b>조회수 &nbsp;</b></p>
          </td>
          <td>
                        <p><? echo $array[count]; ?></p>
          </td>
        </tr>
                <tr>
          <td width="100">
                        <p align="right"><b>작성자 &nbsp;</b></p>
          </td>
          <td colspan="3">
                        <p><? echo $array[id]; ?></p>
						
          </td>
                </tr>
        <tr>
          <td width="100">
                        <p align="right"><b><h> <hr size=5 color=grey><b><br><br><b><br><br>&nbsp;</b></p>
          </td>
          <td colspan="3">
                        <p><? echo $array[memo]; ?></p>
          </td>
        </tr>
</table>
            <p align="center"><a href="board.php?page=<? echo $page; ?>">[목록]</a> &nbsp;<a href="board_write.php">[쓰기]</a> &nbsp;<a href="modify.php?number=<? echo $number; ?>&page=<? echo $page; ?>">[수정]</a> &nbsp;<a href="delete.php?number=<? echo $number; ?>&page=<? echo $page; ?>">[삭제]</a></p>
          </td>
    </tr>
</table>
</body>
</html>