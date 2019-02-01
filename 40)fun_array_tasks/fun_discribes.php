<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    </head>
<body>
<pre> -->

<?
//////////////////////////////////////////////////////////////////////////////////////////
//Функции произведения элементов массива (my_array_product)
//my_array_product1 (foreach)
//my_array_product2 (for)
function my_array_product($array){
    $sum=1;
    foreach ($array as $value) {        
        $sum=$sum*$value;       
    }   

    return $sum;
}

function my_array_product1($array){

    $sum=1;
    for ($i=0; $i <count($array) ; $i++) { 
        echo $i." - ".$arr2[$i]."<br>"; 
        $sum=$sum*$array[$i];
    }

    return $sum;
}
//////////////////////////////////////////////////////////////////////////////////////////
//Функции суммы элементов массива (my_array_product)
//my_array_sum1 (foreach)
//my_array_sum2 (for)
function my_array_sum($array){
    $sum=0;
    foreach ($array as $value) {        
        $sum=$sum+$value;       
    }    

    return $sum;
}

function my_array_sum1($array){
    $sum=0;
    for ($i=0; $i <count($array) ; $i++) { 
        echo $i." - ".$array[$i]."<br>"; 
        $sum=$sum+$array[$i];
    }

    return $sum;
}

//////////////////////////////////////////////////////////////////////////////////////////
//Осуществляет поиск данного значения в массиве
//и возврашает соответствующий ключ в случае удачи
//my_array_search
function my_array_search($array,$need,$replaceable){

    for ($i=0; $i <count($array) ; $i++) { 
        $a[]=$array[$i];
        if($array[$i]==$need){
            $a[$i]=$replaceable;
        }       
    }
    return $a;
}

//////////////////////////////////////////////////////////////////////////////////////////
//Возвращает массив с элементами в обратном
//порядке (my_array_reverse)
function my_array_reverse($array){

        for($i=count($array)-1;$i>=0;$i--){
            
            $a[]=$array[$i];
        }
        return $a;
}

//////////////////////////////////////////////////////////////////////////////////////////
//Проверяет, присутствует ли в массиве значение
//(my_in_array)
function my_in_array($array,$element_in_array){
    
        for ($i=0;$i<count($array);$i++) { 
            if($array[$i]==$element_in_array){ 
              $b=$i+1;            
            }        
        }        
        if($b>0){
            // echo "Элемент $element_in_array есть, его позиция - ";
             return $b-1;
        }
        // else{
        //      echo "Элемента $element_in_array нет в этом массиве ";
        // }          
}
//////////////////////////////////////////////////////////////////////////////////////////
//Присутствует ли указанный ключ в 
//массиве (my_array_key_exists)
function my_array_key_exists($array,$key){
 // Первый вариант
    // foreach($array as $fkey=>$val){
    //     if($fkey==$key){
    //         $k=$key;
    //         $v=$val;
    //     }
    // }
    //     if($k==$key){
    //         echo "Ключ '".$key."' есть, его значение - ";
    //         return $v;
    //     }
    //     else{
    //         echo "Ключa '".$key."' нет в этом массиве";
    //     }
 //Второй вариант   
    foreach($array as $fkey=>$val){
            if($fkey==$key){
                $k=1;                
            }
    }
    if($k==1) return true;
    else return false;
}

//////////////////////////////////////////////////////////////////////////////////////////
//Значения и ключи меняются местами (my_array_flip)
function my_array_flip($array){

    foreach($array as $key=>$val){
        $new_array[$val]=$key;
    }
    return $new_array;

}   
//////////////////////////////////////////////////////////////////////////////////////////
//Функция (my_array_keys) возвращает числовые и строковые ключи, 
//содержащиеся в массиве исходный_массив.
//Если указан необязательный параметр значение_для_поиска, 
//функция возвращает только ключи, совпадающие с этим параметром.
//В обратном случае, функция возвращает все ключи массива исходный_массив.
function my_array_keys($array,$dop_parametr=NULL){

            foreach ($array as $key => $value) {
                $k++;
                $new_array1[$k-1]=$key;        
            }

    if($dop_parametr!=NULL){
        
        foreach ($array as $key => $value) {
            // $k1++;
            if($dop_parametr==$value){
                $dop_k++;
                // $new_array2[$dop_k-1]=$k1-1;
                $new_array2[$dop_k-1]=$key;
                continue;            
            }
        }
        
        return $new_array2;
    }
    else{
        return $new_array1;
    }

}  
//////////////////////////////////////////////////////////////////////////////////////////
// функция считает разницу в производительности
// моей и встроенной функции
function time_difference($my_time,$f_time){       
    echo "<br>Функция my_...() заняла ".$my_time." милисекунд<br>";
    echo "Встроенная функция заняла ".$f_time." милисекунд<br>"; 
    $diftime=($f_time/$my_time)*100;
    echo $diftime."%";
}

?>
            
<!-- </pre>
</body>
</html> -->