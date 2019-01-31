<pre>
<?php
$arr=array("one"=>1,
           "two"=>2,
           "tree"=>3,
           "fore"=>4);
print_r($arr);
sort($arr);
print_r($arr);
arsort($arr);
print_r($arr);
rsort($arr);
print_r($arr);
echo "<br>";



echo "Пузырёк <br>";
$array=array(23,15,63,48,10,90,16,40,73,37,87);
print_r($array);
        for($i=1;$i<=11;$i++){               
                            for($k=0;$k<count($array);$k++){
                                for($i=0;$i<count($array)-1;$i++){
                                    if($array[$i]<$array[$i+1]){
                                        $buf=$array[$i+1];
                                        $array[$i+1]=$array[$i];
                                        $array[$i]=$buf;
                                    }
                                }
                            }        
         }
    print_r($array);
?>
</pre>