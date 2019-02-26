<?
/////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////
function put_array_to_xml($array){

    $str= "";
    foreach ($array as $value){
        $str .="<post>\n\t<msg>$value[msg]</msg>\n\t<nik>$value[nik]</nik>\n<post>\n";
    }
    return $str;
}

/////////////////////////////////////////////////////////////////////////
function smile($str)
{
    $pat = array(
        "/\:\)/iu",
        "/\:\(/iu"       
    );
    $rep = array(
        '<img src="3.jpg" width=30px>',
        '<img src="2.jpg" width=30px>'        
    );
    $str_re = preg_replace($pat, $rep, $str);
    return $str_re;
}

/////////////////////////////////////////////////////////////////////////
function after_cenzure($str){
    $bad_words="/Дурак|Редиска|Нигодяй/iu";
    $rep="";
    $str1=preg_replace($bad_words, $rep,$str);
    return $str1;
}

/////////////////////////////////////////////////////////////////////////
function MarkDown($str) {
   
    $search = array(               
        "/\*\*(.*)\*\*/iu", 
        "/\*(.*)\*/iu",          
        "/^#{3} (.*)$/ium",  
        "/^#{2} (.*)$/ium",
        "/^#{1} (.*)$/ium"
           
    );

    $replace = array(
        "<b>$1$2</b>", 
        "<i>$1$2</i>", 
        "<h3>$1</h1>", 
        "<h2>$1</h2>",
        "<h1>$1</h3>"
             
    );
    // $pat="/(<\s*b\s*>(.*)<\s*\/b\s*>)/i";
    $str1 = preg_replace($search, $replace, $str);
    return $str1; 
}
?>