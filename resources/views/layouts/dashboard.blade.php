<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1-rc2/jquery.min.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
</head>
<body>
	<div id="app">
		
		<nav class="blue">
			<div class="nav-wrapper container">
				<a href="#" class="brand">Universidade Federal de Alagoas - Arapiraca</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a><i class="material-icons right">list</i>Serviços</a></li>
					<li><a><i class="material-icons right">info</i>Informações</a></li>
					<li><a href="{{ route('glpi.logout') }}"><i class="material-icons right">power_settings_new</i></a></li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col m12">
					@yield('content')
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container" id="developed" style="margin-top: 50px;">
			<div class="row" style="margin-bottom: 0px;">
				<div class="col m4">
					<div class="card grey lighten-2 grey-text center">
						<div class="card-content">
							<img src="http://www.ufal.edu.br/++theme++ufal.tema.tematico/++theme++ufal.tema.tematico/imgs/brasao.png" height="50px">
							<p>Universidade Federal de Alagoas</p>
						</div>
					</div>	
				</div>

				<div class="col m4">
					<div class="card grey lighten-2 grey-text center">
						<div class="card-content">
							<img src="http://www.ufal.edu.br/nti/imagens/logomarca.png-1" height="50px">
							<p>Núcleo de Tecnologia da Informação</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</footer>
	<script>
		$(document).ready(function() {
			$('select').material_select();
		});
	</script>
</body>
</html>