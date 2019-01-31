<pre>
<?
$arr1=array("im1",
            "im2",
            "im3",
            "IN4",
            "im5",
            "im10",
            "im7",
            "IN8",
            "im11",
            "im6",
            "im9",
            "im12",
            "im13",
            "im14",);

print_r($arr1);
sort($arr1);
print_r($arr1);
natsort($arr1);
print_r($arr1);
natcasesort($arr1);
print_r($arr1);

echo "<br>Сортировка нескольких массивов<br><br>";
$arr2=array("1",
            "4",
            "3",
            "2",
            "5");

$arr3=array("im1",
            "im4",
            "im3",
            "im2",
            "im5");

print_r($arr2);
print_r($arr3);
array_multisort($arr2,$arr3);
print_r($arr2);
print_r($arr3);
?>
</pre>