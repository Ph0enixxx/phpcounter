<?php
#counter
error_reporting(0);
if(!file_exists('./num.txt'))file_put_contents('./num.txt', '1');
$num=file_get_contents('./num.txt');
if(!$_COOKIE['aaa'])
	{
		setcookie('aaa','a',time()+3600*24);
		
		(int)$num++;
		file_put_contents('./num.txt',$num);
	}
echo $num;
?>