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
<h1>array_product1</h1>
<?
include "fun_discribes.php";
$arr1=array(1,2,5,3,7,8,2,5,4);//67200
print_r($arr1);
echo "my_array_product= ";
        $my_time_start=microtime(1);
            print_r(my_array_product($arr1));
        $my_time_end=microtime(1);   
echo "<br>echo array_product= ";
        $time_start=microtime(1);
            print_r(array_product($arr1));
        $time_end=microtime(1); 

            echo "<br>Опирация my_array_product заняла ".($time1=$my_time_end-$my_time_start)." милисекунд<br>";
            echo "Опирация array_product заняла ".($time2=$time_end-$time_start)." милисекунд<br>"; 
    $diftime=($time1/$time2);
    echo ($diftime*100)."%";



// $time_start1=microtime(1);
// // echo "for ".sum_My_for($arr2)."<br>";
// $time_end1=microtime(1);



// //foreache
// $time_start2=microtime(1);
// echo "foreache ".sum_My_foreach($arr2)."<br>";
// $time_end2=microtime(1);




// echo "Опирация for заняла ".($time1=$time_end1-$time_start1)." милисекунд<br>";
// echo "Опирация foreache заняла ".($time2=$time_end2-$time_start2)." милисекунд<br>";


// $diftime=($time2/$time1);
// echo ($diftime*100)."%";

?>

<h1>my_array_sum</h1>
<?

$arr2=array(1,2,5,3,7,8,2,5,4);//37
print_r($arr2);
echo "my_array_sum= ";
print_r(my_array_sum($arr2));
echo "<br>array_sum= ";
print_r(array_sum($arr2));






// // for
// $time_start1=microtime(1);
// echo "for ".mul_My_for($arr2)."<br>";
// $time_end1=microtime(1);



// //foreache
// $time_start2=microtime(1);
// echo "foreache ".mul_My_foreach($arr2)."<br>";
// $time_end2=microtime(1);




// echo "Опирация for заняла ".($time1=$time_end1-$time_start1)." милисекунд<br>";
// echo "Опирация foreache заняла ".($time2=$time_end2-$time_start2)." милисекунд<br>";


// $diftime=($time2/$time1);
// echo ($diftime*100)."%";
?>




<h1>my_array_search</h1>
<?
$arr3=array(8,2,5,3,7);
print_r($arr3);
echo "my_array_search= <br>";
print_r(my_array_search($arr3,3,"Три"));
echo "<br>array_search= ";
print_r(array_search(5,$arr3));


?>
<h1>my_array_reverse</h2>
<?
$arr4=array(9,2,5,3,7);
print_r($arr4);
echo "my_array_reverse= <br>";
print_r(my_array_reverse($arr4));
echo "<br>array_reverse= <br>";
print_r(array_reverse($arr4));
?>

<h1>my_in_array</h1>
<?
$arr5=array(5,8,9,3,10,15);
print_r($arr5);
echo "my_in_array= ";
print_r(my_in_array($arr5,10));
echo "<br>in_array(true/false)= ";
print_r(in_array(10,$arr5));
?>

<h1>my_array_key_exists</h1>
<?
$arr6=array("Саша"=>"Александра",
            1=>"Вова",
            "Машина"=>7,
            "Привет"=>"Hellow");

print_r($arr6);
echo "my_array_key_exists= ";
print_r(my_array_key_exists($arr6,1));
echo "<br>array_key_exists(true/false)= ";
print_r(array_key_exists("Машина",$arr6));
?>

 <h2>my_array_flip</h2>
 <?
$arr7=array("one"=>1,
            "two"=>2,
             3=>"three",
            "fore"=>4,
             100=>200,
            "Ваня"=>"Иван");

print_r($arr7);
echo "my_array_flip= <br>";
print_r(my_array_flip($arr7)); 
echo "<br>array_flip= <br>";
print_r(array_flip($arr7));           

?>
 <h2>my_array_keys</h2>
 <?
$arr8=array("Динис"=>101,
            "two"=>"Иван",
             70=>"Green",
            "red"=>"rose",
             78=>"Green",
            "Ваня"=>"Иван",
            "re"=>101,
            "read"=>"Иван");

print_r($arr8);
echo "my_array_keys= <br>";
print_r(my_array_keys($arr8)); 
print_r(my_array_keys($arr8,"Иван")); 
echo "<br>array_flip= <br>";
print_r(array_keys($arr8)); 
print_r(array_keys($arr8,"Green"));             

?>
            
</pre>
</body>
</html>