/*
Theme Name: Tema Thalis Alison
Theme URI: http://Thalisalison.com
Author: Thalis Alison
Description: Um Tema criado para o restaurante Rest
Version: 1.0 
*/

<br>
<br>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Rest</title>

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?> /style.css">
	</head>
	
<?php get_header(); ?>

	<body>
		<section class="container">
			<h2 class="subtitulo">Menu da Semana</h2>

			<div class="menu-item grid-8">
				<h2>Peixes</h2>
				<ul>
					<li>
						<span><sup>R$</sup>129</span>
						<div>
							<h3>Salmão Grelhado no Forno</h3>
							<p>Pequenas tiras de salmão feitas no alho e óleo</p>
						</div>
					</li>
					<li>
						<span><sup>R$</sup>89</span>
						<div>
							<h3>Sardinha Frita na Cerveja</h3>
							<p>Sardinhas escolhidas a dedo e fritas em cerveja premium</p>
						</div>
					</li>
					<li>
						<span><sup>R$</sup>159</span>
						<div>
							<h3>Camarão com Catupiry</h3>
							<p>Grandes camarões grelhados, servidos ao molho de camarão com catupiry</p>
						</div>
					</li>
				</ul>
			</div>

			<div class="menu-item grid-8">
				<h2>Carnes</h2>
				<ul>
					<li>
						<span><sup>R$</sup>129</span>
						<div>
							<h3>Picanha Nobre no Alho</h3>
							<p>Pequenas tiras de salmão feitas no alho e óleo</p>
						</div>
					</li>
					<li>
						<span><sup>R$</sup>89</span>
						<div>
							<h3>Cupim no Bafo</h3>
							<p>Sardinhas escolhidas a dedo e fritas em cerveja premium</p>
						</div>
					</li>
					<li>
						<span><sup>R$</sup>159</span>
						<div>
							<h3>Hamburger Artesanal Rest</h3>
							<p>Grandes camarões grelhados, servidos ao molho de camarão com catupiry</p>
						</div>
					</li>
				</ul>
			</div>

		</section>

		<?php get_footer(); ?>

	</body>
</html>