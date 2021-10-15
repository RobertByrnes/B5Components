<?php include('pageconfig/admoto-header.php'); ?>

<?php 
	$formData = [
		//slots
		'displays' 			=> array(
			'starter'			=> 3360,
			'impactor' 			=> 10080,
			'influencer' 		=> 16800,
			'dominator' 		=> 33600
		),
		'duration' 			=> array(4,12,26,52),
		'total_campaigns' 	=> array(1,4,12),
		'cost_display' 		=> array(0.05),
		'total_cost'		=> array(
			'starter'			=> array(
				'4'					=> 280.00,
				'12' 				=> 798.00,
				'26' 				=> 1638.00,
				'52' 				=> 3094.00
			),
			'impactor'			=> array(
				'4'					=> 798.00,
				'12' 				=> 2268.00,
				'26' 				=> 4641.00,
				'52' 				=> 8736.00
			),
			'influencer'		=> array(
				'4'					=> 1260.00,
				'12' 				=> 3570.00,
				'26' 				=> 7280.00,
				'52' 				=> 13650.00
			),
			'dominator'			=> array(
				'4'					=> 2380.00,
				'12' 				=> 6720.00,
				'26' 				=> 13650.00,
				'52' 				=> 25480.00
			)
		),
		'weekly_cost'		=> array(
			'starter'			=> array(
				'4'					=> 70,
				'12' 				=> 66.5,
				'26' 				=> 63,
				'52' 				=> 59.5
			),
			'impactor'			=> array(
				'4'					=> 66.5,
				'12' 				=> 63,
				'26' 				=> 59.5,
				'52' 				=> 56
			),
			'influencer'		=> array(
				'4'					=> 63,
				'12' 				=> 59.5,
				'26' 				=> 56,
				'52' 				=> 52.5
			),
			'dominator'			=> array(
				'4'					=> 59.5,
				'12' 				=> 56,
				'26' 				=> 52.5,
				'52' 				=> 49
			)
		),
		'plans'				=> array('Starter', 'Impactor', 'Influencer', 'Dominator')
	];
?>

<div class="container-fluid p-5">
	<div class="row text-center my-5">
		<h1>Your Plan</h1>
	</div>
	<div class="pricing-switcher">
		<p class="fieldset">
			<input type="radio" name="duration-1" data-name="Starter" value="starter" id="starter-1" checked>
			<label id="Starter" for="starter-1">Starter<span class="cd-switch">Starter</span></label>
			<input type="radio" name="duration-1" data-name="Impactor" value="impactor" id="impactor-1">
			<label id="Impactor" for="impactor-1">Impactor</label>
			<input type="radio" name="duration-1" data-name="Influencer" value="influencer" id="influencer-1">
			<label id="Influencer" for="influencer-1">Influencer</label>
			<input type="radio" name="duration-1" data-name="Dominator" value="dominator" id="dominator-1">
			<label id="Dominator" for="dominator-1">Dominator</label>
		</p>
	</div>
	<!-- flip-card -->
	<div id="your-plan" class="row justify-content-center mt-5">
		<div class="col-lg-3 col-md-12 mb-4">
			<div class="h-100 flip-card">
				<div id="flip" class="flip-card-inner">
					<div class="flip-side front">
						<div class="flip-card-style rounded">
							<form id="campaign-form" method="" action="">
								<div class="form-group mb3">
									<label for="displays" class="form-label"><h2 class="card-title">Displays</h2></label>
									<span><input id="displays" type="text" class="form-control w-25 mx-auto text-center" value="" name="" readonly /><small class="ms-1">/wk</small></span>
								</div>
								<div class="form-group mb-3">
									<label for="duration" class="form-label"><h2 class="card-title">Duration</h2></label>
									<select id="duration" class="form-control w-25 mx-auto text-center" name="" >
										<?php foreach($formData['duration'] as $duration) { echo "<option value=".$duration.">$duration<span id='week-text'> Weeks</span></option>"; } ?>
									</select>
								</div>
								<div class="form-group mb-3">
									<label for="total_campaigns" class="form-label"><h2 class="card-title">Total Campaigns</h2></label>
									<input id="total_campaigns" type="text" class="form-control w-25 mx-auto text-center" value="12" name="" readonly />
								</div>
								<div class="form-group mb-3">
									<label for="total_displays" class="form-label"><h2 class="card-title">Total Displays</h2></label>
									<input id="total_displays" type="text" class="form-control w-25 mx-auto text-center" value="" name="" readonly />
								</div>
								<div class="form-group mb-3">
									<label for="cost_display" class="form-label"><h2 class="card-title">Cost / Display</h2></label>
									<input id="cost_display" type="text" class="form-control w-25 mx-auto text-center" value="" name="" readonly />
								</div>
							</form>
						</div>
					</div>
					<div class="flip-side back">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(() => {
		$('#flip').flip({trigger:'manual'})
		let radios = $(document).find('input[type="radio"]')
		$(radios).on('click', (event) => {
			$("input[name='duration-1']").each(function() {
				$(this).attr('checked', false)
				$(this).parent().find('span').remove('.cd-switch')
			})
			let html = '<span class="cd-switch">' + $(event.target).data('name') + '</span>'
			$(html).hide().appendTo('#' + $(event.target).data('name') + '').fadeIn(150)
			$('#flip').flip('toggle', {reverse: false})
			// if ($('#flip-side').hasClass('front')) {
			// 	$('.front >.child').appendTo($('.back'))
			// } else {
			// 	$('.front >.child').appendTo($('.back'))
			// }
		})
		let duration = parseInt($('#duration').val())
		let displays = parseInt('<?php echo $formData['displays']['starter']; ?>')
		$('#displays').val(displays)
		$('#total_displays').val(duration * displays)
		$('#duration').on('change', () => {
			duration = parseInt($('#duration').val())
			$('#total_displays').val(duration * displays)
		})
		$('#cost_display').val('<?php echo $formData['cost_display'][0]; ?>')

		$('input[type="radio"]').on('change', () => {

		})
	})
</script>

<?php include('pageconfig/admoto-footer.php'); ?>