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
$n12=$_POST["number"];
$a=preg_match_all('/[A-ZА-Я].*?/iu',$text=$_POST["text"],$b);
    // print_r($b);
echo "Количество символов в тексте $a<br>";

$a1=preg_match_all('/[A-ZА-Я].*?\s/iu',$text=$_POST["text"],$b1);
    // print_r($b1);
echo "Количество слов в тексте $a1<br>";

$a2=preg_match_all('/\b\w{'.$n12.'}\b/iu',$text=$_POST["text"],$b2);    
echo "Количество слов в тексте $a2 содержащих $n12 символов<br>";
// print_r($b2);
?>

<ol>
<?
    foreach($b2[0] as $value){
        echo "<li>".$value."</li>";
    }
       
?>
</ol>
</pre>
</body>
</html>