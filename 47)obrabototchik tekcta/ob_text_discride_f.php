<?
// замена смайликов :) :( на картинки смайликов
function smile($str)
{
    $pat = array(
        "/\:\)/iu",
        "/\:\(/iu",
        "/\!/iu"
    );
    $rep = array(
        '<img src="1.jpg" width=30px>',
        '<img src="2.jpg" width=30px>',
        '<b style="color: blue; font-size: 30px">$0</b>'
    );
    $str_re = preg_replace($pat, $rep, $str);
    return $str_re;
}
// замена  [b] [/b]... на соответствующие теги
// и
//вписываем ссылку в textarea и высвечивается картинка
function AddBB($str) {
   
    $search = array(
        "/\[b\](.*)\[\/b\]/i",  
        "/\[i\](.*)\[\/i\]/i",  
        "/\[u\](.*)\[\/u\]/i",
        "/\[img\](.*)\[\/img\]/i"    
    );

    $replace = array(
        "<b>$1</b>", 
        "<i>$1</i>", 
        "<u>$1</u>", 
        '<img src="$1" width=30px>',       
    );


    $str1 = preg_replace($search, $replace, $str);
    return $str1; 
}
//выводит массив плохих слов если таковые есть в строке
function cenzure($str){
    $bad_words="/Дурак|Редиска|Нигодяй/iu";
    preg_match_all($bad_words, $str,$a);
    return $a[0];
}
//заменяет плохие слова если таковые есть в строке на "***"
function after_cenzure($str){
    $bad_words="/Дурак|Редиска|Нигодяй/iu";
    $rep=" *** ";
    $str1=preg_replace($bad_words, $rep,$str);
    return $str1;
}

?>