<?php 
// Template Name: Portfolio
get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php include(TEMPLATEPATH . "/inc/introducao.php" ); ?>

	<section class=" container" data-slide="quote">
			<blockquote class="quote_clientes">
				<p>“Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta atividade. Recomendo à todos que amo.”</p>
				<cite>Barbara Moss</cite>
			</blockquote>

	</section>

	<section class="portfolio">
		<div class="container " data-slide="portfolio">
		<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php" ); ?>

		</div>

	</section>


	<?php endwhile; else: endif; ?>
	<?php get_footer(); ?>