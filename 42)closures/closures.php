<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    </head>
<body>
<h2>Доступные функции:</h2>
        <ul>
            <li>sum</li>
            <li>product</li>
            <li>pow</li>
        </ul> 

<hr>

    <form action="#" method="post">
        <input name="f" type="text" value="" placeholder="Название функции"><br>
        <input name="n1" type="text" value="" placeholder="a"><br>
        <input name="n2" type="text" value="" placeholder="b"><br>
        <input type="submit" value="Отправить"><br>
        <input type="reset" value="Очистить">
    </form> 
<?
    function sum($a,$b){
        return $a+$b;
    }
    function product($a,$b){
        return $a*$b;
    }

    $f=strtolower(trim($_POST["f"]));
    $a=trim($_POST["n1"]);
    $b=trim($_POST["n2"]);

    if($f=="sum"){
        echo $a."+".$b."=".sum($a,$b);
    }
    if($f=="product"){
        echo $a."*".$b."=".product($a,$b);
    }
    if($f=="pow"){
        echo $a."^".$b."=".pow($a,$b);
    }

?>    
</body>
</html>