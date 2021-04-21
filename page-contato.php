<?php 
// Template Name: Contato
get_header(); 
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="interna_contato introducao-interna ">
		<div class="container">
			<h1 data-anime="400" class="fadeInDown">Contato</h1>
			<p data-anime="800" class="fadeInDown">tire suas dúvidas com a gente
			</p>
		</div>
	</section>


	<section data-anime="1200" class="fadeInDown contato">
		<div class="container">
			<form id="form_orcamento" class="form grid-8">
				<label for="nome">Nome</label>
				<input type="text" id="nome" name="nome" required>
				<label for="email">E-mail</label>
				<input type="email" id="email" name="email" required>
				<label for="telefone">Telefone</label>
				<input type="text" id="telefone" name="telefone">
				<label for="mensagem">Mensagem</label>
				<textarea id="mensagem" name="mensagem" required></textarea>
				<button id="enviar" name="enviar" type="submit" class="btn ">Enviar</button>
			</form>
			<div class="orcamento_dados grid-8">
				<h3>Dados</h3>
				<span>+55 13 9999 9999</span>
				<span class="dados_email">orcamento@bikcraft.com</span>
				<div class="contato_redes">
					<h3>Redes Sociais</h3>
					<ul>
						<li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg"></a></li>
						<li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg"></a></li>
						<li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg"></a></li>
					</ul>

				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container contato_mapa">
			<a href="#">
				<img src="img/endereco-bikcraft.jpg" alt="Bikcraft Endereço">
			</a>

		</div>
	</section>

	<?php endwhile; else: endif; ?>

	<?php get_footer(); ?>