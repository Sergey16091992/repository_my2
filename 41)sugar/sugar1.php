<?
function my_fun($x){
    return $x*$x;
}
    $a="my_fun";

    echo $a(2);
    echo "<br>";
    echo $a(3); 
    echo "<br>"; 
?>
<?
function my_fun1($name){
    $name();
};

    my_fun1(function(){
        echo "Hellow";
    });
    echo "<br>"; 
?>

<?
$a=function($name){
        echo "Hellow $name<br>";
};
    $a("Piter");
    $b=$a;
    $b("Alex");
?>

<?
function speed_test($fun, $arg, $n=1000000){
    $time1=microtime(true);

    for ($i=0; $i < $n; $i++) { 
        $fun($arg);
    }

    $time2=microtime(true);

    return $time2-$time1;
}

function my_sqrt($x){
    return pow($x,5);
}

echo speed_test(sqrt,20);
echo "<br>";
echo speed_test(my_sqrt,20);


?>
