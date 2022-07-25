<footer class="dark-footer skin-dark-footer style-2">
   <div class="footer-middle">
      <div class="container pt-5 pb-2">
         <div class="row g-5">
            <div class="col-lg-4 col-md-6 mb-4">
               <img src="<?php echo WEBSITEURL; ?>assets/img/logo.png" class="logo img-footer bg-white p-2 mb-3" alt="" style="    max-width:280px;">
               <p>
                  Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                  ipsum et lorem et sit, sed stet lorem sit clita
               </p>
               <div class="d-flex pt-2">
                  <a class="btn p-2 text-white me-1" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn p-2 text-white me-1" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn p-2 text-white me-1" href=""><i class="fab fa-youtube"></i></a>
                  <a class="btn p-2 text-white me-0" href=""><i class="fab fa-linkedin-in"></i></a>
               </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
               <h4 class="text-light mb-2">Quick Links</h4>
               <div class="footer_widget m-0 p-0">
                  <ul class="footer-menu">
                     <li class="active m-0"><a href="<?php echo WEBSITEURL; ?>">Home<span class="submenu-indicator"></span></a>
                     </li>
                     <li><a href="<?php echo WEBSITEURL; ?>about.php">About Us</a></li>
                     <li>
                        <a href="<?php echo WEBSITEURL; ?>news.php">News</a>
                        <ul class="nav-dropdown nav-submenu" style="display: none;">
                           <li><a href="<?php echo WEBSITEURL; ?>news-detail.php">News Detail</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="<?php echo WEBSITEURL; ?>shop.php">Shop</a>
                        <ul class="nav-dropdown nav-submenu" style="display: none;">
                           <li><a href="<?php echo WEBSITEURL; ?>shop-detail.php">Shop Detail</a></li>
                        </ul>
                     </li>
                     <li><a href="<?php echo WEBSITEURL; ?>contactus.php">Contact Us</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
               <h4 class="text-light mb-2">Address</h4>
               <p>
                  <i class="fa fa-map-marker-alt me-3"></i> 123 Street
               </p>
               <p><i class="fa fa-phone-alt me-3"></i> 256 584 5748</p>
               <p><i class="fa fa-envelope me-3"></i> support@croatialiving.com</p>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="footer_widget m-0 p-0">
                  <h4 class="extream mb-2">Do you need help with<br>anything?</h4>
                  <p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every month</p>
                  <!--<div class="foot-news-last">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email Address">
                        <div class="input-group-append">
                           <button type="button" class="input-group-text theme-bg b-0 text-light">Subscribe</button>
                        </div>
                     </div>
                  </div>-->
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-bottom">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 text-center">
               <p class="mb-0"> © <a href="<?php echo WEBSITEURL; ?>">Croatialiving</a>, All Right Reserved.</p>
            </div>
         </div>
      </div>
   </div>
</footer>
   <!-- Log In Modal -->
   <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
      <div class="modal-dialog modal-xl login-pop-form" role="document">
         <div class="modal-content overli" id="registermodal">
            <div class="modal-body p-0">
               <div class="resp_log_wrap">
                  <div class="resp_log_thumb" style="background:url(assets/img/slider-4.jpg)no-repeat;"></div>
                  <div class="resp_log_caption">
                     <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                     <div class="edlio_152">
                        <ul class="nav nav-pills tabs_system center" id="pills-tab" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false"><i class="fas fa-user-plus mr-2"></i>Register</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                           <div class="login-form">
                              <form action="#" id="login_form">
                                 <div class="form-group">
                                    <label>User Name</label>
                                    <div class="input-with-icon">
                                       <input type="text" class="form-control" id="email" name="email">
                                       <i class="ti-user"></i>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-with-icon">
                                       <input type="password" class="form-control" id="password" name="password">
                                       <i class="ti-unlock"></i>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="eltio_ol9">
                                       <div class="eltio_k1">
                                          <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                          <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                       </div>
                                       <div class="eltio_k2">
                                          <a href="#">Lost Your Password?</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width pop-login submit-disable">Login</button>
                                    <div class="login_form_responce"></div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                           <div class="login-form">
                              <form action="#" id="register_form">
                                 <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                 </div>
                                 <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname">
                                 </div>
                                 <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number">
                                 </div>
                                 <div class="form-group">
                                    <label>Phone Number</label>
                                     <select id="gender" name="gender" class="form-control" >
                                         <option value="Male">Male</option>
                                         <option value="Female">Female</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                    <label>Email ID</label>
                                    <div class="input-with-icon">
                                       <input type="email" class="form-control" id="email" name="email">
                                       <i class="ti-user"></i>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-with-icon">
                                       <input type="password" class="form-control" id="password" name="password">
                                       <i class="ti-unlock"></i>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="eltio_ol9">
                                       <div class="eltio_k1">
                                          <input id="dds" class="checkbox-custom" name="dds" type="checkbox">
                                          <label for="dds" class="checkbox-custom-label">By using the website, you accept the terms and conditions</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width pop-login submit-disable">Register</button>
                                     <div class="register_form_responce"></div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Send Message -->
<div class="modal fade" id="autho-message" tabindex="-1" role="dialog" aria-labelledby="authomessage" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
		<div class="modal-content" id="authomessage">
			<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
			<div class="modal-body">
				<h4 class="modal-header-title">Drop Message</h4>
				<div class="login-form">
					<form>
					
						<div class="form-group">
							<label>Subject</label>
							<div class="input-with-icons">
								<input type="text" class="form-control" placeholder="Message Title">
							</div>
						</div>
						
						<div class="form-group">
							<label>Messages</label>
							<div class="input-with-icons">
								<textarea class="form-control ht-80"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-md full-width pop-login">Send Message</button>
						</div>
					
					</form>
				</div>
			</div>
		</div>
	  </div>
   </div>
</div>
<script src="<?php echo WEBSITEURL; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo WEBSITEURL; ?>assets/js/popper.min.js"></script>
<script src="<?php echo WEBSITEURL; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo WEBSITEURL; ?>assets/js/ion.rangeSlider.min.js"></script>
<script src="<?php echo WEBSITEURL; ?>assets/js/select2.min.js"></script>
<script src="<?php echo WEBSITEURL; ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo WEBSITEURL; ?>assets/js/slick.js"></script>
<script src="<?php echo WEBSITEURL; ?>assets/js/slider-bg.js"></script>
<script src="<?php echo WEBSITEURL; ?>assets/js/lightbox.js"></script> 
<script src="<?php echo WEBSITEURL; ?>assets/js/imagesloaded.js"></script>
<script src="<?php echo WEBSITEURL; ?>assets/js/daterangepicker.js"></script>
<script src="<?php echo WEBSITEURL; ?>assets/js/custom.js"></script>
<script src="<?php echo WEBSITEURL; ?>js/jquery.fancybox.min.js"></script>
<!--Custome js files -->
<script src="<?php echo WEBSITEURL; ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo WEBSITEURL; ?>js/custom-ajax.js"></script>
 <script>
 

 $(document).ready(function() {
       $('.dash_user_menues ul li').click(function() {
  $('.dash_user_menues ul li').removeClass("active");
  $(this).addClass("active");
  localStorage.setItem('active', $(this).parent().index());
});

var ele = localStorage.getItem('active');
$('.dash_user_menues ul li:eq(' + ele + ')').find('li').addClass('active');
        });
 </script>	
</body>
</html>