
<?php

$categorys=[];
$categorys[]= "Infantil";
$categorys [] = "Adolescente";
$categorys [] = "Adulto";

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if(empty($nome)){

    echo "O nome não pode ser vázio";
    return;
}
if(strlen($nome) < 3){
echo "O nome não pode conter menos de 3 caracteres";
return;

}

if(strlen($nome) > 40){
    echo "O nome não pode conter mais de 40 caracteres";
    return;

}
if(!is_numeric($idade)){

    echo "Digite uma idade válida";
    return;

}


if ($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorys) -1; $i++){
        if($categorys[$i] == "Infantil"){
            echo " O nadador ".$nome." é da categoria   ".$categorys[$i];
        }

    }
}else if ($idade >= 13 &&  $idade <= 18)
{
    for($i = 0; $i <= count($categorys) -1; $i++) {
        if($categorys[$i] == "Adolescente") {
            echo " O nadador ".$nome." é da categoria   ".$categorys[$i];
        }
    }
}
else {
    for($i = 0; $i <= count($categorys) -1; $i++) {
        if($categorys[$i] == "Adulto") {
            echo " O nadador ".$nome." é da categoria   ".$categorys[$i];
        }
    }

}

?>