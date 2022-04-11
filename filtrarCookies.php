<?php
header("Location: index.php");

$filtroCookie = $_POST['filtroId'];

setcookie('filtro',$filtroCookie,time()+280);

?>