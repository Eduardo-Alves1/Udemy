<?php
require_once("sessao.php");

session_unset($_SESSION['nome']);

echo $_SESSION['nome'];




?>