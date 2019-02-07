<?
$msg="hellow";

$test=function()use($msg){
    echo $msg;
};

$msg="bye";
$test();

echo "<br>";

$msg1="hellow";

$test2=function()use(&$msg1){
    echo $msg1;
};

$msg1="bye";
$test2();

?>