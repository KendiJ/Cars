@extends('layouts/app')

@section('title', 'Cars')

@section('content')

<div class="container">
		<h4 class="section-title text-center m-5">Thrill Speed</h4>
	<div class="container">
			<div class="py-4">
					<div class="row">
		<div class="card-deck">
			<div class="col-md-12 ">
			  <div class="card mb-4">
				<img class="card-img-top" src="{{asset('images/common/sport cars/audi-R8.jpg')}}" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Audi R8</h4>
				  <p class="card-text">The Audi R8 Spyder looks as thrilling as it drives. From its striking front grille to the updated oval exhaust outlets — a nod to the signature styling and heritage of the Audi Sport family — the R8 Spyder exudes sport appeal throughout.</p>
				  <a class="btn btn-primary btn-pill" href="https://www.audiusa.com/models/audi-r8-spyder">Read More &rarr;</a>
				</div>
			  </div>
			</div>

			<div class="col-md-12 ">
					<div class="card mb-4">
					  <img class="card-img-top" src="{{asset('images/common/sport cars/chevrolet-corvette.jpg')}}" alt="Card image cap">
					  <div class="card-body">
						<h4 class="card-title">Chevrolet Corvette</h4>
						<p class="card-text">Class, style and speed is the altimate precision to this one of a kind sports car.</p>
						<a class="btn btn-primary btn-pill" href="https://www.chevrolet.com/performance/corvette-stingray-sports-car">Read More &rarr;</a>
					  </div>
					</div>
				  </div>
				  <div class="col-md-12 ">
						<div class="card mb-4">
						  <img class="card-img-top" src="{{asset('images/common/sport cars/hondas200.jpg')}}" alt="Card image cap">
						  <div class="card-body">
							<h4 class="card-title">Honda s200</h4>
							<p class="card-text">A rare classical sports car but still got the thrill of a lifetime.</p>
							<a class="btn btn-primary btn-pill" href="https://en.wikipedia.org/wiki/Honda_S2000">Read More &rarr;</a>
						  </div>
						</div>
					  </div>
					  <div class="col-md-12 ">
							<div class="card mb-4">
							  <img class="card-img-top" src="{{asset('images/common/sport cars/lamboAve.jpg')}}" alt="Card image cap">
							  <div class="card-body">
								<h4 class="card-title">Lamboghini Aventador Coupé</h4>
								<p class="card-text">A true design gem that expresses dynamism and aggression, which has made the carbon-fiber monocoque the symbol of the innovation from our R&D department. The result is a car that offers a truly unforgettable driving experience. The adrenaline remains even after turning off the engine.</p>
								<a class="btn btn-primary btn-pill" href="https://www.lamborghini.com/en-en/brand/masterpieces/aventador-coupe">Read More &rarr;</a>
							  </div>
							</div>
						  </div>
						  <div class="col-md-12 ">
								<div class="card mb-4">
								  <img class="card-img-top" src="{{asset('images/common/sport cars/porsche911.jpg')}}" alt="Card image cap">
								  <div class="card-body">
									<h4 class="card-title">Porsche 911 Carrera</h4>
									<p class="card-text">The best sport cars of all times.</p>
									<a class="btn btn-primary btn-pill" href="https://www.porsche.com/international/models/911/911-carrera-models/carrera/">Read More &rarr;</a>
								  </div>
								</div>
							  </div>
											
	</div>
</div>

@stop


















