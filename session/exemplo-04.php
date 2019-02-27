<?php

session_id('08gv1rr4oft1thj0j2rvnfp0paarray');

require_once("sessao.php");


session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>