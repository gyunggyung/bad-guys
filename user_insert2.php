<html><head>
<?

 include 'connect.php';
 
$id = $_POST['id'];
$pw = $_POST['pw'];

 $check="select * from user where id='$id'";
    $result=mysql_query($check);
    $num_record=mysql_num_rows($result);
     if($num_record)
     {
?>
        <html><head>
 
  <script name=javascript>
	$msg="이미 존재하는 아이디 입니다.";
    if('$msg' != '') {
    self.window.alert($msg);
    }

     location.href='register.php';
 </script>
 </head>
 </html>
<?
      }
      else
      {
 $sql = "insert into user(id,pw)
 values('$id','$pw')";

 mysql_query($sql) or die (mysql_error());
?>
           <html><head>
 
  <script name=javascript>
	$msg="회원가입 완료!";
    if('$msg' != '') {
    self.window.alert($msg);
    }

     location.href='bad_guys.php';
 </script>
 </head>
 </html>
<?
       }

 



 ?>
 
