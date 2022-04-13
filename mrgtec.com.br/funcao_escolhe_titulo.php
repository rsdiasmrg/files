<?php

function escolhe_titulo() {
  (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
  switch ($pagina) {
    case 'home':
      // code...
      $titulo = 'Home - Ensino de Tecnologia';
      break;

   case 'eletronica':
      // code...
      $titulo = 'Eletrônica - Ensino de Tecnologia';
      break;

  case 'microcontroladores':
      // code...
      $titulo = 'Microcontroladores - Ensino de Tecnologia';
      break;

  case 'cursos':
      // code...
      $titulo = 'Cursos - Ensino de Tecnologia';
      break;

  case 'palavra':
      // code...
      $titulo = 'A palavra - Mudando sua Vida';
      break;

  case 'contato':
      // code...
      $titulo = 'Fale Conosco';
      break;

  case 'newsletter':
          // code...
          $titulo = 'Newsletter';
          break;

    default:
      // code...
      $titulo = 'Home - Ensino de Tecnologia';
      break;
  }
  return $titulo;
}

 ?>
