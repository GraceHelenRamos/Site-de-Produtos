<?php
/* $conexao=mysqli_connect("localhost:3309","root","","agenda") or die ("Erro ao conectar");
 */
$con=new mysqli('localhost','root','','crudoperation');

if(!$con){
    die(mysqli_error($con));
}
?>