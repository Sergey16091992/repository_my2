<?php
echo time()."<br>";
echo microtime()."<br>";
echo microtime(true)."<br>";
?>

<?php
$time_start1=microtime(1);
    for($i=1;$i<=1000;$i++){
        
    }
$time_end1=microtime(1);
$time1=$time_end1-$time_start1;

$time_start2=microtime(1);
for($i=1;$i<=1000;$i++){
        $a=sqrt($i);
}
$time_end2=microtime(1);
$time2=$time_end2-$time_start2;
echo "Ничего не делал $time1 секунд";
echo "<br>";
echo "Выполнял операцию $time2 секунд";
echo "<br>";
?>

<?php
$today=getdate();
print_r($today);
echo "<br>";
$years =array('2019'=>' две тысячи девятнадцать','2020'=>'две тысячи двадцать');
$days = array( 'Monday' => 'Понедельник' ,'Tuesday' =>'Вторник' ,'Wednesday' =>'Среда' ,'Thursday' =>'Четверг' ,'Friday' =>'Пятница' ,'Saturday' =>'Суббота' ,'Sunday'=> 'Воскресенье' );
echo $days[$today['weekday']];
echo $years[$today['year']];
echo "<br>";
echo "<br>";
?>

<?php
echo date("F j, Y, g:i a")."<br>";
echo date("m.d.y")."<br>";
echo date("j, n, Y")."<br>";
echo date("Ymd")."<br>";
echo date('h-i-s, j-m-y,it is w Day z')."<br>";
echo date('\i\t \i\s \t\h\e jS \d\a\y.')."<br>";
echo date("D M j G:i:s T Y")."<br>";
echo date('H:m:s \m \i\s\ \m\o\n\t\h')."<br>";
echo date("H:i:s")."<br>";
echo "<br>";
echo "<br>";
echo date("M-d-Y",mktime(0,0,0,12,20,2007))."<br>";
echo date("M-d-Y",mktime(0,0,0,12,32,2007))."<br>";
echo date("M-d-Y",mktime(0,0,0,13,1,2007))."<br>";
echo date("M-d-Y",mktime(0,0,0,1,1,2007))."<br>";
echo date("M-d-Y",mktime(0,0,0,1,1,07))."<br>";

?>