<?php 
// Template Name: Home
get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="introducao">
    <div class="container">
      <h1 data-anime="400" class="fadeInDown"><?php the_field('titulo_introducao'); ?></h1>
      <blockquote data-anime="800" class="fadeInDown quote-externo">
        <p><?php the_field('quote_introducao'); ?></p>
        <cite><?php the_field('citacao_introducao'); ?></cite>
      </blockquote>
      <a data-anime="1200" href="/produtos" class="fadeInDown btn">Orçamento</a>
    </div>
  </section>

  <section data-anime="1600" class=" fadeInDown container">
    <h2 class="  subtitulo">Produtos</h2>
    <ul class="produtos_lista">
      <li class="grid-1-3">
        <div class="produtos_icone">
          <img src="<?php echo get_template_directory_uri(); ?>/img/produtos/passeio.svg" alt="Bikecraft Passeio">
        </div>

        <h3>Passeio</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
      </li>
      <li class="grid-1-3">
        <div class="produtos_icone">
          <img src="<?php echo get_template_directory_uri(); ?>/img/produtos/esporte.svg" alt="Bikecraft Esporte">
        </div>
        <h3>Esporte</h3>
        <p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
      </li>
      <li class="grid-1-3">
        <div class="produtos_icone">
          <img src="<?php echo get_template_directory_uri(); ?>/img/produtos/retro.svg" alt="Bikecraft Retrô">
        </div>
        <h3>Retrô</h3>
        <p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
      </li>
    </ul>
    <div class="call-to-action">
      <p><?php the_field('chamada_produtos'); ?></p>
      <div><a href="/produtos" class="btn btn-preto">Produtos</a></div>
    </div>

  </section>

  <section class="portfolio">
    <div class="container ">
      <h2 class="subtitulo">Portfólio</h2>
      <ul class="portfolio_lista">
        <li class="grid-8"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/retro.jpg" alt="Bicicleta Retrô"></li>
        <li class="grid-8"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
        <li class="grid-16"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
      </ul>
      <div class="call-to-action">
        <p><?php the_field('chamada_portfolio'); ?></p>
        <div><a href="/portfolio" class="btn">Portfólio</a></div>
      </div>
    </div>

  </section>

  <section class="qualidade container">
    <h2 class="subtitulo">Qualidade</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft-qualidade.svg" alt="Bikcraft Qualidade">
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

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>

