<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
include "ob_text_discride_f.php";

echo "Вы ввели строку: ".$str = $_POST['text'];
echo "<br>";
// echo smile(AddBB($str));


if (!empty($words=cenzure($str))) {
    foreach ($words as $v) {
        echo "В тексте есть нехорошее слово ".$v."<br>";
        
    }
} 
else 
{
    print_r(AddBB(smile(MarkDown($str))));
}
?>
</body>
</html>