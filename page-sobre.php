<?php 
// Template Name: Sobre
get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="interna_sobre introducao-interna ">
		<div class="container">
			<h1 data-anime="400" class="fadeInDown">Sobre</h1>
			<p data-anime="800" class="fadeInDown">conheça mais sobre a bikcraft</p>
		</div>
	</section>

	<section data-anime="1200" class="fadeInDown missao_sobre container">
		<div class="grid-10">
			<h2 class="subtitulo-interno">História, Missão e Visão</h2>
			<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão inovadora da qual fazemos parte da qual fazemos parte.</p>
			<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão inovadora da qual fazemos parte da qual fazemos parte.</p>
		</div>
		<div class="grid-6">
			<h2 class="subtitulo-interno">Valores</h2>
			<ul>
				<li>- Qualidade no processo com</li>
				<li>- Foco no cliente sem perder a</li>
				<li>- Diversão, preservando a</li>
				<li>- Natureza com sustentabilidade</li>
			</ul>
		</div>

		<div class="grid-16 foto-equipe">
			<img src="img/equipe-bikcraft.jpg" alt="Equipe Bikcraft">
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

	<?php endwhile; else: endif; ?>

	<?php get_footer(); ?>