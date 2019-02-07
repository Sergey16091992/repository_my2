<pre>
<h1>Сумма и производительность</h1>
<?

$arr2=array(1,2,5,3,7,8,2,5,4);//37
function sum_My_foreach($arr2){
    $sum=0;
    foreach ($arr2 as $value) {        
        $sum=$sum+$value;       
    }    

    return $sum;
}



function sum_My_for($arr2){
    $sum=0;
    for ($i=0; $i <count($arr2) ; $i++) { 
        echo $i." - ".$arr2[$i]."<br>"; 
        $sum=$sum+$arr2[$i];
    }

    return $sum;
}

// for
$time_start1=microtime(1);
echo "for ".sum_My_for($arr2)."<br>";
$time_end1=microtime(1);



//foreache
$time_start2=microtime(1);
echo "foreache ".sum_My_foreach($arr2)."<br>";
$time_end2=microtime(1);




echo "Опирация for заняла ".($time1=$time_end1-$time_start1)." милисекунд<br>";
echo "Опирация foreache заняла ".($time2=$time_end2-$time_start2)." милисекунд<br>";


$diftime=($time2/$time1);
echo ($diftime*100)."%";

?>

<h1>Произведение и производительность</h1>
<?

$arr2=array(1,2,5,3,7,8,2,5,4);//67200
function mul_My_foreach($arr2){
    $sum=1;
    foreach ($arr2 as $value) {        
        $sum=$sum*$value;       
    }    

    return $sum;
}



function mul_My_for($arr2){
    $sum=1;
    for ($i=0; $i <count($arr2) ; $i++) { 
        echo $i." - ".$arr2[$i]."<br>"; 
        $sum=$sum*$arr2[$i];
    }

    return $sum;
}

// for
$time_start1=microtime(1);
echo "for ".mul_My_for($arr2)."<br>";
$time_end1=microtime(1);



//foreache
$time_start2=microtime(1);
echo "foreache ".mul_My_foreach($arr2)."<br>";
$time_end2=microtime(1);




echo "Опирация for заняла ".($time1=$time_end1-$time_start1)." милисекунд<br>";
echo "Опирация foreache заняла ".($time2=$time_end2-$time_start2)." милисекунд<br>";


$diftime=($time2/$time1);
echo ($diftime*100)."%";
?>
<h1>Обратный порядок</h2>
<?
$arr2=array(1,2,5,3,7);
print_r($arr2);
$result_keyed = array_reverse($arr2);
print_r ($result_keyed);
?>




<h1>Обратный порядок, запись в новый массив</h2>
<?
$arr3=array(9,2,5,3,7);
print_r($arr3);

function rev($b){
        for($i=count($b)-1;$i>=0;$i--){
            // echo $b[$i]."<br>";
            $a[]=$b[$i];
        }
        return $a;
}
print_r(rev($arr3));

?>





<h1>Поиск значения в массиве</h1>
<?
$arr4=array(8,2,5,3,7);
print_r($arr4);
$needlMY=3;
$replaserMy="Приветули";

function iskat($a,$needl,$replaser){

    for ($i=0; $i <count($a) ; $i++) { 
        if($a[$i]==$needl){
            $a[$i]=$replaser;
        } 
    }
    return $a;
}
print_r(iskat($arr4,$needlMY,$replaserMy));
?>
</pre>