<?php

function escolhe_pagina() {
  (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
  if(file_exists($pagina.'.php')):
    require_once($pagina.'.php');
  else:
    require_once('home.php');
  endif;
}

 ?>
