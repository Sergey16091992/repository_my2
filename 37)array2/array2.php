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

echo "<br>Сортировка нескольких массивов 1<br><br>";
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
array_multisort($arr2,SORT_ASC,$arr3,SORT_DESC);
print_r($arr2);
print_r($arr3);

echo "<br>Сортировка нескольких массивов 2<br><br>";
echo "SORT_ASC - прямая сортировка<br>";
echo "SORT_DESC - прямая обратная<br>";
$arr4=array(4,
            2,
            2,
            2,
            1);

$arr5=array(101,
            102,
            103,
            109,
            104);

print_r($arr4);
print_r($arr5);
array_multisort($arr4,SORT_ASC,$arr5,SORT_DESC);
print_r($arr4);
print_r($arr5);
?>
</pre>
</body>
</html>