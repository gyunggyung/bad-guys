<?session_start();
session_destroy();?>

<html>
<head>
<script language="javascript">
function page_load()
{
	
	var thispage=top.location.pathname;
	if(top.location.pathname=="/logout.php"){
		top.location.href="../bad_guys.php";
	}else{
		top.location.reload();}
}
</script>
<script>page_load();</script>
</head>




