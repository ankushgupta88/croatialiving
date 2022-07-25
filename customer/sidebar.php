<?php 
//Call Api For Show Profile 
$proven_id =  $_SESSION['login_agent_detail']->proven_id; 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, APIURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
$parameters = array(
    'user_auth' => array(
        'auth_user' => CRMUSER,
        'auth_user_password' => CRMPASSWORD,
        'proven_id' => $proven_id,
    ),
);
$json = json_encode($parameters);
$postArgs = array(
    'method' => 'query_profile',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs);
$profile_output = json_decode(curl_exec($ch));
//echo "<pre>"; print_r($profile_output); echo "</pre>"; exit;
?>
<div class="property_dashboard_navbar">
	<div class="dash_user_avater"> 
	    <?php if($profile_output->data[0]->photoname != null){ ?>
    	    <img src="<?php echo $profile_output->data[0]->photo; ?>" class="img-fluid avater" alt="<?php echo $profile_output->data[0]->photoname; ?>">
    	<?php } else { ?>
    	    <img src="<?php echo WEBSITEURL; ?>/images/dashboard-img/user-img.jpg" class="img-fluid avater" alt="<?php echo $profile_output->data[0]->photoname; ?>">
    	<?php } ?>
		<h4><?php echo $profile_output->data[0]->first_name." ".$profile_output->data[0]->last_name; ?></h4> <span>USA</span> </div>
	<div class="dash_user_menues">
		<ul>
			<li class="active"><a href="<?php echo WEBSITEURL; ?>customer/dashboard.php"><i class="fa fa-tachometer-alt"></i>Dashboard<!--<span class="notti_coun style-1">4</span>--></a></li>
			<li><a href="<?php echo WEBSITEURL; ?>customer/my-profile.php"><i class="fa fa-user-tie"></i>My Profile</a></li>
			<li><a href="<?php echo WEBSITEURL; ?>customer/my-property.php"><i class="fa fa-tasks"></i>My Properties</a></li>
			<li><a href="<?php echo WEBSITEURL; ?>customer/messages.php"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
			<li><a href="<?php echo WEBSITEURL; ?>customer/choose-package.php"><i class="fa fa-gift"></i>Choose Package<!--<span class="expiration">10 days left</span>--></a></li>
			<li><a href="<?php echo WEBSITEURL; ?>customer/submit-property.php"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
			<li><a href="<?php echo WEBSITEURL; ?>customer/change-password.php"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
		</ul>
	</div>
	
	<div class="dash_user_footer">
		<ul>
			<li><a href="<?php echo WEBSITEURL; ?>logout.php"><i class="fa fa-power-off"></i></a></li>
			<li><a href="#"><i class="fa fa-comment"></i></a></li>
			<li><a href="#"><i class="fa fa-cog"></i></a></li>
		</ul>
	</div>
</div>