<?php include_once("header.php"); ?>
<div class="page-title" style="background:#f4f4f4 url(assets/img/bg.jpg);" data-overlay="5">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="breadcrumbs-wrap">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">Checkout</li>
               </ol>
               <h2 class="breadcrumb-title">Checkout - Checkout</h2>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="gray-simple">
   <div class="container">
      <div class="row m-0">
         <div class="submit-page mb-4">
            <div class="col-lg-12 col-md-12">
               <div class="alert alert-success text-center mb-0" role="alert">
                  Hi Dear, Have you already an account? <a href="#" data-toggle="collapse" data-target="#login-frm">Please Login</a>
               </div>
            </div>
            <div class="col-lg-12 col-md-12">
               <div id="login-frm" class="collapse mt-3">
                  <div class="row">
                     <div class="col-lg-5 col-md-4 col-sm-6">
                        <div class="form-group">
                           <div class="input-with-icon">
                              <input type="text" class="form-control" placeholder="Username">
                              <i class="ti-search"></i>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-4 col-sm-6">
                        <div class="form-group">
                           <div class="input-with-icon">
                              <input type="text" class="form-control" placeholder="*******">
                              <i class="ti-lock"></i>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-12">
                        <div class="form-group">
                           <button type="submit" class="btn btn-theme btn-md full-width">Submit</button>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6">
                        <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                        <label for="a-1" class="checkbox-custom-label">Remember Me</label>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                        <a href="#" class="theme-cl">Forget Password?</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row frm_submit_block">
         <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="submit-page mb-4">
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <h3 class="ml-0">Billing Detail</h3>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Name<i class="req">*</i></label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Email<i class="req">*</i></label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="form-group">
                        <label>Country<i class="req">*</i></label>
                        <select id="country" class="form-control">
                           <option value="">&nbsp;</option>
                           <option value="1">United State</option>
                           <option value="2">United kingdom</option>
                           <option value="3">India</option>
                           <option value="4">Canada</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="form-group">
                        <label>Street<i class="req">*</i></label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Apartment</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Town/City<i class="req">*</i></label>
                        <select id="town" class="form-control">
                           <option value="">&nbsp;</option>
                           <option value="1">Punjab</option>
                           <option value="2">Chandigarh</option>
                           <option value="3">Allahabad</option>
                           <option value="4">Lucknow</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>State<i class="req">*</i></label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Postcode/Zip<i class="req">*</i></label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Phone<i class="req">*</i></label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Landline</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="form-group">
                        <label>Additional Information</label>
                        <textarea class="form-control ht-50"></textarea>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                        <label for="a-2" class="checkbox-custom-label">Create An Account</label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="panel-group pay_opy980" id="payaccordion">
               <div class="panel panel-default">
                  <div class="panel-heading" id="pay">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" role="button" data-parent="#payaccordion" href="#payPal" aria-expanded="true"  aria-controls="payPal" class="">PayPal<img src="assets/img/paypal.png" class="img-fluid" alt=""></a>
                     </h4>
                  </div>
                  <div id="payPal" class="panel-collapse collapse show" aria-labelledby="pay" data-parent="#payaccordion">
                     <div class="panel-body">
                        <form>
                           <div class="form-group">
                              <label>PayPal Email</label>
                              <input type="text" class="form-control simple" placeholder="paypal@gmail.com">
                           </div>
                           <div class="form-group">
                              <button type="submit" class="btn theme-bg btm-md full-width">Pay 400.00 USD</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" id="stripes">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" role="button" data-parent="#payaccordion" href="#stripePay" aria-expanded="false"  aria-controls="stripePay" class="">Stripe<img src="assets/img/strip.png" class="img-fluid" alt=""></a>
                     </h4>
                  </div>
                  <div id="stripePay" class="collapse" aria-labelledby="stripes" data-parent="#payaccordion">
                     <div class="panel-body">
                        <form>
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Card Holder Name</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-5 col-md-5 col-sm-6">
                                 <div class="form-group">
                                    <label>Expire Month</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-5 col-md-5 col-sm-6">
                                 <div class="form-group">
                                    <label>Expire Year</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-12">
                                 <div class="form-group">
                                    <label>CVC</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                    <label for="a-2" class="checkbox-custom-label">By Continuing, you ar'e agree to conditions</label>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                 <div class="form-group text-center">
                                    <a href="#" class="btn theme-bg full-width">Pay 202.00 USD</a>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading" id="dabit">
                     <h4 class="panel-title">
                        <a data-toggle="collapse"  role="button" href="#payaccordion" data-target="#debitPay" aria-expanded="flase"  aria-controls="debitPay" class="">Debit Or Credit<img src="assets/img/debit.png" class="img-fluid" alt=""></a>
                     </h4>
                  </div>
                  <div id="debitPay" class="panel-collapse collapse" aria-labelledby="dabit" data-parent="#payaccordion">
                     <div class="panel-body">
                        <form>
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Card Holder Name</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-5 col-md-5 col-sm-6">
                                 <div class="form-group">
                                    <label>Expire Month</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-5 col-md-5 col-sm-6">
                                 <div class="form-group">
                                    <label>Expire Year</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-12">
                                 <div class="form-group">
                                    <label>CVC</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                    <label for="a-2" class="checkbox-custom-label">By Continuing, you ar'e agree to conditions</label>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                 <div class="form-group text-center">
                                    <a href="#" class="btn theme-bg full-width">Pay 202.00 USD</a>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Col-lg 4 -->
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <h3>Your Order</h3>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="pro_product_wrap">
                  <h5>Platinum</h5>
                  <ul>
                     <li><strong>Total</strong>$319</li>
                     <li><strong>Subtotal</strong>$319</li>
                     <li><strong>Tax</strong>$10</li>
                     <li><strong>Total</strong>$329</li>
                  </ul>
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
<?php include_once("footer.php");?>