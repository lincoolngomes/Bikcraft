<!DOCTYPE html>
<html lang="pt-br">

<head>

  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  
  <script>document.documentElement.classList.add("js");</script>


  <meta charset="UTF-8">
  <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">

  <meta property="og:type" content="website" />
  <meta property="og:title" content="Bikcraft - Bicicletas Personalizadas" />
  <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte." />
  <meta property="og:url" content="http://bikcraft.com" />
  <meta property="og:image" content="http://bikcraft.com/img/og-image.png" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon.ico">
  <title>Bikcraft</title>
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

  <section class="introducao">
    <div class="container">
      <h1 data-anime="400" class="fadeInDown">Bicicletas feitas a mão</h1>
      <blockquote data-anime="800" class="fadeInDown quote-externo">
        <p>"não tenha nada em sua casa que você não considere útil ou acredita ser bonito"</p>
        <cite>William Morris</cite>
      </blockquote>
      <a data-anime="1200" href="produtos.html" class="fadeInDown btn">Orçamento</a>
    </div>
  </section>

  <section data-anime="1600" class=" fadeInDown container">
    <h2 class="  subtitulo">Produtos</h2>
    <ul class="produtos_lista">
      <li class="grid-1-3">
        <div class="produtos_icone">
          <img src="./img/produtos/passeio.svg" alt="Bikecraft Passeio">
        </div>

        <h3>Passeio</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
      </li>
      <li class="grid-1-3">
        <div class="produtos_icone">
          <img src="./img/produtos/esporte.svg" alt="Bikecraft Esporte">
        </div>
        <h3>Esporte</h3>
        <p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
      </li>
      <li class="grid-1-3">
        <div class="produtos_icone">
          <img src="./img/produtos/retro.svg" alt="Bikecraft Retrô">
        </div>
        <h3>Retrô</h3>
        <p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
      </li>
    </ul>
    <div class="call-to-action">
      <p>clique aqui e veja os detalhes dos produtos</p>
      <div><a href="produtos.html" class="btn btn-preto">Produtos</a></div>
    </div>

  </section>

  <section class="portfolio">
    <div class="container ">
      <h2 class="subtitulo">Portfólio</h2>
      <ul class="portfolio_lista">
        <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retrô"></li>
        <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
        <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
      </ul>
      <div class="call-to-action">
        <p>conheça mais o nosso portfólio</p>
        <div><a href="portfolio.html" class="btn">Portfólio</a></div>
      </div>
    </div>

  </section>

  <section class="qualidade container">
    <h2 class="subtitulo">Qualidade</h2>
    <img src="./img/bikcraft-qualidade.svg" alt="Bikcraft Qualidade">
    <ul class="qualidade_lista">
      <li class="grid-1-3">
        <h3>Durabilidade</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
      </li>
      <li class="grid-1-3">
        <h3>Design</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
      </li>
      <li class="grid-1-3">
        <h3>Sustentabilidade</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
      </li>
    </ul>
    <div class="call-to-action">
      <p>conheça mais a nossa história</p>
      <div><a href="sobre.html" class="btn btn-preto">Sobre</a></div>
    </div>

  </section>

  <section class="quebra">
    <blockquote class="quote-externo container">
      <p>
        "o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana."
      </p>
      <cite>William Morris</cite>
    </blockquote>

  </section>

  <footer>
    <div class="footer">
      <div class="container">

        <div class="grid-8 footer_historia">
          <h3>Nossa História</h3>
          <p>Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Eramos apaixonados por pedalar e também por fazer as coisas com as nossas próprias mãos. Assim surgiu um sonho na garagem da nossa casa.</p>
        </div>

        <div class="grid-4 footer_contato">
          <h3>Contato</h3>
          <ul>
            <li>- 21 23232-4343</li>
            <li>- contato@bikcraft.com</li>
            <li>- Botafago - RJ</li>
          </ul>
        </div>

        <div class="grid-4 footer_redes">
          <h3>Redes sociais</h3>
          <ul>
            <li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg"></a></li>
            <li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg"></a></li>
            <li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg"></a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="copy">
      <div class="container">
        <p class="grid-16">Bikcraft 2019 - Alguns direitos reservados.</p>
      </div>
    </div>
  </footer>


  <script src="./js/simple-anime.js"></script>
  <script src="./js/script.js"></script>


</body>

</html>