<?php
//Encerrando a sessão

echo "Encerrando a Sessão";
session_start();
session_unset($_SESSION['usuario']);
session_destroy();
header('Location: index.html');
?>