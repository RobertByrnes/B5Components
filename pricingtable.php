<?php include('pageconfig/pricingtable.header.php'); ?>

	<header class="cd-header">
		<h1>Your Plan</h1>
	</header>

	<div class="cd-pricing-container cd-full-width cd-secondary-theme">
		<div class="cd-pricing-switcher">
			<p class="fieldset">
				<input type="radio" name="duration-1" data-name="Weekly" value="weekly" id="weekly-1" checked>
				<label id="Weekly" for="weekly-1">Weekly<span class="cd-switch">Weekly</span></label>
				<input type="radio" name="duration-1" data-name="Monthly" value="monthly" id="monthly-1">
				<label id="Monthly" for="monthly-1">Monthly</label>
				<input type="radio" name="duration-1" data-name="Quarterly" value="quarterly" id="quarterly-1">
				<label id="Quarterly" for="quarterly-1">Quarterly</label>
				<input type="radio" name="duration-1" data-name="Yearly" value="yearly" id="yearly-1">
				<label id="Yearly" for="yearly-1">Yearly</label>
			</p>
		</div> <!-- .cd-pricing-switcher -->

		<ul class="cd-pricing-list cd-bounce-invert">

			<li class="cd-popular">
				<ul class="cd-pricing-wrapper">

					<li data-type="weekly" class="is-visible"><!-- card 1 -->
						<header class="cd-pricing-header">
							<h2>Popular</h2>

							<div class="cd-price">
								<span class="cd-currency">£</span>
								<span class="cd-value">60</span>
								<span class="cd-duration">wk</span>
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<li><em>512MB</em> Memory</li>
								<li><em>3</em> Users</li>
								<li><em>5</em> Websites</li>
								<li><em>7</em> Domains</li>
								<li><em>Unlimited</em> Bandwidth</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
						</footer> <!-- .cd-pricing-footer -->
					</li>
                    
					<li data-type="monthly" class="is-hidden"><!-- card 2 -->
						<header class="cd-pricing-header">
							<h2>Popular</h2>

							<div class="cd-price">
								<span class="cd-currency">£</span>
								<span class="cd-value">60</span>
								<span class="cd-duration">mo</span>
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<li><em>512MB</em> Memory</li>
								<li><em>3</em> Users</li>
								<li><em>5</em> Websites</li>
								<li><em>7</em> Domains</li>
								<li><em>Unlimited</em> Bandwidth</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
						</footer> <!-- .cd-pricing-footer -->
					</li>

					<li data-type="quarterly" class="is-hidden"><!-- card 3 -->
						<header class="cd-pricing-header">
							<h2>Popular</h2>

							<div class="cd-price">
								<span class="cd-currency">£</span>
								<span class="cd-value">60</span>
								<span class="cd-duration">qtr</span>
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<li><em>512MB</em> Memory</li>
								<li><em>3</em> Users</li>
								<li><em>5</em> Websites</li>
								<li><em>7</em> Domains</li>
								<li><em>Unlimited</em> Bandwidth</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
						</footer> <!-- .cd-pricing-footer -->
					</li>

					<li data-type="yearly" class="is-hidden"><!-- card 4 -->
						<header class="cd-pricing-header">
							<h2>Popular</h2>

							<div class="cd-price">
								<span class="cd-currency">£</span>
								<span class="cd-value">630</span>
								<span class="cd-duration">yr</span>
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<li><em>512MB</em> Memory</li>
								<li><em>3</em> Users</li>
								<li><em>5</em> Websites</li>
								<li><em>7</em> Domains</li>
								<li><em>Unlimited</em> Bandwidth</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
						</footer> <!-- .cd-pricing-footer -->
					</li>
				</ul>
			</li> <!-- .cd-pricing-wrapper -->
		</ul> <!-- .cd-pricing-list -->
	</div> <!-- .cd-pricing-container -->

<?php include('pageconfig/pricingtable.footer.php'); ?>