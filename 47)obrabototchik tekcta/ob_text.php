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
include "ob_text_discride_f.php";

$str = $_POST['text'];
echo "<br><br>";

if (!empty($words=cenzure($str))) {
    foreach ($words as $v) {
        echo $v . "<br>";
    }
} 
else 
{
    print_r(AddBB(smile($str)));
}
print_r(after_cenzure($str));

?>
</pre>
</body>
</html>




