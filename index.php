<?php

$categorys=[];
$categorys[]= "Infantil";
$categorys [] = "Adolescente";
$categorys [] = "Adulto";
$nome = 'Eduardo';
$idade = 13;
//var_dump($nome);
//var_dump($idade);
if ($idade >= 6 && $idade <= 12)
{
for($i = 0; $i <= count($categorys) -1; $i++){
    if($categorys[$i] == "Infantil"){
        echo "infantil";
    }

}
}else if ($idade >= 13 &&  $idade <= 18)
{
    for($i = 0; $i <= count($categorys) -1; $i++) {
        if($categorys[$i] == "Adolescente") {
            echo "Adolescente";
        }
    }
}
else {
    for($i = 0; $i <= count($categorys) -1; $i++) {
        if($categorys[$i] == "Adulto") {
            echo "Adulto";
        }
    }

}




?>
