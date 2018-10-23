<?
$arr = ["localhost/dddd", "sadfsaf"];
$str = 'a:2:{i:0;s:14:"dd.com/dddd";i:1;s:7:"sadfsaf";}';

$arr = unserialize($str);

print_r($arr);


?>