<?php function getContent(){ ?>
	<div class="row">
		<div class="col-12 hero">
			<form action="" method="get" accept-charset="utf-8">
				<h2>All Books are classics. Sell your old books and discover second hand books for less.</h2>
				<h3>Find it and ReBook</h3>
				<?php require "partials/search_bar.php";?>
			</form>
		</div>
	</div>
	<div class="row section2">
		<div class="col-12 inner-section2">
			<div class="row">
				<div class="col-md-3 feature"></div>
				<div class="col-md-3 feature"></div>
				<div class="col-md-3 feature"></div>
				<div class="col-md-3 feature"></div>
			</div>
			<div class="row">
				<div class="col-md-4 feature1"></div>
				<div class="col-md-4 feature1"></div>
				<div class="col-md-4 feature1"></div>
			</div>
			<div class="row">
				<div class="col-md-6 feature2"></div>
				<div class="col-md-6 feature2"></div>
			</div>
		</div>
	</div>
<?php };

function getTitle() {
	echo 'Rebook - Resell your old books, buy books for less.';
}
require_once "partials/template.php";
 ?>
