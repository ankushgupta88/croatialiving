<?php include_once("header.php"); ?>
<section class="gray pt-4">
   <div class="container">
      <div class="row m-0">
         <div class="short_wraping">
            <div class="row align-items-center">
               <!--<div class="col-lg-9 col-md-12 col-sm-12 order-lg-2 order-md-3 col-sm-12">
                  <div class="shorting_pagination">
                     <div class="shorting_pagination_laft">
                        <h5>Showing 1-25 of 72 results</h5>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 order-lg-3 order-md-2 col-sm-6">
                  <div class="shorting-right">
                     <label>Short By:</label>
                     <div class="dropdown show">
                        <a class="btn btn-filter dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="selection">Most Rated</span>
                        </a>
                        <div class="drp-select dropdown-menu">
                           <a class="dropdown-item" href="JavaScript:Void(0);">Most Rated</a>
                           <a class="dropdown-item" href="JavaScript:Void(0);">Most Viewd</a>
                           <a class="dropdown-item" href="JavaScript:Void(0);">News Listings</a>
                           <a class="dropdown-item" href="JavaScript:Void(0);">High Rated</a>
                        </div>
                     </div>
                  </div>
               </div>-->
            </div>
         </div>
      </div>
      <div class="row">
         <!--<div class="col-lg-4 col-md-12 col-sm-12">
            <div class="page-sidebar p-0">
               <a class="filter_links" data-toggle="collapse" href="#fltbox" role="button" aria-expanded="false" aria-controls="fltbox">Open Advance Filter<i class="fa fa-sliders-h ml-2"></i></a>							
               <div class="collapse" id="fltbox">
                  <div class="sidebar-widgets p-4">
                     <div class="form-group">
                        <div class="input-with-icon">
                           <input type="text" class="form-control" placeholder="Neighborhood">
                           <i class="ti-search"></i>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="input-with-icon">
                           <input type="text" class="form-control" placeholder="Location">
                           <i class="ti-location-pin"></i>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="simple-input">
                           <select id="ptype" class="form-control">
                              <option value="">&nbsp;</option>
                              <option value="1">Apartment</option>
                              <option value="2">Condo</option>
                              <option value="3">Family</option>
                              <option value="4">Houses</option>
                              <option value="5">Villa</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="simple-input">
                           <select id="status" class="form-control">
                              <option value="">&nbsp;</option>
                              <option value="1">Apartment</option>
                              <option value="2">Condo</option>
                              <option value="3">Houses</option>
                              <option value="4">Villa</option>
                              <option value="5">Land</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="simple-input">
                           <select id="price" class="form-control">
                              <option value="">&nbsp;</option>
                              <option value="1">Less Then $1000</option>
                              <option value="2">$1000 - $2000</option>
                              <option value="3">$2000 - $3000</option>
                              <option value="4">$3000 - $4000</option>
                              <option value="5">Above $5000</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="simple-input">
                           <select id="bedrooms" class="form-control">
                              <option value="">&nbsp;</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="simple-input">
                           <select id="bathrooms" class="form-control">
                              <option value="">&nbsp;</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="simple-input">
                           <select id="garage" class="form-control">
                              <option value="">&nbsp;</option>
                              <option value="1">Any Type</option>
                              <option value="2">Yes</option>
                              <option value="3">No</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="simple-input">
                           <select id="built" class="form-control">
                              <option value="">&nbsp;</option>
                              <option value="1">2010</option>
                              <option value="2">2011</option>
                              <option value="3">2012</option>
                              <option value="4">2013</option>
                              <option value="5">2014</option>
                              <option value="6">2015</option>
                              <option value="7">2016</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <div class="form-group">
                              <div class="simple-input">
                                 <input type="text" class="form-control" placeholder="Min Area">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <div class="form-group">
                              <div class="simple-input">
                                 <input type="text" class="form-control" placeholder="Max Area">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
                           <h6>Choose Price</h6>
                           <div class="rg-slider">
                              <input type="text" class="js-range-slider" name="my_range" value="" />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                           <h6>Advance Features</h6>
                           <ul class="row p-0 m-0">
                              <li class="col-lg-6 col-md-6 p-0">
                                 <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                 <label for="a-1" class="checkbox-custom-label">Air Condition</label>
                              </li>
                              <li class="col-lg-6 col-md-6 p-0">
                                 <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                 <label for="a-2" class="checkbox-custom-label">Bedding</label>
                              </li>
                              <li class="col-lg-6 col-md-6 p-0">
                                 <input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
                                 <label for="a-3" class="checkbox-custom-label">Heating</label>
                              </li>
                              <li class="col-lg-6 col-md-6 p-0">
                                 <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                 <label for="a-4" class="checkbox-custom-label">Internet</label>
                              </li>
                              <li class="col-lg-6 col-md-6 p-0">
                                 <input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
                                 <label for="a-5" class="checkbox-custom-label">Microwave</label>
                              </li>
                              <li class="col-lg-6 col-md-6 p-0">
                                 <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                 <label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
                              </li>
                              <li class="col-lg-6 col-md-6 p-0">
                                 <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                 <label for="a-7" class="checkbox-custom-label">Terrace</label>
                              </li>
                              <li class="col-lg-6 col-md-6 p-0">
                                 <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                 <label for="a-8" class="checkbox-custom-label">Balcony</label>
                              </li>
                              <li class="col-lg-6 col-md-6 p-0">
                                 <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                 <label for="a-9" class="checkbox-custom-label">Icon</label>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                           <button class="btn theme-bg rounded full-width">Find New Home</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>-->
        <?php
            //Call Api For Product List
            //PROVEN CROATIALIVING Category Id 
            $category_id = '8d2c4bef-76aa-b44c-cafc-62c812719b72';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, APIURL);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, true);
            $parameters = array(
                'user_auth' => array(
                    'auth_user' => CRMUSER,
                    'auth_user_password' => CRMPASSWORD,
                    'category_id' => $category_id
                ),
            );
            $json = json_encode($parameters);
            $postArgs = array(
                'method' => 'showCategoryProductList',
                'input_type' => 'JSON',
                'response_type' => 'JSON',
                'rest_data' => $json,
            );
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs);
            $product_output = json_decode(curl_exec($ch));
            //echo "<pre>"; print_r($product_output); echo "</pre>"; exit;
        ?>
         <div class="col-lg-12 col-md-12 col-sm-12">
            <?php if(count($product_output->data) >= 1){ ?> 
            <div class="row justify-content-center">
                <?php $count_loop_product = 1;
                foreach($product_output->data as $product){ ?>
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <div class="property-listing property-2">
                     <div class="listing-img-wrapper">
                        <div class="_exlio_125">For Rent</div>
                        <div class="list-img-slide">
                           <div class="click">
                              <div><a href="<?php echo WEBSITEURL."shop-detail.php?product_id=".$product->product_id; ?>"><img src="<?php echo $product->product_image; ?>" class="img-fluid mx-auto" alt="<?php echo $product->product_image_name; ?>" /></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                           <div class="_card_list_flex mb-2">
                              <div class="_card_flex_01">
                                 <span class="_list_blickes _netork">4 Network</span>
                                 <span class="_list_blickes types">Condos</span>
                              </div>
                              <div class="_card_flex_last">
                                 <h6 class="listing-card-info-price mb-0">$<?php echo $product->price; ?></h6>
                              </div>
                           </div>
                           <div class="_card_list_flex">
                              <div class="_card_flex_01">
                                 <h4 class="listing-name verified"><a href="<?php echo WEBSITEURL."shop-detail.php?product_id=".$product->product_id; ?>" class="prt-link-detail"><?php echo $product->name; ?></a></h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="price-features-wrapper">
                        <div class="list-fx-features">
                           <div class="listing-card-info-icon">
                              <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>
                              4 Beds
                           </div>
                           <div class="listing-card-info-icon">
                              <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>
                              2 Bath
                           </div>
                           <div class="listing-card-info-icon">
                              <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>
                              820 sqft
                           </div>
                        </div>
                     </div>
                     <div class="listing-detail-footer">
                        <div class="footer-first">
                           <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />Montreal, Canada</div>
                        </div>
                        <div class="footer-flex">
                           <ul class="selio_style">
                              <li>
                                 <div class="prt_saveed_12lk">
                                    <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="Save property"><input type="checkbox"><i class="ti-heart"></i></label>
                                 </div>
                              </li>
                              <li>
                                 <div class="prt_saveed_12lk">
                                    <a href="<?php echo WEBSITEURL."shop-detail.php?product_id=".$product->product_id; ?>" data-toggle="tooltip" data-placement="top" data-original-title="View Property"><i class="ti-arrow-right"></i></a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
            <?php } else { ?>
                <div class="row justify-content-center">
                    <p>No Property Found.</p>
                </div>
           <?php } ?>
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
<?php include_once("footer.php"); ?>