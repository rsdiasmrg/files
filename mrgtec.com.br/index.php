<?php

require_once('funcao_escolhe_pagina.php');   // Função para Selecionar a Página Clicada de Modo dinâmico
require_once('funcao_escolhe_titulo.php');   // Função para Selecionar o Título conforme a Página Acessada
require_once('funcao_escolhe_estilo.php');   // Função para Selecionar o Estilo conforme a Página Acessada
//
require_once('header.php');   // Dados Html
require_once('navbar.php');   // Dados Menu
escolhe_pagina();             //require_once('home.php');     // Dados Body - Home ou Outras Páginas
require_once('footer.php');   // Dados do rodapé da Página

 ?>
