<?
$a=file_get_contents("taskReg.html");
// echo $a;

$a1=preg_match_all('/<.+?>/iu',$a,$b1);
echo $a1;
?>