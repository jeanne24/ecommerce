<?php function getContent(){ ?>
	<div class="row main">
		<div class="col-md-12">
			<div class="row book_details">
				<div class="col-md-12">
					<h2>Book Title</h2>
					<div class="row">
						<div class="col-md-7">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							  </ol>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img class="d-block w-100" src="assets/images/fff.png" alt="First slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="assets/images/fff.png" alt="Second slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="assets/images/fff.png" alt="Third slide">
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
						</div>				
						<div class="col-md-5">
							<div class="side-detail">
								<p>Price: <span class="price">PP.PP</span></p>
								<p>Condition: <span class="condition">New/Old</span></p>
								<p>Views: <span class="Views">1234</span></p>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<i class="fas fa-shopping-cart fa-lg"> </i> Add To Cart
									</div>
									<div class="col-md-6">
										<i class="fas fa-heart fa-lg"> </i>Add To Favorites
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 details">
							<hr>
							<h5>Rating 
								<span class="rating">									
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
								</span></h5>
							<hr>
							<h5>Year </h5>
							<hr>
							<h5>Genre </h5>
							<hr>
							<h5>Review </h5>
							<table class="table table-striped">
								<tr>
									<td>
										<p class="review">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam dicta placeat neque, error doloremque labore corporis natus, dolorum, accusamus ratione dolore nostrum debitis voluptatum voluptas sapiente voluptate eaque reprehenderit.</p>
										
									</td>
								</tr>
								<tr>
									<td>
										<p class="review">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam dicta placeat neque, error doloremque labore corporis natus, dolorum, accusamus ratione dolore nostrum debitis voluptatum voluptas sapiente voluptate eaque reprehenderit.</p>
										
									</td>
								</tr>
								<tr>
									<td>
										<p class="review">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam dicta placeat neque, error doloremque labore corporis natus, dolorum, accusamus ratione dolore nostrum debitis voluptatum voluptas sapiente voluptate eaque reprehenderit.</p>
										
									</td>
								</tr>
							</table>
						</div>
					</div>					
				</div>				
			</div>
		</div>
	</div>
<?php };

function getTitle() {
	echo 'Rebook - Resell your old books, buy books for less.';
}
require_once "partials/template.php";
 ?>
