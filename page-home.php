<?php 
// Template Name: Home
get_header(); 

$home = get_page_by_title('home');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php
  $imagem_id = get_field('background_home');
  $background_large = wp_get_attachment_image_src( $imagem_id, 'large' );
  $background_medium = wp_get_attachment_image_src( $imagem_id, 'medium' );

?>

<style type="text/css">

.introducao {
  width: 100%;
  height: 380px;
  background: url('<?php echo $background_large[0] ?>') no-repeat center;
  background-size: cover;
  text-align: center;
  color: white;
  padding-top: 80px;

}

@media only screen and (max-width: 767px) {
  .introducao {
    width: 100%;
    height: 380px;
    background: url('<?php echo $background_medium[0] ?>') no-repeat center;
    background-size: cover;
  text-align: center;
  color: white;
  
  }
}
</style>

  <section class="introducao">
    <div class="container">
      <h1 data-anime="400" class="fadeInDown"><?php the_field('titulo_introducao', $home); ?></h1>
      <blockquote data-anime="800" class="fadeInDown quote-externo">
        <p><?php the_field('quote_introducao', $home); ?></p>
        <cite><?php the_field('citacao_introducao', $home); ?></cite>
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
      <p><?php the_field('chamada_produtos', $home); ?></p>
      <div><a href="/produtos" class="btn btn-preto">Produtos</a></div>
    </div>

  </section>

  <section class="portfolio">
    <div class="container ">
      <h2 class="subtitulo">Portfólio</h2>
      <?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php" ); ?>

    </div>

  </section>

  <?php include(TEMPLATEPATH . "/inc/qualidade.php" ); ?>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>

