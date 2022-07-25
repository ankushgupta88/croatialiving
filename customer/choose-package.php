<?php include_once("../header.php"); ?>

<?php //Check if user is login or not
if(empty($_SESSION['login_agent_detail'])){
    header('location: '.WEBSITEURL); 
} ?>

	<!--<div class="page-title" style="background:#f4f4f4 url(<?php echo WEBSITEURL; ?>assets/img/slider-5.jpg);" data-overlay="5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="breadcrumbs-wrap">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active" aria-current="page">Choose Package</li>
						</ol>
						<h2 class="breadcrumb-title">Select Your Membership</h2> </div>
				</div>
			</div>
		</div>
	</div>-->
	<section class="gray pt-5 pb-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<?php include_once("sidebar.php"); ?>
				</div>
				<div class="col-lg-9 col-md-8">
					<div class="dashboard-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div id="extraPackages">
									<div class="row">
										<!-- Single Package -->
										<div class="col-lg-4 col-md-4 c-l-sm-12">
											<div class="package-box"> <span class="theme-cl">Gold Package</span>
												<h4 class="packages-features-title">USD 49 / 1 year</h4>
												<ul class="packages-lists-list">
													<li>Unlimited listings</li>
													<li>100 Featured</li>
													<li>Unlimited Images</li>
													<li>Help & Support</li>
												</ul>
												<div class="buypackage">
													<div class="switchbtn paying">
														<input id="gold" class="switchbtn-checkbox" type="radio" value="2" checked name="package7">
														<label class="switchbtn-label" for="gold"></label>
													</div> <span>Switch to this package</span> </div>
											</div>
										</div>
										<!-- Single Package -->
										<div class="col-lg-4 col-md-4 c-l-sm-12">
											<div class="package-box"> <span class="theme-cl">Premium Package</span>
												<h4 class="packages-features-title">USD 39 / 1 year</h4>
												<ul class="packages-lists-list">
													<li>20 listings</li>
													<li>5 Featured</li>
													<li>5 Images/ per list</li>
													<li>Help & Support</li>
												</ul>
												<div class="buypackage">
													<div class="switchbtn paying">
														<input id="premium" class="switchbtn-checkbox" type="radio" value="2" name="package7">
														<label class="switchbtn-label" for="premium"></label>
													</div> <span>Switch to this package</span> </div>
											</div>
										</div>
										<!-- Single Package -->
										<div class="col-lg-4 col-md-4 c-l-sm-12">
											<div class="package-box"> <span class="theme-cl">Standard Package</span>
												<h4 class="packages-features-title">USD 10 / 1 year</h4>
												<ul class="packages-lists-list">
													<li>10 listings</li>
													<li>2 Featured</li>
													<li>2 Images</li>
													<li>Help & Support</li>
												</ul>
												<div class="buypackage">
													<div class="switchbtn paying">
														<input id="standard" class="switchbtn-checkbox" type="radio" value="2" name="package7">
														<label class="switchbtn-label" for="standard"></label>
													</div> <span>Switch to this package</span> </div>
											</div>
										</div>
									</div>
									<div class="row mt-5">
										<div class="col-lg-12 col-md-12">
											<h4>Payment Method</h4> </div>
										<div class="col-lg-12 col-md-12"> <a href="#" class="pay-btn paypal">Pay with PayPal</a> <a href="#" class="pay-btn stripe">Pay with Stripe</a> <a href="#" class="pay-btn wire-trans">Wire Transfer</a> </div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="theme-bg call_action_wrap-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="call_action_wrap">
						<div class="call_action_wrap-head">
							<h3>Do You Have Questions ?</h3> <span>We'll help you to grow your career and growth.</span> </div> <a href="<?php echo WEBSITEURL; ?>contactus.php" class="btn btn-call_action_wrap">Contact Us Today</a> </div>
				</div>
			</div>
		</div>
	</section>
<?php include_once("../footer.php");?>