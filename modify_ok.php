<?
//db 연결 부분입니다. 
 include 'connect.php';
//수정폼(modify.php)
//$name = $_POST['name']; 
//$password = addslashes($password); 
//$password=$_POST['password'];
$id=$_POST['id'];
$subject = $_POST['subject']; 
$memo = $_POST['memo']; 
$page=$_POST['page'];
 $number=$_POST['number'];

$tablename="bbs"; //테이블 이름
$writetime = time(); 
//$ip = getenv("REMOTE_ADDR"); 

//아이디가 맞는지 확인
$sql = "select number from $tablename where number='$number' and id='$id'";

$result = mysql_query($sql) or die (mysql_error());
 
if(mysql_num_rows($result)) {  
        //수정한 내용을 UPDATE
        $sql = "update $tablename set
                        id='$id', 
                       subject='$subject',memo='$memo' where number=$number"; 
        mysql_query($sql) or die (mysql_error()); 
        $msg = "수정을 하였습니다.";
		
		//$page=$HTTP_GET_VARS['page'];
        echo " <html><head>
                <script name=javascript>
 
                if('$msg' != '') {
                        self.window.alert('$msg');
                }
 
                location.href='board_view.php?page=$page&number=$number';
 
                </script>
                </head>
                </html> ";
 
} else {
        $msg = "권한이 없습니다.";
        echo " <html><head>
                <script name=javascript>
 
                if('$msg' != '') {
                        self.window.alert('$msg');
                }
 
                history.go(-1);
 
                </script>
                </head>
                </html> ";

}
 
 
?>
