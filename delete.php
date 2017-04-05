<html>
<head>
</head>
<body>
<input type="hidden" name="page" value="<? echo $page; ?>">
<input type="hidden" name="number" value="<? echo $number; ?>">
<input type="hidden" name="id" value="<? echo $_COOKIE['user']; ?>">
</body>
</html>
<?
//db 연결
include 'connect.php';
 
//변수
$page=$HTTP_GET_VARS['page'];
$number=$HTTP_GET_VARS['number'];
$id=$_COOKIE['user'];
//$password = addslashes($password);
$tablename="bbs"; //테이블 이름
 
//아이디와 비번 확인
$sql = "select number from $tablename where number='$number' and id='$id'";
$result = mysql_query($sql) or die (mysql_error());
 
$msg = "권한이 없습니다. ";
 
if(mysql_num_rows($result)) {  
        //삭제
        $sql = "delete from $tablename where number=$number";
        mysql_query($sql) or die (mysql_error());
        $msg = "삭제하였습니다.";
}
 
//목록으로 이동
echo " <html><head>
                <script name=javascript>
 
                if('$msg' != '') {
                        self.window.alert('$msg');
                }
 
                location.href='board.php?page=$page';
 
                </script>
                </head>
                </html> ";
?>