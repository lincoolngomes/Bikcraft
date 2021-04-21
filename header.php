<!DOCTYPE html>
<html lang="pt-br">

<head>

  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  
  <script>document.documentElement.classList.add("js");</script>
  <!-- Inicio Wordpress Header -->
  <?php wp_head(); ?>
  <!-- Final Wordpress Header -->

  <meta charset="UTF-8">
  <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">

  <meta property="og:type" content="website" />
  <meta property="og:title" content="Bikcraft - Bicicletas Personalizadas" />
  <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte." />
  <meta property="og:url" content="http://bikcraft.com" />
  <meta property="og:image" content="http://bikcraft.com/img/og-image.png" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon.ico">
  <title><?php bloginfo('name'); ?></title>
</head>

<body>



  <header class="header">
    <div class="container">
      <a href="index.html" class="grid-4">
        <img src="img/bikcraft.svg" alt="logo">
      </a>
      <nav class="header_menu grid-12">
        <ul>
          <li><a href="sobre.html">Sobre</a></li>
          <li><a href="produtos.html">Produtos</a></li>
          <li><a href="portfolio.html">Portfólio</a></li>
          <li><a href="contato.html">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>