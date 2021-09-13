<?php include('pageconfig/header.php'); ?>

	<header class="cd-header mt-3 mb-0 h-50">
		<h1 class="mb-0">Colour Animation</h1>
	</header>

	<style>
		.ui-widget-header {
			border: none !important;
		}
	</style>

	<div class="container mt-5">
		<div class="row mb-3">
			<div class="toggler col-6">
				<div class="effect bg-light">
					<h3 class="ui-widget-header p-3 bg-mars text-dark">Animate</h3>
					<p class="p-3">
						Toggle Width
					</p>
				</div>
			</div>
		</div>
		
		<div class="col-4">
            <button id="toggle-button" class="btn-nbs btn-jade fade-in top w-75">Toggle Effect</button>
        </div>
	</div>

	<script>
		$(function() {
			var state = true;
			let width = 0;
			$("#toggle-button").on("click", function() {
				if (state) {
					width = $('.effect').width() * 2;
					$(".effect").animate({
						backgroundColor: "#fff",
						color: "#2c3531",
						width: width
					}, 1000);0000
				} else {
					width = $('.effect').width() / 2;
					$(".effect").animate({
						backgroundColor: "#fff",
						color: "#2c3531",
						width: width
					}, 1000);
				}
				state = !state;
			});
		});
	</script>

<?php include('pageconfig/footer.php'); ?>