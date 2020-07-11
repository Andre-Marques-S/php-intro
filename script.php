<?php
session_set_cookie_params(1);
session_start();
$categorys=[];
$categorys[]= "Infantil";
$categorys [] = "Adolescente";
$categorys [] = "Adulto";
$nome = $_POST["nome"];
$idade = $_POST["idade"];
if(empty($nome)){

    $_SESSION["msg"] = "O nome não pode ser vázio";
    header("location: index.php");
    return;
}
else if(strlen($nome) < 3){
    $_SESSION["msg"] = "O nome não pode conter menos de 3 caracteres";
    header("location: index.php");
    return;


}

else if(strlen($nome) > 40){
    $_SESSION["msg"] = "O nome não pode conter mais de 40 caracteres" ;
    header("location: index.php");
    return;



}
else if(!is_numeric($idade)){
    $_SESSION["msg"] = "Digite uma idade válida";
    header("location: index.php");
    return;


}


if ($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorys) -1; $i++){
        if($categorys[$i] == "Infantil"){
            $_SESSION["msg_s"] = " O nadador ".$nome." é da categoria   ".$categorys[$i];
            header("location: index.php");
            return;
        }

    }
}else if ($idade >= 13 &&  $idade <= 18)
{
    for($i = 0; $i <= count($categorys) -1; $i++) {
        if($categorys[$i] == "Adolescente") {
            $_SESSION["msg_s"] = " O nadador ".$nome." é da categoria   ".$categorys[$i];
            header("location: index.php");
            return;
        }
    }
}
else {
    for($i = 0; $i <= count($categorys) -1; $i++) {
        if($categorys[$i] == "Adulto") {
            $_SESSION["msg_s"] = " O nadador ".$nome." é da categoria   ".$categorys[$i];
            header("location: index.php");
            return;
        }
    }

}

?>