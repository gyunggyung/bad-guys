<?session_start();?>
<html><head>
<?

 include 'connect.php';
 
 $id = $_COOKIE['user'];
 
 $subject = iconv("euc-kr", "utf-8",$_POST['subject']);
 $memo = iconv("euc-kr", "utf-8",$_POST['memo']);
 
 $writetime = time();
 $ip = getenv("REMOTE_ADDR");
 $count = 0;


 $sql = "insert into bbs(number,id,subject,memo,count,ip,writetime)
 values('','$id','$subject','$memo',$count,'$ip','$writetime')";

 mysql_query($sql) or die (mysql_error());
 

 ?>
 
 <html><head>
 <meta http-equiv="content-type" content="text/html:charset=UTF-8">
 <script name=javascript>
	$msg="게시글을 등록했습니다.";
    if('$msg' != '') {
    self.window.alert($msg);
    }

     location.href='board.php?';
 </script>
 </head>
 </html>
 