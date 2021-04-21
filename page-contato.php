<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">

	<meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">

	<meta property="og:type" content="website" />
	<meta property="og:title" content="Bikcraft - Contato" />
	<meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte." />
	<meta property="og:url" content="http://bikcraft.com" />
	<meta property="og:image" content="http://bikcraft.com/img/og-image.png" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="favicon.ico">

	<title>Bikcraft - Contato</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contato.css">
	<link rel="stylesheet" href="css/responsivo.css">
	<script>document.documentElement.classList.add("js");</script>

</head>

<body>

	<header class="header">
		<div class="container">
			<a href="index.html" class="grid-4">
				<img src="img/bikcraft.svg" alt="Bikcraft">
			</a>
			<nav class="grid-12 header_menu">
				<ul>
					<li><a href="sobre.html">Sobre</a></li>
					<li><a href="produtos.html">Produtos</a></li>
					<li><a href="portfolio.html">Portfólio</a></li>
					<li><a href="contato.html" class="menu_selecionado">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>

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


	<section class="quebra">
		<blockquote class="quote-externo container">
			<p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.”</p>
			<cite>WILLIAM MORRIS</cite>
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