<?php

function escolhe_estilo() {
  (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
  switch ($pagina) {
    case 'home':
      // code...
      $estilo = 'node_modules/bootstrap/compiler/style.css';
      break;

   case 'eletronica':
      // code...
      $estilo = 'style.css';
      break;

  case 'microcontroladores':
      // code...
      $estilo = 'style.css';
      break;

  case 'cursos':
      // code...
      $estilo = 'style.css';
      break;

  case 'palavra':
      // code...
      $estilo = 'style.css';
      break;

  case 'contato':
      // code...
      $estilo = 'node_modules/bootstrap/compiler/style_contato.css';
      break;

  case 'newsletter':
      // code...
      $estilo = 'node_modules/bootstrap/compiler/style_newsletter.css';
      break;


    default:
      // code...
      $estilo = 'node_modules/bootstrap/compiler/style.css';
      break;
  }
  return $estilo;
}

 ?>
