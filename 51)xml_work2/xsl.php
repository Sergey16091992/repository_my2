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
include "function.php";

function get_array_from_xml($str){
    // $matches=null;
    preg_match_all('/<post>(.*?)(<msg>(.*?)<\/msg>)(.*?)(<nik>(.*?)<\/nik>)(.*?)<\/post>/ius',$str,$matches);
     
    print_r($matches) ;    
    $msg=$matches[3];
    $nik=$matches[6];
    
    $array=array();
    foreach ($msg as $key => $value){
        $array[]=array("msg" => $msg[$key],"nik" => $nik[$key]);
    }
    return $array;   
}

echo file_get_contents("x2.xml");
$arr=get_array_from_xml(file_get_contents("x2.xml"));
print_r($arr);

$str=put_array_to_xml($arr);
echo $str;

// file_put_contents("x2.xml",$str);
?>
</pre>
</body>
</html>
