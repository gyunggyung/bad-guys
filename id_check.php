<?
 include 'connect.php';
 
$id = $HTTP_GET_VARS['id'];
$msg="사용 가능";
	

 
  $sql="select * from user where id='$id'";
    $result=mysql_query($sql);
    $num_record=mysql_num_rows($result);
     if($num_record)
     {
         $msg="이미 사용중인 아이디 입니다.";
      }
   echo " <html><head>
                <script name=javascript>
 
                if('$msg' != '') {
                        self.window.alert('$msg');
                }
 
                this.close();
 
                </script>
                </head>
                </html> ";



 ?>
