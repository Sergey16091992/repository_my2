<?php

print_r($_POST);
$n=$_POST['number'];
$m=$_POST['month'];
$y=$_POST['year'];

 $da = date("l", mktime(0,0,0,$m,$n,$y));
 echo $da."<br>";
 $days = array( 'Monday' => 'Понедельник',
 'Tuesday' =>'Вторник' ,
 'Wednesday' =>'Среда' ,
 'Thursday' =>'Четверг' ,
 'Friday' =>'Пятница' ,
 'Saturday' =>'Суббота' ,
 'Sunday'=> 'Воскресенье' );


//  print_r($days);

     echo $days[$da];
?>