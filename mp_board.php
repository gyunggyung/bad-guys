<?

 include 'connect.php';
//�Խ��� ��Ϻ��⿡ �ʿ��� ���� ���� �ʱⰪ�� �����մϴ�.
$tablename="bbs"; //���̺� �̸�
if($HTTP_GET_VARS['page'] == "") $page = 1; //������ ��ȣ�� ������ 1
else $page=$HTTP_GET_VARS['page'];
$list_num = 15; //�� �������� ������ ��� ����
$page_num = 10; //�� ȭ�鿡 ������ ������ ��ũ(����) ����
$offset = $list_num*($page-1); //�� �������� ���� �� ��ȣ(listnum ����ŭ �������� �� �����ϴ� ���� ��ȣ)
 
//��ü �� ���� ���մϴ�. (�������� ����Ͽ� ����� �迭�� �����ϴ� �Ϲ��� �� ���)
$query="select count(*) from $tablename"; // SQL �������� ���ڿ� ������ �ϴ� �����ϰ�
$result=mysql_query($query) or die (mysql_error()); // ���� �������� ������ �����Ͽ� ����� result�� ����
$row=mysql_fetch_row($result); //�� ��� ���� �ϳ��ϳ� �迭�� �����մϴ� .
$total_no=$row[0]; //�迭�� ù��° ����� ��, �� ���̺��� ��ü �� ���� �����մϴ�.
 
//��ü ������ ���� ���� �� ��ȣ�� ���մϴ�.
$total_page=ceil($total_no/$list_num); // ��ü�ۼ��� ��������ۼ��� ���� ���� �ø� ���� ���մϴ�.
$cur_num=$total_no - $list_num*($page-1); //���� �۹�ȣ
 
//bbs���̺��� ����� �����ɴϴ�. (���� ������ ��뿹�� ����մϴ� .)
$query="select * from $tablename order by number desc limit $offset, $list_num"; // SQL ������
$result=mysql_query($query) or die (mysql_error()); // �������� ���� ���
//���� ����� �ϳ��� �ҷ��� ���� HTML�� ��Ÿ���� ���� HTML �� �߰��� �����մϴ�.
?>
 
<html>
<head>
<meta http-equiv=content-type content=text/html; charset=euc-kr>

<title>�۸�Ϻ���</title>
<STYLE TYPE=text/css>
BODY,TD,SELECT,input,DIV,form,TEXTAREA,center,option,pre,blockquote {font-family:����;font-size:9pt;color:#555555;}
A:link    {color:black;text-decoration:none;}
A:visited {color:black;text-decoration:none;}
A:active  {color:black;text-decoration:none;}
A:hover  {color:gray;text-decoration:none;}
</STYLE>
</head>
<body>
<table border=0 cellspacing=1 width=460 bordercolordark=white bordercolorlight=#999999>
    <tr>
        <td width=60 bgcolor=#CCCCCC>
            <p align=center>NO.</p>
        </td>
        <td bgcolor=#CCCCCC width=400>
            <p align=center>���۳༮�� �Խ���</p>
        </td>
        <td width=90 bgcolor=#CCCCCC>
            <p align=center>id</p>
        </td>
        
        <td width=30 bgcolor=#CCCCCC>
            <p align=center>HIT</p>
        </td>
    </tr>
 
<?
while ($array=mysql_fetch_array($result)) {
 
        $date=date("Y/m/d", $array[writetime]); //�۾��ð��� Y/m/d ���Ŀ� �°� ���ڿ��� �ٲߴϴ� .
 
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
        
        <td width=30>
            <p align=center>$array[count]</p>
        </td>
    </tr> ";
 
        $cur_num --;
 
}
?>
    
</table>
</body>
</html>