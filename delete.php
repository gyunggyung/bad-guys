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
//db ����
include 'connect.php';
 
//����
$page=$HTTP_GET_VARS['page'];
$number=$HTTP_GET_VARS['number'];
$id=$_COOKIE['user'];
//$password = addslashes($password);
$tablename="bbs"; //���̺� �̸�
 
//���̵�� ��� Ȯ��
$sql = "select number from $tablename where number='$number' and id='$id'";
$result = mysql_query($sql) or die (mysql_error());
 
$msg = "������ �����ϴ�. ";
 
if(mysql_num_rows($result)) {  
        //����
        $sql = "delete from $tablename where number=$number";
        mysql_query($sql) or die (mysql_error());
        $msg = "�����Ͽ����ϴ�.";
}
 
//������� �̵�
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