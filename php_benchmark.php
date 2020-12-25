<?php
#mb_language("ja");
#mb_internal_encoding("UTF-8");
error_reporting(E_ALL & ~E_NOTICE);

#$times = 100000000;
$times  = 1000000;
#$times = 10;
#echo "${times}回ループします\n";
echo "loop ${times} times\n";

$str = array_merge ( range ( 'a', 'z' ), range ( '0', '9' ), range ( 'A', 'Z' ) );
//var_dump($str);

$starttime = microtime(TRUE);
$startmsec = explode('.', $starttime);
echo date("i:s",$starttime) . "." . $startmsec[1] . "\n";

$count = 0;
while ( $count < $times ) {
	$r_str = null;
	for($i = 0; $i < 10; $i ++) {
		//$r_str .= $str [rand ( 0, count ( $str ) )];
		$rand = rand ( 0, count ( $str ) ) ;
		$index = $rand >= 1 ? $rand - 1 : 0;
		$r_str .= $str [$index];
	}
	$count ++;
}

$endtime = microtime(TRUE);
$endmsec = explode('.', $endtime);
echo date("i:s",$endtime) . "." . $endmsec[1] . "\n";

$margin = $endtime - $starttime;
$marginmsec = explode('.', $margin);
echo date("i:s",$margin) . "." . $marginmsec[1] . "\n";
