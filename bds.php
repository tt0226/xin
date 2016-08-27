<?php

/* class car{
	public  $name;
	public  $spleed;
	
	function void(){
		return "汽车在跑";
	}
	function run(){
		return "huaer车在跑";
	}
}

$p=new car();
$r=new car();
$r->spleed="速度";
$p->name="你好";
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
	echo "已发布 $minute 分钟";
} elseif($minute<24*60) {
echo "已发布 $hour 小时";
	} else echo $startdate;
 */


?>