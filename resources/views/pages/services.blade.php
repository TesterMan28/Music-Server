@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4">{{$title}}</h1>

<!-- Card deck -->
<div class="card-deck">
	<!-- Card -->
	<div class="card mb-4 services-cards text-center front">

	<!--Carousel Wrapper-->
		<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
			<!--Indicators-->
			<ol class="carousel-indicators">
			<li data-target="#carousel-example-1z" data-slide-to="0" class="active" style="width: 10px; height: 10px; border-radius: 100%"></li>
			<li data-target="#carousel-example-1z" data-slide-to="1" style="width: 10px; height: 10px; border-radius: 100%"></li>
			<li data-target="#carousel-example-1z" data-slide-to="2" style="width: 10px; height: 10px; border-radius: 100%"></li>
			</ol>
			<!--/.Indicators-->
			<!--Slides-->
			<div class="carousel-inner" role="listbox">
			<!--First slide-->
			<div class="carousel-item active">
				<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
				alt="First slide">
			</div>
			<!--/First slide-->
			<!--Second slide-->
			<div class="carousel-item">
				<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
				alt="Second slide">
			</div>
			<!--/Second slide-->
			<!--Third slide-->
			<div class="carousel-item">
				<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
				alt="Third slide">
			</div>
			<!--/Third slide-->
			</div>
			<!--/.Slides-->
			<!--Controls-->
			<!--
				<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			-->
			<!--/.Controls-->
		</div>
		<!--/.Carousel Wrapper-->

		<!--Card content-->
		<div class="card-body">

			<!--Title-->
			<h4 class="card-title">Card title 1</h4>
			<!--Text-->
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
			content.</p>
			<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			<button type="button" class="btn btn-primary btn-md">Read more</button>
	
		</div>

	</div>
	<!-- Card -->
			
		
  
	<!-- Card -->
	<div class="card mb-4 services-cards text-center">
  
	  <!--Card image-->
	  <div class="view overlay">
		<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
		  alt="Card image cap">
		<a href="#!">
		  <div class="mask rgba-white-slight"></div>
		</a>
	  </div>
  
	  <!--Card content-->
	  <div class="card-body">
  
		<!--Title-->
		<h4 class="card-title">Card title 2</h4>
		<!--Text-->
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
		  content.</p>
		<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
		<button type="button" class="btn btn-primary btn-md">Read more</button>
  
	  </div>
  
	</div>
	<!-- Card -->
  
	<!-- Card -->
	<div class="card mb-4 services-cards text-center">
  
	  <!--Card image-->
	  <div class="view overlay">
		<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
		  alt="Card image cap">
		<a href="#!">
		  <div class="mask rgba-white-slight"></div>
		</a>
	  </div>
  
	  <!--Card content-->
	  <div class="card-body">
  
		<!--Title-->
		<h4 class="card-title">Card title 3</h4>
		<!--Text-->
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
		  content.</p>
		<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
		<button type="button" class="btn btn-primary btn-md">Read more</button>
  
	  </div>
  
	</div>
	<!-- Card -->
  
  </div>
  <!-- Card deck -->

<!-- Card deck -->
<div class="card-deck">

	<!-- Card -->
	<div class="card mb-4 services-cards text-center">
  
	  <!--Carousel Wrapper-->
		<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
			<!--Indicators-->
			<ol class="carousel-indicators">
			<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-1z" data-slide-to="1"></li>
			<li data-target="#carousel-example-1z" data-slide-to="2"></li>
			</ol>
			<!--/.Indicators-->
			<!--Slides-->
			<div class="carousel-inner" role="listbox">
			<!--First slide-->
			<div class="carousel-item active">
				<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
				alt="First slide">
			</div>
			<!--/First slide-->
			<!--Second slide-->
			<div class="carousel-item">
				<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
				alt="Second slide">
			</div>
			<!--/Second slide-->
			<!--Third slide-->
			<div class="carousel-item">
				<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
				alt="Third slide">
			</div>
			<!--/Third slide-->
			</div>
			<!--/.Slides-->
			<!--Controls-->
			<!--
				<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			-->
			<!--/.Controls-->
		</div>
		<!--/.Carousel Wrapper-->

		<!--Card content-->
		<div class="card-body">

			<!--Title-->
			<h4 class="card-title">Card title 4</h4>
			<!--Text-->
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
			  content.</p>
			<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
			<button type="button" class="btn btn-primary btn-md">Read more</button>
	  
		</div>
  
	</div>
	<!-- Card -->
  
	<!-- Card -->
	<div class="card mb-4 services-cards text-center">
  
	  <!--Card image-->
	  <div class="view overlay">
		<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
		  alt="Card image cap">
		<a href="#!">
		  <div class="mask rgba-white-slight"></div>
		</a>
	  </div>
  
	  <!--Card content-->
	  <div class="card-body">
  
		<!--Title-->
		<h4 class="card-title">Card title 5</h4>
		<!--Text-->
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
		  content.</p>
		<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
		<button type="button" class="btn btn-primary btn-md">Read more</button>
  
	  </div>
  
	</div>
	<!-- Card -->
  
	<!-- Card -->
	<div class="card mb-4 services-cards text-center">
  
	  <!--Card image-->
	  <div class="view overlay">
		<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
		  alt="Card image cap">
		<a href="#!">
		  <div class="mask rgba-white-slight"></div>
		</a>
	  </div>
  
	  <!--Card content-->
	  <div class="card-body">
  
		<!--Title-->
		<h4 class="card-title">Card title 6</h4>
		<!--Text-->
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
		  content.</p>
		<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
		<button type="button" class="btn btn-primary btn-md">Read more</button>
  
	  </div>
  
	</div>
	<!-- Card -->
  
  </div>
  <!-- Card deck -->


@endsection