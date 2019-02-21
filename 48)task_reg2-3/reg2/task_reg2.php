<?
//скачиваем файл
$homepage = file_get_contents('http://www.lipsum.com/');
echo $homepage;
//-------------------------------------------------------

//избовляемся от всех тегов
function AddBB($str) {   
    $search = '/<.+?>/iu';
    $replace =""; 
    $str1 = preg_replace($search, $replace, $str);
    return $str1; 
}
echo "<br><br><br><br><br><br>";
$homepage_one=AddBB($homepage);
echo $homepage_one;
echo "<br><br><br><br><br><br>";
//--------------------------------------------------------------------

//ищем в тексте все слова содержашие 6 букв
$search_6_words=preg_match_all('/\b\w{6}\b/iu',$homepage_one,$b2);    
echo "Количество слов в тексте $search_6_words содержащих 6 символов<br>";
?>
<ol>
<?
    foreach($b2[0] as $value){
        echo "<li>".$value."</li>";
    }
       
?>
</ol>
<!-- ----------------------------------------------------------------- -->

<!-- подсчитываем количество вхождений одинаковых слов -->
<pre>
<?
echo "<br><br><br><br><br><br>";
print_r(array_count_values($b2[0]));
?>
</pre>
<!-- ------------------------------------------------------------------ -->