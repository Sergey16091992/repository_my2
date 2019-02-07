<!DOCTYPE html>
<html lang="en">
<head>
<meta content="text/html; charset=windows-1251" http-equiv="Content-Type" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
<?
$a1=array(1,2,-3,4,5,6,-7,8,-9,10);
print_r($a1);

$a2=array_filter($a1, function($x){return $x>=0;});
print_r($a2);



  

$a3=array("Ivan", "Илья", "Дима", "Иаша");
print_r($a3);

$a4=array_filter($a3,function($x){return $x[0]=='I';});
print_r($a4);







$a5=array("Ivanow", "Ильяш", "Ди", "Иаша");
print_r($a5);

$a6=array_filter($a5,function($x){return strlen($x)==4;});
print_r($a6); 





$a11=array(1,2,3,4,5,6,7,7,8,9,10);
print_r($a11);

array_walk($a11,function($item,$key){echo "$key=>$item<br>";});



$a12=array(1,2,3,4,5,6,7,8,9,10);
print_r($a12);

    array_walk($a12, function(&$item,$key,$sp){
        $item="$key $sp $item";
    },"=");
print_r($a12);
?>
</pre>
</body>
</html>


