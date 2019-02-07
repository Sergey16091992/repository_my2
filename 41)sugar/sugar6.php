<pre>
<?
function sum2($a,$b){
    return $a+$b;
};
function sum3($a,$b,$c){
    return $a+$b+$c;
};
print_r(sum2(5,7));
echo "<br>";
print_r(sum3(5,7,2));


echo "<br>";
print_r(call_user_func_array("sum2", array(5,7)));
?>
</pre>