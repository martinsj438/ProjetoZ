<?php
	require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página Inicial</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width; initial-scale=1, shrink-to-fit=no"/>

	<!-- ICON, BOOTSTRAP, CSS -->
	<link rel = "shortcut icon" type = "imagem/x-icon" href = "assets/images/favicon1.ico"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/styleIndex.css"/>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">

	<script src="assets/js/mostrarMenu.js"></script>
	<script src="assets/js/exibir.js"></script>
</head>
<body id="topoPagina">
	<!-- Área de CONTATO -->
	<div class="modal fade" id="modalContato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cadastre-se para receber as novidades sobre os melhores destinos do Brasil</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
					<form method="POST">
						<div class="form-group">
							<label>Nome</label>
							<input type="text" name="nome" placeholder="Digite seu nome..." class="form-control" />
						</div>
						<div class="form-group">
							<label>E-mail</label>
							<input type="text" name="email" placeholder="Digite seu e-mail..." class="form-control" />
						</div>

						<div class="modal-footer d-flex justify-content-around">
							<button type="reset" class="btn btn-secondary col-md-3">Limpar</button>
							<button type="submit" class="btn btn-info col-md-4">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


<!-- =========================================================================== -->


	<div id="topo">
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top menuDiferente" id="menuTopo">
			<div class="container">
				<a id="img" class="navbar-brand js-scroll-trigger topoSuave" href="#topoPagina">
		          <img src="assets/images/brasilturismo.png" style="width:180px;">
		        </a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Inicio
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="sobre.php">Sobre Nós</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#modalContato">Contato</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- <figure class="d-flex justify-content-center align-items-center">
			<img src="assets/images/brasilturismo.png"/>
		</figure> -->
		<div class="row d-flex justify-content-center align-items-center inteiro" id="tituloSiteM">
			<div class="col-12" id="tituloSite">
				<strong id="part1">Brasil</strong>
				<img src="assets/images/mais.png"/>
				<strong id="part2">Turismo</strong>
			</div>
		</div>
	</div>

	<div class="container text-light" id="corpo">
		<header class="text-center">
			<h1>Conheça os Melhores Destinos do Brasil</h1>
			<hr>
		</header>

		<section>
			<div class="container" id="viagens">
				<div class="row" id="secoes">
					<div class="col-lg-4 col-md-5" id="noronha" onclick="exibirFN()">
						<a href="#noronha">
							<div class="box d-flex justify-content-center align-items-center">
								<p>Fernando de Noronha</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4" id="arraial" onclick="exibirAC()">
						<a href="#arraial">
							<div class="box d-flex justify-content-center align-items-center">
								<p>Arraial do Cabo</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-3" id="cabo" onclick="exibirCF()">
						<a href="#cabo">
							<div class="box d-flex justify-content-center align-items-center">
								<p>Cabo Frio</p>
							</div>
						</a>
					</div>
				</div><br>

				<div id="containerInt">
					<div class="content" id="fn">
						<div class="row">
							<figure class="col-md-4">
								<img src="assets/images/brasaoFN.png" height="250" />
							</figure>

							<div class="col-md-8">
								<h4>Fernando de Noronha</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
							</div>
						</div>

						<hr>
					</div>
					<div class="content" id="ac">
						<div class="row">
							<figure class="col-md-4 d-flex justify-content-start">
								<img src="assets/images/brasaoAC.png" height="250" />
							</figure>

							<div class="col-md-8">
								<h4>Arraial do Cabo</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
							</div>
						</div>

						<hr>
					</div>
					<div class="content" id="cf">
						<div class="row">
							<figure class="col-md-4">
								<img src="assets/images/brasaoCF.png" height="250" />
							</figure>

							<div class="col-md-8">
								<h4>Cabo Frio</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
							</div>
						</div>

						<hr>
					</div>
				</div>
			</div>
		</section>
	</div>

	<footer class="container-fluid" id="rodape">
		<div class="container d-flex justify-content-center">
			<img src="assets/images/brasilturismo.png" height="30"/>

			<span>&nbsp;&nbsp;&copy; 2018 Todos os direitos reservados</span>
		</div>
	</footer>

	<!-- JQUERY, POPPER, BOOTSTRAP -->
	<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		window.setInterval(exibirTopo(), 1000);
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<script>
var $doc = $('html, body');
$('.topoSuave').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});
</script>
</body>
</html>