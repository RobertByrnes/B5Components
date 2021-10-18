<?php include('pageconfig/admoto-header.php'); ?>

<?php 
	$formData = [
		//slots
		'displays' 			=> array(
			'Starter'			=> 3360,
			'Impactor' 			=> 10080,
			'Influencer' 		=> 16800,
			'Dominator' 		=> 33600
		),
		'duration' 			=> array(4,12,26,52),
		'total_campaigns' 	=> array(1,4,12),
		'cost_display' 		=> array(0.02),
		'total_cost'		=> array(
			'Starter'			=> array(
				'4'					=> 280.00,
				'12' 				=> 798.00,
				'26' 				=> 1638.00,
				'52' 				=> 3094.00
			),
			'Impactor'			=> array(
				'4'					=> 798.00,
				'12' 				=> 2268.00,
				'26' 				=> 4641.00,
				'52' 				=> 8736.00
			),
			'Influencer'		=> array(
				'4'					=> 1260.00,
				'12' 				=> 3570.00,
				'26' 				=> 7280.00,
				'52' 				=> 13650.00
			),
			'Dominator'			=> array(
				'4'					=> 2380.00,
				'12' 				=> 6720.00,
				'26' 				=> 13650.00,
				'52' 				=> 25480.00
			)
		),
		'weekly_cost'		=> array(
			'Starter'			=> array(
				'4'					=> 70,
				'12' 				=> 66.5,
				'26' 				=> 63,
				'52' 				=> 59.5
			),
			'Impactor'			=> array(
				'4'					=> 66.5,
				'12' 				=> 63,
				'26' 				=> 59.5,
				'52' 				=> 56
			),
			'Influencer'		=> array(
				'4'					=> 63,
				'12' 				=> 59.5,
				'26' 				=> 56,
				'52' 				=> 52.5
			),
			'Dominator'			=> array(
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
		<h1 class="text-dark">Your Plan</h1>
	</div>
	<div class="pricing-switcher">
		<p class="fieldset">
			<input type="radio" name="duration-1" data-name="Starter" value="starter" id="starter-1" checked>
			<label id="Starter" for="starter-1" class="text-dark">Starter<span class="switch">Starter</span></label>
			<input type="radio" name="duration-1" data-name="Impactor" value="impactor" id="impactor-1">
			<label id="Impactor" for="impactor-1" class="text-dark">Impactor</label>
			<input type="radio" name="duration-1" data-name="Influencer" value="influencer" id="influencer-1">
			<label id="Influencer" for="influencer-1" class="text-dark">Influencer</label>
			<input type="radio" name="duration-1" data-name="Dominator" value="dominator" id="dominator-1">
			<label id="Dominator" for="dominator-1" class="text-dark">Dominator</label>
		</p>
	</div>
	<!-- flip-card -->
	<div id="your-plan" class="row justify-content-center mt-5">
		<div class="col-md-8 col-sm-12 mb-4">
			<div class="h-100 flip-card">
				<div id="flip" class="flip-card-inner">
					<div class="flip-side front">
						<div id="card-view" class="flip-card-style rounded">
							<div class="w-50 mx-auto d-flex justify-content-center fs-2 mb-5">
								<span class="text-center">Just £
									<span id="weekly_cost"><?php echo $formData['weekly_cost']['Starter']['4']; ?></span>
								</span>
								<span class="ms-2">/wk</span>
							</div>

							<!-- <span class="w-50 mx-auto d-flex justify-content-center fs-2 mb-5">Just £<?php echo $formData['weekly_cost']['Starter']['4']; ?> /wk</span> -->
							<form id="campaign-form" method="" action="">
								<div class="form-group mb-3">
									<label for="displays" class="form-label"><h2 class="card-title">Displays</h2></label>
									<div class="input-group w-50 mx-auto input-style">
										<input id="displays" type="text" class="form-control input-style text-start" value="" name="" aria-describedby="displays-week" readonly />
										<span class="input-group-text input-style" id="displays-week">/wk</span>
									</div>
								</div>
								<hr class="w-75 mx-auto bg-light">
								<div class="form-group mb-3">
									<label for="duration" class="form-label wiggle-sm"><h2 class="card-title">Duration</h2></label>
									<div class="input-group w-50 mx-auto input-style">
										<select id="duration" class="form-control input-style text-start" name="" aria-describedby="arrow">
											<?php foreach($formData['duration'] as $duration) { echo "<option class='input-style' value=".$duration.">$duration<span id='week-text'> Weeks</span></option>"; } ?>
										</select>
										<span class="input-group-text input-style" id="arrow">&#8691;</span>
									</div>
								</div>
								<hr class="w-75 mx-auto bg-light">
								<div class="form-group mb-3">
									<label for="total_campaigns" class="form-label"><h2 class="card-title">Total Campaigns</h2></label>
									<input id="total_campaigns" type="text" class="form-control w-50 mx-auto text-center input-style" value="12" name="" readonly />
								</div>
								<hr class="w-75 mx-auto bg-light">
								<div class="form-group mb-3">
									<label for="total_displays" class="form-label"><h2 class="card-title">Total Displays</h2></label>
									<input id="total_displays" type="text" class="form-control w-50 mx-auto text-center input-style" value="" name="" readonly />
								</div>
								<hr class="w-75 mx-auto bg-light">
								<div class="form-group mb-3">
									<label for="cost_display" class="form-label"><h2 class="card-title">Cost / Display</h2></label>
									<div class="input-group w-50 mx-auto input-style">
										<span class="input-group-text input-style" id="cost-per-display">£</span>
										<input id="cost_display" type="text" class="form-control text-end input-style" value="" name=""  aria-describedby="cost-per-display" readonly />
									</div>
								</div>
								<hr class="w-75 mx-auto bg-light">
								<div class="w-50 mx-auto d-flex justify-content-center fs-2">
									<span class="text-center">Total Cost</span><br>
								</div>
								<div class="w-50 mx-auto d-flex justify-content-center fs-2 mb-5">
									<span class="text-center">£
										<span id="total_cost"><?php echo $formData['total_cost']['Starter']['4']; ?></span>
									</span>
									<span class="ms-2">
										<span id="duration-text">4</span>/wks
									</span>
								</div>
								<div class="d-flex justify-content-center">
									<button id="proposal" type="button" class="btn btn-lg btn-outline-spruce text-spruce fs-3 top col-4 mx-3">Proposal</button>
									<button id="back" type="button" class="btn btn-lg btn-outline-lemon text-lemon fs-3 top col-4 mx-3">Back</button>
								</div>
							</form>
						</div>
					</div>
					<div class="flip-side back"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	let selectedPlan = 'Starter'
	let selectedDuration = 4
	let plans = JSON.parse('<?php echo json_encode($formData['plans'], true); ?>')
	let durations = JSON.parse('<?php echo json_encode($formData['duration'], true); ?>')
	let displays = JSON.parse('<?php echo json_encode($formData['displays'], true); ?>')
	let totalCost = JSON.parse('<?php echo json_encode($formData['total_cost'], true); ?>')
	let weeklyCost = JSON.parse('<?php echo json_encode($formData['weekly_cost'], true); ?>')
	console.log(totalCost)

	let changePlan = (planName) => {
		$(plans).each((index, elem) => {
			if (planName === elem) {
				selectedPlan = planName
				console.log(selectedPlan)
				console.log(selectedDuration)
				$('#displays').val(displays[selectedPlan])
				$('#total_cost').empty().text(totalCost[selectedPlan][selectedDuration])
				$('#weekly_cost').empty().text(weeklyCost[selectedPlan][selectedDuration])
			}
		})
	}

	let changeDuration = (duration) => {
		$(durations).each((index, elem) => {
			if (duration === elem) {
				selectedDuration = duration
				console.log(selectedPlan)
				console.log(selectedDuration)
				$('#total_cost').empty().text(totalCost[selectedPlan][selectedDuration])
				$('#weekly_cost').empty().text(weeklyCost[selectedPlan][selectedDuration])
			}
		})
	}

	$(() => {
		$('#flip').flip({trigger:'manual'})
		let toggle = 'front'
		let radios = $(document).find('input[type="radio"]')
		let duration = parseInt($('#duration').val())
		let displays = parseInt('<?php echo $formData['displays']['Starter']; ?>')

		$('#displays').val(displays)
		$('#total_displays').val(duration * displays)
		$('#cost_display').val('<?php echo $formData['cost_display'][0]; ?>')

		$('#duration').on('change', () => {
			duration = parseInt($('#duration').val())
			$('#total_displays').val(duration * displays)
			changeDuration(duration)
		})
		
		$(radios).on('click', (event) => {
			$("input[name='duration-1']").each(function() {
				$(this).attr('checked', false)
				$(this).parent().find('span').remove('.switch')
			})
			let html = '<span class="switch">' + $(event.target).data('name') + '</span>'
			$(html).hide().appendTo('#' + $(event.target).data('name') + '').fadeIn(150)
			$('#flip').flip('toggle', {reverse: false})
			if (toggle === 'front') {
				$('#card-view').appendTo($('.back'))
				toggle = 'back'
			} else {
				$('#card-view').appendTo($('.front'))
				toggle = 'front'
			}
			changePlan($(event.target).data('name'))
		})
	})
</script>

<?php include('pageconfig/admoto-footer.php'); ?>