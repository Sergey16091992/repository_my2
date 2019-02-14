<?
include "fun_discribes.php";

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
echo "<br>";




$arr2=array(1,2,5,3,7,8,2,5,4);//37
echo "///////////////////////////////////////////////////////////<br>";
function speed_test($fun,$arg,$n=10000){
    $time1=microtime(true);
        for ($i=0; $i < $n; $i++) { 
            $fun($arg);
        }
    $time2=microtime(true);

    return $time2-$time1;
}

// my_array_sum($arr2);


echo speed_test("my_array_sum",$arr2);
echo "<br>";
echo speed_test("array_sum",$arr2);
echo "///////////////////////////////////////////////////////////<br>";

echo "///////////////////////////////////////////////////////////<br>";
function speed_test1($fun1,$arg1,$fun2,$arg2,$n=10000){
    $time1=microtime(true);
        for ($i=0; $i < $n; $i++) { 
            $fun1($arg1);
        }
    $time2=microtime(true);

    $t1=$time2-$time1;


    $time1=microtime(true);
        for ($i=0; $i < $n; $i++){ 
            $fun2($arg2);
        }
    $time2=microtime(true);

    $t2=$time2-$time1;

    $dif=($t1/$t2)*100;

    return array("dif"=>$dif, "t1"=>$t1,"t2"=>$t2);
}

// my_array_sum($arr2);


// echo speed_test("my_array_sum",$arr2);
echo "<br>";



print_r (speed_test1("array_sum",$arr2,"my_array_sum",$arr2));
$arr=speed_test1("array_sum",$arr2,"my_array_sum",$arr2);
echo "<br>";
echo $arr['dif'];
// echo "////////////////////////////".$arr['dif']."///////////////////////////////<br>";
?>


