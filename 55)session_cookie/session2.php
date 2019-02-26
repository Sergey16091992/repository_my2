<?
    session_start();

    if(!isset($_SESSION["c"])){
        $_SESSION["c"]=1;
        // setcookie("b",2);  
    }    
    else{
        $_SESSION["c"]++;
        // setcookie("b",$_SESSION["b"]+1);
    }    
    // print_r($_SESSION);
    // echo $_COOKIE["count"]; 
    ?>
<pre>
<?
 print_r($_SESSION["c"]);
?>
</pre>