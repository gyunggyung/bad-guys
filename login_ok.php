<?session_start();

 include 'connect.php';
 
 $id = $_POST['id'];
 $pw = $_POST['pw'];
 $sql = "select * FROM user where id='$id' AND pw='$pw'";
 //$sql = "select * FROM user WHERE id=" + $id + " and pw= '" + $pw + "'";
 $result = mysql_query($sql);
 $row = mysql_fetch_array($result);
// if ($id == $row['id'] && $pw == $row['pw']) {
if($row){
//로그인 성공
echo "로긴 성공!!";
  $_SESSION['user_id']=$id;
  $_SESSION['user_pw']=$pw;
    
 // $_COOKIE['user']=$id;

 ?><script>top.location.reload();</script><?
  
  }


else
{
//echo $sql;
echo("

	<script>
	window.alert('아이디나 비밀번호가 틀렸습니다.');
	
	</script>
");
?>

<script>location.href="../login.php";</script>

<?
}

?>
