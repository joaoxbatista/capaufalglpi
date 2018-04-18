<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="{{ asset('css/alertify.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	@yield('styles')
</head>
<body>
<!-- Menu -->


<nav id="menu">
	<div class="nav-wrapper blue dark-1">
		<div class="container">
			<a href="#" class="brand-logo">Universidade Federal de Alagoas Campus Arapiraca</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="{{ route('static.home') }}">Página Inicial</a></li>
				<!-- <li><a href="">Serviços</a></li> -->
				<li><a href="{{ route('dashboard.user.settings') }}">Configurações</a></li>
				
				@if(Auth::check())
				<li>
					<a href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						Sair
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
				@else
					<li><a href="{{ route('login') }}">Entrar</a></li>
				@endif
			</ul>
		</div>
	</div>
</nav>


<div id="content" style="min-height: 50vh">
	@yield('content')
</div>

<!-- Rodapé -->
<footer class="page-footer blue darken-1">
	<div class="container"> 
		<div class="row">
			<div class="col l4 s12">
				<h5 class="white-text">Campus de Arapiraca</h5>
				<p class="grey-text text-lighten-4"> 
					<ul>
						<li>Av. Manoel Severino Barbosa</li>
						<li>Bom Sucesso</li>
						<li>CEP:57309-005</li>
						<li>Arapiraca - AL</li>
					</ul>
				</div>
				
				<div class="col l4 s12">
					<h5 class="white-text">Contatos</h5>
					<ul>
						<li>Coordenação: 3414-1838</li>
						<li>Sistemas: 3414-1846</li>
						<li>Manutenção: 3414-1828</li>
						<li>Redes: 3414-1808</li>
						<li>NTI Palmeira dos Índios: 3414-8000</li>
					</ul>
				</div>
			</div>
			
			<div class="row"  style="margin-bottom: 0px">
				<div class="col s12">
					<div class="footer-copyright">
						© 2017 NTI Arapiraca, All rights reserved.
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{ asset('js/alertify.js') }}"></script>
	<script src="{{ asset('js/materialize.js') }}"></script>
	<script src="{{ asset('js/init.js') }}"></script>


	@if(Session::has('msg'))
		<script>
			alertify.logPosition("top right");
			alertify.success("Chamado realizado com sucesso!");
		</script>
	@endif


	<script>
		$(document).ready(function(){
			$('.collapsible').collapsible();
			$('select').material_select();
		});
	</script>
	<script>
		$('#flash-overlay-modal').modal();
	</script>
</body>
</html>
