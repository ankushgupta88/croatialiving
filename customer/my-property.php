<?php include_once("../header.php"); ?>

<?php //Check if user is login or not
if(empty($_SESSION['login_agent_detail'])){
    header('location: '.WEBSITEURL); 
} ?>

        <!--<div class="page-title" style="background:#f4f4f4 url(assets/img/slider-5.jpg);" data-overlay="5">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">My Properties</li>
								</ol>
								<h2 class="breadcrumb-title">My All Properties</h2>
							</div>
							
						</div>
					</div>
				</div>
			</div>-->
			
			<section class="gray pt-5 pb-5">
				<div class="container-fluid">
								
					<div class="row">
						
						<div class="col-lg-3 col-md-4 col-sm-12">
							<?php include_once("sidebar.php"); ?>
						</div>
						
						<div class="col-lg-9 col-md-8 col-sm-12">
							<div class="dashboard-body">
							
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="_prt_filt_dash">
											<div class="_prt_filt_dash_flex">
												<div class="foot-news-last">
													<div class="input-group">
													  <input type="text" class="form-control" placeholder="Email Address">
														<div class="input-group-append">
															<span type="button" class="input-group-text theme-bg b-0 text-light"><i class="fas fa-search"></i></span>
														</div>
													</div>
												</div>
											</div>
											<div class="_prt_filt_dash_last m2_hide">
												<div class="_prt_filt_radius">
													
												</div>
												<div class="_prt_filt_add_new">
													<a href="<?php echo WEBSITEURL; ?>customer/submit-property.php" class="prt_submit_link"><i class="fas fa-plus-circle"></i><span class="d-none d-lg-block d-md-block">List New Property</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-lg-12 col-md-12">
										<div class="dashboard_property">
											<div class="table-responsive">
												<table class="table">
													<thead class="thead-dark">
														<tr>
														  <th scope="col">Property</th>
														  <th scope="col" class="m2_hide">Leads</th>
														  <th scope="col" class="m2_hide">Stats</th>
														  <th scope="col" class="m2_hide">Posted On</th>
														  <th scope="col">Status</th>
														  <th scope="col">Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="dash_prt_wrap">
																	<div class="dash_prt_thumb">
																		<img src="<?php echo WEBSITEURL; ?>assets/img/p-1.png" class="img-fluid" alt="" />
																	</div>
																	<div class="dash_prt_caption">
																		<h5>4 Bhk Luxury Villa</h5>
																		<div class="prt_dashb_lot">5682 Brown River Suit 18</div>
																		<div class="prt_dash_rate"><span>$ 2,200,000</span></div>
																	</div>
																</div>
															</td>
															<td class="m2_hide">
																<div class="prt_leads"><span>27 till now</span></div>
																<div class="prt_leads_list">
																	<ul>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="_leads_name style-1">K</a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="leades_more">10+</a></li>
																	</ul>
																</div>
															</td>
															<td class="m2_hide">
																<div class="_leads_view"><h5 class="up">816</h5></div>
																<div class="_leads_view_title"><span>Total Views</span></div>
															</td>
															<td class="m2_hide">
																<div class="_leads_posted"><h5>16 Aug - 12:40</h5></div>
																<div class="_leads_view_title"><span>16 Days ago</span></div>
															</td>
															<td>
																<div class="_leads_status"><span class="active">Active</span></div>
																<div class="_leads_view_title"><span>Till 12 Oct</span></div>
															</td>
															<td>
																<div class="_leads_action">
																	<a href="#"><i class="fas fa-edit"></i></a>
																	<a href="#"><i class="fas fa-trash"></i></a>
																</div>
															</td>
														</tr>
														
														<tr>
															<td>
																<div class="dash_prt_wrap">
																	<div class="dash_prt_thumb">
																		<img src="<?php echo WEBSITEURL; ?>assets/img/p-2.png" class="img-fluid" alt="" />
																	</div>
																	<div class="dash_prt_caption">
																		<h5>4 Bhk Luxury Villa</h5>
																		<div class="prt_dashb_lot">5682 Brown River Suit 18</div>
																		<div class="prt_dash_rate"><span>$ 2,200,000</span></div>
																	</div>
																</div>
															</td>
															<td class="m2_hide">
																<div class="prt_leads"><span>27 till now</span></div>
																<div class="prt_leads_list">
																	<ul>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="_leads_name style-1">K</a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="leades_more">10+</a></li>
																	</ul>
																</div>
															</td>
															<td class="m2_hide">
																<div class="_leads_view"><h5 class="up">816</h5></div>
																<div class="_leads_view_title"><span>Total Views</span></div>
															</td>
															<td class="m2_hide">
																<div class="_leads_posted"><h5>16 Aug - 12:40</h5></div>
																<div class="_leads_view_title"><span>16 Days ago</span></div>
															</td>
															<td>
																<div class="_leads_status"><span class="expire">Expired</span></div>
																<div class="_leads_view_title"><span>Till 12 Oct</span></div>
															</td>
															<td>
																<div class="_leads_action">
																	<a href="#"><i class="fas fa-edit"></i></a>
																	<a href="#"><i class="fas fa-trash"></i></a>
																</div>
															</td>
														</tr>
														
														<tr>
															<td>
																<div class="dash_prt_wrap">
																	<div class="dash_prt_thumb">
																		<img src="<?php echo WEBSITEURL; ?>assets/img/p-3.png" class="img-fluid" alt="" />
																	</div>
																	<div class="dash_prt_caption">
																		<h5>4 Bhk Luxury Villa</h5>
																		<div class="prt_dashb_lot">5682 Brown River Suit 18</div>
																		<div class="prt_dash_rate"><span>$ 2,200,000</span></div>
																	</div>
																</div>
															</td>
															<td class="m2_hide">
																<div class="prt_leads"><span>27 till now</span></div>
																<div class="prt_leads_list">
																	<ul>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="_leads_name style-1">K</a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="leades_more">10+</a></li>
																	</ul>
																</div>
															</td>
															<td class="m2_hide">
																<div class="_leads_view"><h5 class="up">816</h5></div>
																<div class="_leads_view_title"><span>Total Views</span></div>
															</td>
															<td class="m2_hide">
																<div class="_leads_posted"><h5>16 Aug - 12:40</h5></div>
																<div class="_leads_view_title"><span>16 Days ago</span></div>
															</td>
															<td>
																<div class="_leads_status"><span class="active">Active</span></div>
																<div class="_leads_view_title"><span>Till 12 Oct</span></div>
															</td>
															<td>
																<div class="_leads_action">
																	<a href="#"><i class="fas fa-edit"></i></a>
																	<a href="#"><i class="fas fa-trash"></i></a>
																</div>
															</td>
														</tr>
														
														<tr>
															<td>
																<div class="dash_prt_wrap">
																	<div class="dash_prt_thumb">
																		<img src="<?php echo WEBSITEURL; ?>assets/img/p-4.png" class="img-fluid" alt="" />
																	</div>
																	<div class="dash_prt_caption">
																		<h5>4 Bhk Luxury Villa</h5>
																		<div class="prt_dashb_lot">5682 Brown River Suit 18</div>
																		<div class="prt_dash_rate"><span>$ 2,200,000</span></div>
																	</div>
																</div>
															</td>
															<td class="m2_hide">
																<div class="prt_leads"><span>27 till now</span></div>
																<div class="prt_leads_list">
																	<ul>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="_leads_name style-1">K</a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="leades_more">10+</a></li>
																	</ul>
																</div>
															</td>
															<td class="m2_hide">
																<div class="_leads_view"><h5 class="up">816</h5></div>
																<div class="_leads_view_title"><span>Total Views</span></div>
															</td>
															<td class="m2_hide">
																<div class="_leads_posted"><h5>16 Aug - 12:40</h5></div>
																<div class="_leads_view_title"><span>16 Days ago</span></div>
															</td>
															<td>
																<div class="_leads_status"><span class="expire">Expired</span></div>
																<div class="_leads_view_title"><span>Till 12 Oct</span></div>
															</td>
															<td>
																<div class="_leads_action">
																	<a href="#"><i class="fas fa-edit"></i></a>
																	<a href="#"><i class="fas fa-trash"></i></a>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<div class="dash_prt_wrap">
																	<div class="dash_prt_thumb">
																		<img src="<?php echo WEBSITEURL; ?>assets/img/p-5.png" class="img-fluid" alt="" />
																	</div>
																	<div class="dash_prt_caption">
																		<h5>4 Bhk Luxury Villa</h5>
																		<div class="prt_dashb_lot">5682 Brown River Suit 18</div>
																		<div class="prt_dash_rate"><span>$ 2,200,000</span></div>
																	</div>
																</div>
															</td>
															<td class="m2_hide">
																<div class="prt_leads"><span>27 till now</span></div>
																<div class="prt_leads_list">
																	<ul>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="_leads_name style-1">K</a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="leades_more">10+</a></li>
																	</ul>
																</div>
															</td>
															<td class="m2_hide">
																<div class="_leads_view"><h5 class="up">816</h5></div>
																<div class="_leads_view_title"><span>Total Views</span></div>
															</td>
															<td class="m2_hide">
																<div class="_leads_posted"><h5>16 Aug - 12:40</h5></div>
																<div class="_leads_view_title"><span>16 Days ago</span></div>
															</td>
															<td>
																<div class="_leads_status"><span class="active">Active</span></div>
																<div class="_leads_view_title"><span>Till 12 Oct</span></div>
															</td>
															<td>
																<div class="_leads_action">
																	<a href="#"><i class="fas fa-edit"></i></a>
																	<a href="#"><i class="fas fa-trash"></i></a>
																</div>
															</td>
														</tr>
														
														<tr>
															<td>
																<div class="dash_prt_wrap">
																	<div class="dash_prt_thumb">
																		<img src="<?php echo WEBSITEURL; ?>assets/img/p-6.png" class="img-fluid" alt="" />
																	</div>
																	<div class="dash_prt_caption">
																		<h5>4 Bhk Luxury Villa</h5>
																		<div class="prt_dashb_lot">5682 Brown River Suit 18</div>
																		<div class="prt_dash_rate"><span>$ 2,200,000</span></div>
																	</div>
																</div>
															</td>
															<td class="m2_hide">
																<div class="prt_leads"><span>27 till now</span></div>
																<div class="prt_leads_list">
																	<ul>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="_leads_name style-1">K</a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="leades_more">10+</a></li>
																	</ul>
																</div>
															</td>
															<td class="m2_hide">
																<div class="_leads_view"><h5 class="up">816</h5></div>
																<div class="_leads_view_title"><span>Total Views</span></div>
															</td>
															<td class="m2_hide">
																<div class="_leads_posted"><h5>16 Aug - 12:40</h5></div>
																<div class="_leads_view_title"><span>16 Days ago</span></div>
															</td>
															<td>
																<div class="_leads_status"><span class="active">Active</span></div>
																<div class="_leads_view_title"><span>Till 12 Oct</span></div>
															</td>
															<td>
																<div class="_leads_action">
																	<a href="#"><i class="fas fa-edit"></i></a>
																	<a href="#"><i class="fas fa-trash"></i></a>
																</div>
															</td>
														</tr>
														
														<tr>
															<td>
																<div class="dash_prt_wrap">
																	<div class="dash_prt_thumb">
																		<img src="<?php echo WEBSITEURL; ?>assets/img/p-7.png" class="img-fluid" alt="" />
																	</div>
																	<div class="dash_prt_caption">
																		<h5>4 Bhk Luxury Villa</h5>
																		<div class="prt_dashb_lot">5682 Brown River Suit 18</div>
																		<div class="prt_dash_rate"><span>$ 2,200,000</span></div>
																	</div>
																</div>
															</td>
															<td class="m2_hide">
																<div class="prt_leads"><span>27 till now</span></div>
																<div class="prt_leads_list">
																	<ul>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="_leads_name style-1">K</a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="leades_more">10+</a></li>
																	</ul>
																</div>
															</td>
															<td class="m2_hide">
																<div class="_leads_view"><h5 class="up">816</h5></div>
																<div class="_leads_view_title"><span>Total Views</span></div>
															</td>
															<td class="m2_hide">
																<div class="_leads_posted"><h5>16 Aug - 12:40</h5></div>
																<div class="_leads_view_title"><span>16 Days ago</span></div>
															</td>
															<td>
																<div class="_leads_status"><span class="expire">Expired</span></div>
																<div class="_leads_view_title"><span>Till 12 Oct</span></div>
															</td>
															<td>
																<div class="_leads_action">
																	<a href="#"><i class="fas fa-edit"></i></a>
																	<a href="#"><i class="fas fa-trash"></i></a>
																</div>
															</td>
														</tr>
														
														<tr>
															<td>
																<div class="dash_prt_wrap">
																	<div class="dash_prt_thumb">
																		<img src="<?php echo WEBSITEURL; ?>assets/img/p-8.png" class="img-fluid" alt="" />
																	</div>
																	<div class="dash_prt_caption">
																		<h5>4 Bhk Luxury Villa</h5>
																		<div class="prt_dashb_lot">5682 Brown River Suit 18</div>
																		<div class="prt_dash_rate"><span>$ 2,200,000</span></div>
																	</div>
																</div>
															</td>
															<td class="m2_hide">
																<div class="prt_leads"><span>27 till now</span></div>
																<div class="prt_leads_list">
																	<ul>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="_leads_name style-1">K</a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="leades_more">10+</a></li>
																	</ul>
																</div>
															</td>
															<td class="m2_hide">
																<div class="_leads_view"><h5 class="up">816</h5></div>
																<div class="_leads_view_title"><span>Total Views</span></div>
															</td>
															<td class="m2_hide">
																<div class="_leads_posted"><h5>16 Aug - 12:40</h5></div>
																<div class="_leads_view_title"><span>16 Days ago</span></div>
															</td>
															<td>
																<div class="_leads_status"><span class="active">Active</span></div>
																<div class="_leads_view_title"><span>Till 12 Oct</span></div>
															</td>
															<td>
																<div class="_leads_action">
																	<a href="#"><i class="fas fa-edit"></i></a>
																	<a href="#"><i class="fas fa-trash"></i></a>
																</div>
															</td>
														</tr>
														
														<tr>
															<td>
																<div class="dash_prt_wrap">
																	<div class="dash_prt_thumb">
																		<img src="<?php echo WEBSITEURL; ?>assets/img/p-9.png" class="img-fluid" alt="" />
																	</div>
																	<div class="dash_prt_caption">
																		<h5>4 Bhk Luxury Villa</h5>
																		<div class="prt_dashb_lot">5682 Brown River Suit 18</div>
																		<div class="prt_dash_rate"><span>$ 2,200,000</span></div>
																	</div>
																</div>
															</td>
															<td class="m2_hide">
																<div class="prt_leads"><span>27 till now</span></div>
																<div class="prt_leads_list">
																	<ul>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="_leads_name style-1">K</a></li>
																		<li><a href="#"><img src="<?php echo WEBSITEURL; ?>assets/img/team-1.jpg" class="img-fluid img-circle" alt="" /></a></li>
																		<li><a href="#" class="leades_more">10+</a></li>
																	</ul>
																</div>
															</td>
															<td class="m2_hide">
																<div class="_leads_view"><h5 class="up">816</h5></div>
																<div class="_leads_view_title"><span>Total Views</span></div>
															</td>
															<td class="m2_hide">
																<div class="_leads_posted"><h5>16 Aug - 12:40</h5></div>
																<div class="_leads_view_title"><span>16 Days ago</span></div>
															</td>
															<td>
																<div class="_leads_status"><span class="expire">Expired</span></div>
																<div class="_leads_view_title"><span>Till 12 Oct</span></div>
															</td>
															<td>
																<div class="_leads_action">
																	<a href="#"><i class="fas fa-edit"></i></a>
																	<a href="#"><i class="fas fa-trash"></i></a>
																</div>
															</td>
														</tr>
														
													</tbody>
												</table>
											</div>
										</div>
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
						<h3>Do You Have Questions ?</h3>
						<span>We'll help you to grow your career and growth.</span>
					</div>
					<a href="<?php echo WEBSITEURL; ?>contactus.php" class="btn btn-call_action_wrap">Contact Us Today</a>
				</div>
				
			</div>
		</div>
	</div>
</section>
<?php include_once("../footer.php");?>