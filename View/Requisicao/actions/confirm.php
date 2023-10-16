<?php 

include('../../../Controller/protect.php');
include_once('../../../Model/conexao.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if (isset($_POST['codigo'])) {
$codigo = strval($_POST['codigo']);
}else{
$codigo = '';    
}

$sql = "UPDATE requisicao SET status = 'devolvido' WHERE id = $codigo";
$resultado = mysqli_query($mysqli, $sql);



header('Location: ../request.php');

?>