<?php

/* class car{
	public  $name;
	public  $spleed;
	
	function void(){
		return "��������";
	}
	function run(){
		return "huaer������";
	}
}

$p=new car();
$r=new car();
$r->spleed="�ٶ�";
$p->name="���";
echo $p->name.$p->void();
echo  $r->spleed.$r->run(); */
/* echo date("Y-m-d H:i:s" , time()+8*60*60 );  */
echo date('Y-m-d H:i:s',strtotime("-1 day")+8*60*60);


/* date_default_timezone_set('PRC');
 
$startdate = "2014-10-13 07:40:00";
$enddate = time();

$cha = $enddate -strtotime($startdate);

$minute=floor($cha/60);
$hour=floor($cha/60/60);
$day=floor($cha/60/60/24);

if($minute<60){
	echo "�ѷ��� $minute ����";
} elseif($minute<24*60) {
echo "�ѷ��� $hour Сʱ";
	} else echo $startdate;
 */


?>