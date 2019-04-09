<?php
session_start();
require("../config/config.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM funcionarios WHERE email = '".$usuario."' AND senha = '".$senha."'";

$query = mysqli_query($con,$sql);

if(mysqli_num_rows($query) > 0){
	
	$_SESSION['usuario'] = $_POST['usuario'];
	header('location: index.php');
}else{
	header('location: login.php');
}

?>