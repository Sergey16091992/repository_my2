<pre>
<?
echo 14>2?"Да":"Нет";
echo "<br>";
$a=4;
echo $a>3?"Да":($a==3?"да, но a=$a":"нет");
echo "<br>";

//сортирует сначала числа отдельно, потом строки отдельно
function cmp($a,$b){
    if(gettype($a)==gettype($b)){
        return($a<$b)?-1:1;
    }
    return(is_string($a))?1:-1;
}
$arr=array(5,'4','3','2',1);
usort($arr,"cmp");
print_r($arr);
?>
<h2>Управление указателем в массиве</h1>
<?
$arr=array("one","two","three","four",);
end($arr);
echo current($arr)."<br>";//four
reset($arr);
echo current($arr)."<br>";//one
next($arr);
echo current($arr)."<br>";//two
end($arr);
echo current($arr)."<br>";//four
prev($arr);
echo current($arr)."<br><br><br>";//three



?>
</pre>