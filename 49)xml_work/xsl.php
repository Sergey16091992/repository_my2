<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
<?php

$msg_html=$_POST["one"];
$nik_html=$_POST["two"];
$sp_html=$_POST["three"];

echo $msg_html;
echo $nik_html;
echo $sp_html;

file_put_contents("x.xml",file_get_contents("x.xml")."<post><msg>$msg_html</msg><nik>$nik_html</nik><sp>$sp_html</sp></post>");
$str = file_get_contents("x.xml");



function get_msg_and_milk_from_xml($str){
    $matches=null;
    preg_match_all('/<post>(.*?)(<msg>(.*?)<\/msg>)(.*?)(<nik>(.*?)<\/nik>)(.*?)(<sp>(.*?)<\/sp>)(.*?)<\/post>/ius',$str,$matches);

$msg=$matches[3];
$nik=$matches[6];
$sp=$matches[9];


    $array=array();
    foreach ($msg as $key=>$value){
        $array[]=array("msg"=>$msg[$key],"nik"=>$nik[$key],"sp"=>$sp[$key]);
    }
    return $array;
}

$post_array=(get_msg_and_milk_from_xml($str));

?>
</pre>

<table border=1>
<?php
foreach ($post_array as $value){
    echo "<tr><td>$value[msg]</td><td>$value[nik]</td><td>$value[sp]</td></tr>";
}
?>   
<table>   
    





<form action="xsl.php" method="POST">
        <textarea name="one" id="" cols="30" rows="10"></textarea><br>
            <input type="text" name="two"><br>
            <input type="text" name="three"><br>
            <input type="submit" value="Отправить">
        </textarea>
    </form>
</body>
</html>
