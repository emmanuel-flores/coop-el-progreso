@extends('layouts.app')

@section('noticias')
	class="active"
@endsection

@section('content')
<div id="container" class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<ol class="breadcrumb">
				<li><a href="/noticias">Noticias</a></li>
  				<li><a href="/noticias">Seccion</a></li>
  				<li class="active">Noticia</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1 noticia">
			<p class="encabezado">Miercoles, 01 de Enero de 2020</p>
			<h1>Thumbnail label</h1>
			<p class="copete">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna</p>
			<img class="img-responsive center-block noticia-img" src="assets/images/hacienda.png" alt="...">
			<p class="cuerpo p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p class="cuerpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p class="cuerpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>	
</div>
@endsection