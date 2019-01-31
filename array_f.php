<pre>
<?php
function arr_top_to_bottom($arr){
    for($k=0;$k<count($arr);$k++){
        for($i=0;$i<count($arr)-1;$i++){
            if($arr[$i]<$arr[$i+1]){
                $buf=$arr[$i+1];
                $arr[$i+1]=$arr[$i];
                $arr[$i]=$buf;
            }
        }
    } 
    return $arr;
}


$a1=array(232,153,634,440,114,900,160,400,736,377,879);
print_r($a1);

//своя функция
$time_start1=microtime(1);
for ($i=0; $i <1000; $i++) { 
    arr_top_to_bottom($a1);
}
$time_end1=microtime(1);
print_r(arr_top_to_bottom($a1));
echo "Опирация заняла ".($time1=$time_end1-$time_start1)." милисекунд<br>";


//sort
$time_start2=microtime(1);
for ($i=0; $i <1000; $i++) { 
    sort($a1);
}
$time_end2=microtime(1);
echo "Опирация заняла ".($time2=$time_end2-$time_start2)." милисекунд<br>";


echo $time1."<br>";
echo $time2."<br>";
$diftime=($time1/$time2);
echo ($diftime*100)."%";



?>
</pre>