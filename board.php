<?session_start()?>
<?
if(! (isset($_SESSION['user_id']) && isset($_SESSION['user_pw']) )){
 echo("
	<script>
	window.alert('로그인을 해야 이용가능합니다');
	history.go(-1);
	</script>
");
}
?>
<?

 include 'connect.php';
 
$tablename="bbs"; //테이블 이름
if($HTTP_GET_VARS['page'] == "") $page = 1; //페이지 번호가 없으면 1
else $page=$HTTP_GET_VARS['page'];
$list_num = 15; //한 페이지에 보여줄 목록 갯수
$page_num = 10; //한 화면에 보여줄 페이지 링크(묶음) 갯수
$offset = $list_num*($page-1); //한 페이지의 시작 글 번호(listnum 수만큼 나누었을 때 시작하는 글의 번호)
 
//전체 글 수를 구합니다.
$query="select count(*) from $tablename"; 
$result=mysql_query($query) or die (mysql_error());
$row=mysql_fetch_row($result); //위 결과 값을 하나하나 배열로 저장
$total_no=$row[0]; //배열의 첫번째 요소의 값, 즉 테이블의 전체 글 수를 저장
 
//전체 페이지 수와 현재 글 번호를 구합니다.
$total_page=ceil($total_no/$list_num); 
$cur_num=$total_no - $list_num*($page-1); //현재 글번호
 
//bbs테이블에서 목록을 가져옴
$query="select * from $tablename order by number desc limit $offset, $list_num"; // SQL 쿼리문
$result=mysql_query($query) or die (mysql_error()); // 쿼리문을 실행 결과

?>
 
<html>
<head>
<meta http-equiv=content-type content=text/html; charset=UTF-8>
<title>글목록보기</title>
<STYLE TYPE=text/css>
BODY,TD,SELECT,input,DIV,form,TEXTAREA,center,option,pre,blockquote {font-family:굴림;font-size:9pt;color:#555555;}
A:link    {color:black;text-decoration:none;}
A:visited {color:black;text-decoration:none;}
A:active  {color:black;text-decoration:none;}
A:hover  {color:gray;text-decoration:none;}
</STYLE>
</head>
<body>
<table border=1 cellspacing=0 width=746 bordercolordark=white bordercolorlight=#999999>
    <tr>
        <td width=30 bgcolor=#CCCCCC>
            <p align=center>NO.</p>
        </td>
        <td bgcolor=#CCCCCC width=490>
            <p align=center>나쁜녀석들 게시판</p>
        </td>
        <td width=60 bgcolor=#CCCCCC>
            <p align=center>아이디</p>
        </td>
        <td width=70 bgcolor=#CCCCCC>
            <p align=center>날짜</p>
        </td>
        <td width=30 bgcolor=#CCCCCC>
            <p align=center>HIT</p>
        </td>
    </tr>
 
<?
while ($array=mysql_fetch_array($result)) {
 
        $date=date("Y/m/d", $array[writetime]); //글쓴시각을 Y/m/d 형식
 
        echo "
    <tr>
        <td width=30>
            <p align=center>$cur_num </p>
        </td>
        <td width=460>
            <p><a href='board_view.php?page=$page&number=$array[number]'>$array[subject]</a>
        </td>
        <td width=60>
            <p align=center>$array[id]</p>
        </td>
        <td width=70>
            <p align=center>$date</p>
        </td>
        <td width=30>
            <p align=center>$array[count]</p>
        </td>
    </tr> ";
 
        $cur_num --;
 
}
?>
    <tr>
        <td width=100% colspan=5>
 
<?
//여기서부터 각종 페이지 링크
$total_block=ceil($total_page/$page_num);
$block=ceil($page/$page_num); //현재 블록
 
$first=($block-1)*$page_num; // 페이지 블록이 시작하는 첫 페이지
$last=$block*$page_num; //페이지 블록의 끝 페이지
 
if($block >= $total_block) {
        $last=$total_page;
}
 
echo "
                             <br><p align=center>";
//[처음][*개앞]

if($block > 1) {
        $prev=$first-1;
        echo "<a href='board.php?page=1'>[처음 ]</a>&nbsp; ";
        echo "<a href='board.php?page=$prev'>[$page_num 개 앞]</a>";
}
 
//[이전]
if($page > 1) {
        $go_page=$page-1;
        echo "  <a href='board.php?page=$go_page'>[이전 ]</a>&nbsp;       ";
}
 
//페이지 링크
for ($page_link=$first+1;$page_link<=$last;$page_link++) {
        if($page_link==$page) {
                echo "<font color=green><b>$page_link</b></font>";
        }
        else {
                echo "<a href='board.php?page=$page_link'>[$page_link]</a>";
        }
}
 
//[다음]
if($total_page > $page) {
        $go_page=$page+1;
        echo "&nbsp;<a href='board.php?page=$go_page'>[다음]</a>";
		
}
 
//[*개뒤][마지막]
if($block < $total_block) {
        $next=$last+1;
        echo "<a href='board.php?page=$netxt'>[$page_num 개 뒤]</a>&nbsp;";
        echo "<a href='board.php?page=$total_page'>[마지막]</a></p>";
}
 
?>
        </td>
    </tr>
    <tr>
        <td width=100% height=100 colspan=5>
            <p align=center><a href='board_write.php'>[글쓰기]</a></p>
        </td>
    </tr>
</table>
</body>
</html>