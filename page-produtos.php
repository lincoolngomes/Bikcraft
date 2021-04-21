<?php 
// Template Name: Produtos
get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="interna_produtos introducao-interna ">
		<div class="container">
			<h1 data-anime="400" class="fadeInDown">Produtos</h1>
			<p data-anime="800" class="fadeInDown">conheça todos os nossos produtos
			</p>
		</div>
	</section>

	<section data-anime="1200" class="fadeInDown container produto_item">
		<div class="grid-11">
			<img src="img/produtos/bikcraft-passeio-1.jpg" alt="BikeCraft Passeio">
			<h2>Passeio</h2>
		</div>
		<div class="grid-5 produto_icone">
			<img src="img/produtos/passeio.svg" alt="">
		</div>

		<div class="grid-8 ">
			<img src="img/produtos/bikcraft-passeio-2.jpg" alt="BikeCraft Passeio">
		</div>
		<div class="grid-8 produto_info">
			<p>Mais rápida do que Forrest Gump, ninguém vai pegar você. A Bikcraft Esporte é uma bicicleta desenhada para a máxima performance. O seu desempenho supera qualquer uma da categoria.</p>
			<ul>
				<li>Precisão</li>
				<li>Velocidade</li>
				<li>Design</li>
				<li>Versatilidade</li>
			</ul>
		</div>

	</section>

	<section class="container produto_item">
		<div class="grid-11">
			<img src="img/produtos/bikcraft-passeio-1.jpg" alt="BikeCraft Passeio">
			<h2>Passeio</h2>
		</div>
		<div class="grid-5 produto_icone">
			<img src="img/produtos/passeio.svg" alt="">
		</div>

		<div class="grid-8 ">
			<img src="img/produtos/bikcraft-passeio-2.jpg" alt="BikeCraft Passeio">
		</div>
		<div class="grid-8 produto_info">
			<p>Mais rápida do que Forrest Gump, ninguém vai pegar você. A Bikcraft Esporte é uma bicicleta desenhada para a máxima performance. O seu desempenho supera qualquer uma da categoria.</p>
			<ul>
				<li>Precisão</li>
				<li>Velocidade</li>
				<li>Design</li>
				<li>Versatilidade</li>
			</ul>
		</div>

	</section>

	<section class="container produto_item">
		<div class="grid-11">
			<img src="img/produtos/bikcraft-esporte-1.jpg" alt="BikeCraft Esporte">
			<h2>Esporte</h2>
		</div>
		<div class="grid-5 produto_icone">
			<img src="img/produtos/esporte.svg" alt="">
		</div>

		<div class="grid-8 ">
			<img src="img/produtos/bikcraft-esporte-2.jpg" alt="BikeCraft Esporte">
		</div>
		<div class="grid-8 produto_info">
			<p>Mais rápida do que Forrest Gump, ninguém vai pegar você. A Bikcraft Esporte é uma bicicleta desenhada para a máxima performance. O seu desempenho supera qualquer uma da categoria.</p>
			<ul>
				<li>Precisão</li>
				<li>Velocidade</li>
				<li>Design</li>
				<li>Versatilidade</li>
			</ul>
		</div>

	</section>


	<section class="container produto_item">
		<div class="grid-11">
			<img src="img/produtos/bikcraft-retro-1.jpg" alt="BikeCraft Retro">
			<h2>Retro</h2>
		</div>
		<div class="grid-5 produto_icone">
			<img src="img/produtos/retro.svg" alt="">
		</div>

		<div class="grid-8 ">
			<img src="img/produtos/bikcraft-retro-2.jpg" alt="BikeCraft Retro">
		</div>
		<div class="grid-8 produto_info">
			<p>Mais rápida do que Forrest Gump, ninguém vai pegar você. A Bikcraft Esporte é uma bicicleta desenhada para a máxima performance. O seu desempenho supera qualquer uma da categoria.</p>
			<ul>
				<li>Precisão</li>
				<li>Velocidade</li>
				<li>Design</li>
				<li>Versatilidade</li>
			</ul>
		</div>

	</section>

	<section class="orcamento">
		<div class="container">
			<h2 class="subtitulo">Orçamento</h2>
			<form id="form_orcamento" class="form grid-8">
				<label for="nome">Nome</label>
				<input type="text" id="nome">
				<label for="email">E-mail</label>
				<input type="email" id="email">
				<label for="telefone">Telefone</label>
				<input type="text" id="telefone">
				<label for="mensagem">Mensagem</label>
				<textarea id="mensagem"></textarea>
				<button type="submit" class="btn ">Enviar</button>
			</form>
			<div class="orcamento_dados grid-8">
				<h3>Dados</h3>
				<span>+55 13 9999 9999</span>
				<span class="dados_email">orcamento@bikcraft.com</span>
				<h3>Monte a sua Bikcraft</h3>
				<p>Escolha as especificações:</p>
				<ul>
					<li> - Cores</li>
					<li> - Estilos</li>
					<li> - Medidas</li>
					<li> - Acessórios</li>
					<li> - Outros</li>
				</ul>
			</div>
		</div>
	</section>


	<?php endwhile; else: endif; ?>

	<?php get_footer(); ?>