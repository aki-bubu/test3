<?php
    include("func.php");
    //func.phpの中の情報を入れる
    $name = $_POST["name"];
    $mail = $_POST["email"];
    $memo = $_POST["memo"];
    $br = ",";
    $str = $name.$br.$mail.$br.$memo;

?>
name:<?php echo h($name); ?> 
mail:<?=$mail;?> 