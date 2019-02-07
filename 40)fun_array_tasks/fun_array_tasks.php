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
<?////////////////////////////////////////////////////////////////////
include "fun_discribes.php";
$arr1=array(1,2,5,3,7,8,2,5,4);//67200
print_r($arr1);

echo "my_array_product= ";
    print_r(my_array_product($arr1));
echo "<br>array_product= "; 
    print_r(array_product($arr1)); 
      
                $my_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        my_array_product($arr1);
                    }
                $my_time1=microtime(1)-$my_time_start;
          
                $f_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        array_product($arr1);
                    }                 
                $f_time1=microtime(1)-$f_time_start;  
        
print_r(time_difference($my_time1,$f_time1));
?>

<h1>my_array_sum</h1>
<?////////////////////////////////////////////////////////////////////
$arr2=array(1,2,5,3,7,8,2,5,4);//37
print_r($arr2);
echo "my_array_sum= ";
    print_r(my_array_sum($arr2));
echo "<br>array_sum= ";
    print_r(array_sum($arr2));

                $my_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        my_array_sum($arr2);
                    }
                $my_time2=microtime(1)-$my_time_start;

                $f_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        array_sum($arr2);
                    }                 
                $f_time2=microtime(1)-$f_time_start;  

print_r(time_difference($my_time2,$f_time2));
<<<<<<< HEAD
echo "<br>";
// ------------------------------------------------------------------------
echo "///////////////////////////////////////////////////////////";
function speed_test($fun,$arg,$n=1000000){
    $time1=microtime(true);
        for ($i=0; $i < $n; $i++) { 
            $fun($arg);
        }
    $time2=microtime(true);

    return $time2-$time1;
}

speed_test(my_array_sum,$arr2);
echo "<br>";
speed_test(array_sum,$arr2);
echo "///////////////////////////////////////////////////////////";
// ------------------------------------------------------------------------
=======
>>>>>>> 8b8aee2937bcc1e1d21956cad001ff47e28e03b9
?>


<h1>my_array_search</h1>
<?////////////////////////////////////////////////////////////////////
$arr3=array(8,2,5,3,7);
print_r($arr3);
echo "my_array_search= <br>";
    print_r(my_array_search($arr3,3,"Три"));
echo "<br>array_search= ";
    print_r(array_search(5,$arr3));

                $my_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        my_array_search($arr3,3,"Три");
                    }
                $my_time3=microtime(1)-$my_time_start;

                $f_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        array_search(3,$arr3);
                    }                 
                $f_time3=microtime(1)-$f_time_start;  

print_r(time_difference($my_time3,$f_time3));
?>
<h1>my_array_reverse</h2>
<?////////////////////////////////////////////////////////////////////
$arr4=array(9,2,5,3,7);
print_r($arr4);
echo "my_array_reverse= <br>";
    print_r(my_array_reverse($arr4));
echo "<br>array_reverse= <br>";
    print_r(array_reverse($arr4));

                $my_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        my_array_reverse($arr4);
                    }
                $my_time4=microtime(1)-$my_time_start;

                $f_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        array_reverse($arr4);
                    }                 
                $f_time4=microtime(1)-$f_time_start;  

print_r(time_difference($my_time4,$f_time4));
?>

<h1>my_in_array</h1>
<?////////////////////////////////////////////////////////////////////
$arr5=array(5,8,9,3,10,15);
print_r($arr5);
echo "my_in_array= ";
    print_r(my_in_array($arr5,10));
echo "<br>in_array(true/false)= ";
    print_r(in_array(10,$arr5));

                $my_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        my_in_array($arr5,10);
                    }
                $my_time5=microtime(1)-$my_time_start;

                $f_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        in_array(10,$arr5);
                    }                 
                $f_time5=microtime(1)-$f_time_start;  

print_r(time_difference($my_time5,$f_time5));
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

                $my_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        my_array_key_exists($arr6,1);
                    }
                $my_time6=microtime(1)-$my_time_start;

                $f_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        array_key_exists("Машина",$arr6);
                    }                 
                $f_time6=microtime(1)-$f_time_start;  

print_r(time_difference($my_time6,$f_time6));
?>

 <h2>my_array_flip</h2>
<?////////////////////////////////////////////////////////////////////
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

                $my_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        my_array_flip($arr7);
                    }
                $my_time7=microtime(1)-$my_time_start;

                $f_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        array_flip($arr7);
                    }                 
                $f_time7=microtime(1)-$f_time_start;  

print_r(time_difference($my_time7,$f_time7));

?>
 <h2>my_array_keys</h2>
<?////////////////////////////////////////////////////////////////////
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

                $my_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        my_array_keys($arr8);
                    }
                $my_time8=microtime(1)-$my_time_start;

                $f_time_start=microtime(1);
                    for ($i=0; $i <10000; $i++) {
                        array_keys($arr8);
                    }                 
                $f_time8=microtime(1)-$f_time_start;  


                $my_time_start=microtime(1);
                for ($i=0; $i <10000; $i++) {
                    my_array_keys($arr8,"Иван");
                }
                $my_time8_1=microtime(1)-$my_time_start;

                $f_time_start=microtime(1);
                for ($i=0; $i <10000; $i++) {
                    array_keys($arr8,"Green");
                }                 
                $f_time8_1=microtime(1)-$f_time_start; 

echo "С одним параметром";
print_r(time_difference($my_time8,$f_time8));
echo "<br><br>С двумя параметром";
print_r(time_difference($my_time8_1,$f_time8_1));
?>
            
</pre>
</body>
</html>