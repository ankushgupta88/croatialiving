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
							<li class="breadcrumb-item active" aria-current="page">Change Password</li>
						</ol>
						<h2 class="breadcrumb-title">Edit or Change Password</h2> </div>
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
						<div class="dashboard-wraper">
							<!-- Basic Information -->
							<div class="frm_submit_block">
								<h4>Change Your Password</h4>
								<form enctype="multipart/form-data" method='POST' id="change_user_password">
                                    <input type="hidden" name='proven_id' value="<?php echo $_SESSION['login_agent_detail']->proven_id; ?>">
    								<div class="frm_submit_wrap">
    									<div class="form-row">
    										<div class="form-group col-lg-12 col-md-6">
    											<label>Old Password</label>
    											<input type="password" class="form-control" id="old_password" name="old_password" value=""> </div>
    										<div class="form-group col-md-6">
    											<label>New Password</label>
    											<input type="password" class="form-control" id="newpass" name="new_password"> </div>
    										<div class="form-group col-md-6">
    											<label>Confirm password</label>
    											<input type="password" class="form-control" id="confirmpassword" name="confirmpassword"> </div>
    										<div class="form-group col-lg-12 col-md-12">
    											<button class="btn btn-theme submit_disable"  type="submit">Save Changes</button>
    											<div class="change_password_responce pt-4"></div>
    										</div>
    									</div>
    								</div>
								</form>
							</div>
						</div>
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