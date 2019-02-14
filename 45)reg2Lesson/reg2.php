<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Статистика по тексту</h2>
    <form method="POST" action="reg2.php">
        <textarea rows="15" cols="30" name="text"><?
            echo (isset($_POST["text"])) ? $_POST["text"] : "Ведите текст";
            ?></textarea><br>       
        <input type="submit" value="Отправить">
    </form>  

<?


// $str="not to be";
// $pat="/^(be)|(not\sto\sbe)$/i";

// if(preg_match($pat,$str)){
//     echo "Вхождение найдено.";
// }
// else{
//     echo "Вхождение не найдено.";
// }




// $str="быть";
// $str1="или     не быть";
// $pat="/^(быть)$|^(или\s+не\s+быть)$/iu";

// if(preg_match($pat,$str1)){
//     echo "Вхождение найдено.";
// }
// else{
//     echo "Вхождение не найдено.";
// }





// $str="Всем <b>Привет</b> !!!";
// $pat="/<b>.*<\/b>/i";
// $rep="<i>$0</i>";

// $str2=preg_replace($pat,$rep,$str);
// echo $str2;






$str=$_POST['text'];
$pat="/(<\s*b\s*>(.*)<\s*\/b\s*>)/i";
// $pat="/<\s*u\s*>(.*)<\s*\/u\s*>/i";
// $pat="/<\s*i\s*>(.*)<\s*\/i\s*>/i";

$pat="/(<\s*b\s*>(.*)<\s*\/b\s*>)|(<\s*i\s*>(.*)<\s*\/i\s*>)|(<\s*u\s*>(.*)<\s*\/u\s*>)/iu";
 $pat1="/<.+?>/";
$rep="$2$4$6";

$str2=preg_replace($pat,$rep,$str);
echo $str2."<br>";
// echo htmlspecialchars($str2);

?>

</body>
</html>