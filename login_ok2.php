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
//�α��� ����
echo "�α� ����!!";
  $_SESSION['user_id']=$id;
  $_SESSION['user_pw']=$pw;
    
 // $_COOKIE['user']=$id;


 ?> <script>location.href="../bad_guys.php";</script>
<?

  }


else
{
//echo $sql;
echo("
	<script >
	window.alert('���̵� ��й�ȣ�� Ʋ�Ƚ��ϴ�.');
	
	</script>
");
?>

<script>location.href="../login2.php";</script>
<?
}

?>
