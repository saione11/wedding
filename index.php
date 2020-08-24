<?php 
include 'header.php';
?>
<!-- carosel slide -->
<div id="carouselExampleCaptions" class="carousel slide mt-5 pt-4" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/banner1.jpeg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5>First slide label</h5>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="images/banner1.jpeg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5>Second slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="images/banner1.jpeg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5>Third slide label</h5>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- end carousel -->

<div class="container py-5">
	<h3 class="popcat text-center" style="color: #debe50">Popular Categories</h3>
	<hr class="divider">
	<div class="row offset-2">
		<div class="col-md-3 py-2">
			<div class="card">
				<a href="">
					<img src="images/f8.jpg" class="flu img-fluid">
					<div class="overlay1">
						<div class="text2">Venue</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-3 py-2">
			<div class="card">
				<a href="">
					<img src="images/f8.jpg" class="flu img-fluid">
					<div class="overlay1">
						<div class="text2">Food</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-3 py-2">
			<div class="card">
				<a href="">
					<img src="images/f8.jpg" class="flu img-fluid">
					<div class="overlay1">
						<div class="text2">Dress</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 py-2">
			<div class="card">
				<a href="">
					<img src="images/f8.jpg" class="flu img-fluid">
					<div class="overlay1">
						<div class="text2">Flower</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-3 py-2">
			<div class="card">
				<a href="">
					<img src="images/f8.jpg" class="flu img-fluid">
					<div class="overlay1">
						<div class="text2">Jewellery</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-3 py-2">
			<div class="card">
				<a href="">
					<img src="images/f8.jpg" class="flu img-fluid">
					<div class="overlay1">
						<div class="text2">Wedding Photo</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-3 py-2">
			<div class="card">
				<a href="">
					<img src="images/f8.jpg" class="flu img-fluid">
					<div class="overlay1">
						<div class="text2">Make-up Artist</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>






<?php 
include 'footer.php';
?>