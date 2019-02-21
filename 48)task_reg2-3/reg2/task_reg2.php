<?
//скачиваем файл
$homepage = file_get_contents('http://www.lipsum.com/');
<<<<<<< HEAD
// echo $homepage;
//-------------------------------------------------------

//избовляемся от всех тегов
function del_teg($str) {      
    $str1 = preg_replace('/<.+?>/is', "", $str);
    return $str1; 
}

function delet_script($str) {  
    $replace = "";
    $str2 = preg_replace('/\<script\>.*\<\/script\>/iums' ,'', $str);
    return $str2; 
}

echo "<br><br><br><br><br><br>";
// $homepage_one=delet_script(teg($homepage));
$del=delet_script($homepage);

echo $del;
// echo "<br><br><br><br><br><br>";
// //--------------------------------------------------------------------

// //ищем в тексте все слова содержашие 6 букв
// $search_6_words=preg_match_all('/\b\w{6}\b/iu',$homepage_one,$b2);    
// echo "Количество слов в тексте $search_6_words содержащих 6 символов<br>";
// ?>
// <ol>
// <?
//     foreach($b2[0] as $value){
//         echo "<li>".$value."</li>";
//     }
       
// ?>
// </ol>
// <!-- ----------------------------------------------------------------- -->

// <!-- подсчитываем количество вхождений одинаковых слов -->

// <ol>
// <?
// echo "<br><br><br><br><br><br>";
//       foreach(array_count_values($b2[0]) as $value){
//           echo "<li>".$value."</li>";
//       }
// // print_r(array_count_values($b2[0]));
?>
</ol>

=======
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
>>>>>>> 95872fb5fcb7b73661fc04c225804de4d6646c0d
<!-- ------------------------------------------------------------------ -->