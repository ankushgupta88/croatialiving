<?php include_once('head.php'); ?> 
<body class="yellow-skin">
   <div id="main-wrapper">
   <div class="top-header">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6">
               <div class="cn-info">
                  <ul>
                     <li><i class="lni-phone-handset"></i>256 584 5748</li>
                     <li><i class="ti-email"></i>support@croatialiving.com</li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <ul class="top-social">
                  <li><a href="#"><i class="lni-facebook"></i></a></li>
                  <li><a href="#"><i class="lni-linkedin"></i></a></li>
                  <li><a href="#"><i class="lni-instagram"></i></a></li>
                  <li><a href="#"><i class="lni-twitter"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="header header-light">
      <div class="container">
         <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
               <a class="nav-brand" href="<?php echo WEBSITEURL; ?>">
               <img src="<?php echo WEBSITEURL; ?>assets/img/logo.png" class="logo" alt="" />
               </a>
               <div class="nav-toggle"></div>
               <div class="mobile_nav">
                  <ul>
                    <?php if($_SESSION['login_agent_detail']){ ?>
                        <li class="_my_prt_list"><a href="<?php echo WEBSITEURL; ?>customer/submit-property.php">Add Property</a></li>
                        <li><a href="<?php echo WEBSITEURL; ?>customer/dashboard.php"><i class="fas fa-user-circle fa-lg"></i></a></li>
    				<?php } else { ?>
                        <li class="_my_prt_list"><a href="#" data-toggle="modal" data-target="#login">Add Property</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#login"><i class="fas fa-user-circle fa-lg"></i></a></li>
                    <?php } ?>
                  </ul>
               </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
               <ul class="nav-menu">
                  <li class="active"><a href="<?php echo WEBSITEURL; ?>">Home<span class="submenu-indicator"></span></a>
                  </li>
                  <li><a href="<?php echo WEBSITEURL; ?>about.php">About Us</a></li>
                  <li>
                     <a href="<?php echo WEBSITEURL; ?>news.php">News</a>
                  </li>
                  <li>
                     <a href="<?php echo WEBSITEURL; ?>shop.php">Shop</a>
                  </li>
                  <li><a href="<?php echo WEBSITEURL; ?>contactus.php">Contact Us</a></li>
                    <?php if($_SESSION['login_agent_detail']){ ?>
                       <li>
                            <a href="#">My Account</a>
                            <ul class="nav-dropdown nav-submenu" style="display: none;">
                                <li><a href="<?php echo WEBSITEURL; ?>customer/dashboard.php">Dashboard</a></li>
                                <li><a href="<?php echo WEBSITEURL; ?>logout.php">Logout</a></li>
                            </ul>
                        </li>
                        <ul class="nav-menu nav-menu-social align-to-right">
                          <li class="add-listing">
                             <a href="<?php echo WEBSITEURL; ?>customer/submit-property.php"  class="theme-cl">
                             <i class="fas fa-plus-circle mr-1"></i>Add Property
                             </a>
                          </li>
                       </ul>
    				<?php } else { ?>
                       <ul class="nav-menu nav-menu-social align-to-right">
                          <li>
                             <a href="#" class="alio_green" data-toggle="modal" data-target="#login">
                             <i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
                             </a>
                          </li>
                          <li class="add-listing">
                             <a href="#" class="theme-cl" data-toggle="modal" data-target="#login">
                             <i class="fas fa-plus-circle mr-1"></i>Add Property
                             </a>
                          </li>
                       </ul>
                     <?php } ?>
                </ul>
            </div>
         </nav>
      </div>
   </div>
   <div class="clearfix"></div>