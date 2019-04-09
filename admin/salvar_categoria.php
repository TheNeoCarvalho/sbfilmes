<?php
require("../config/config.php");

$cat = $_POST['nome'];

$sql = "INSERT INTO categoria (nome) VALUES ('$cat')";
$query = mysqli_query($con, $sql);

if($query){
	header('location: index.php');
}else{
	header('location: cad_categoria.php');
}



?>