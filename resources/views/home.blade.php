@extends('layouts.app')

@section('inicio')
	class="active"
@endsection

@section('content')
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol id="carousel-indicators" class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
					<img id="carousel-img" src="assets/images/autoservicio.png" alt="...">
					<div id="carousel" class="carousel-caption">
						<h3>AUTOSERVICIO</h3>
					</div>
			</div>
			<div class="item">
					<img id="carousel-img" src="assets/images/ferreteria.png" alt="...">
					<div id="carousel" class="carousel-caption">
						<h3>FERRETERIA</h3>
					</div>
			</div>
			<div class="item">
					<img id="carousel-img" src="assets/images/Veterinaria.png" alt="...">
					<div id="carousel" class="carousel-caption">
						<h3>VETERINARIA</h3>
					</div>
			</div>
			<div class="item">
					<img id="carousel-img" src="assets/images/ypf.png" alt="...">
					<div id="carousel" class="carousel-caption">
						<h3>YPF</h3>
					</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="container">
		<p><strong>La Cooperativa Agropecuaria «El Progreso» de Henderson</strong> se formó el 20 de octubre del año 1948, ante la necesidad de un grupo de trabajadores de la tierra, para defender de manera justa su producción, abaratar costos en insumos e integrarse socialmente, siguiendo los principios cooperativos. Siempre priorizando el bien común por sobre el individual.</p>
		<P>Estamos al servicio del productor agropecuario, comprometidos con los principios e ideales cooperativos. Gozamos de una solida situación patrimonial y contamos con una importante la capacidad financiera.</P>   
	</div>
@endsection