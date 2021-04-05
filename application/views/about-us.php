<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

    <title>Hotel Master</title>

    <link rel='stylesheet' href='<?php echo base_url(); ?>css/gdlr-hotel.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>css/style.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>css/superfish.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>css/component.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>css/font-awesome.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>css/jquery.fancybox.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>css/flexslider.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>css/style-responsive.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>css/style-custom.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>css/masterslider.main.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url(); ?>css/customfc99.css?ver=2.6' type='text/css' media='all'>



    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,700|Open+Sans:300,300i,400,400i,600,700,800|Droid+Serif:300,300i,400,600,700" rel="stylesheet">
</head>

<body data-rsssl="1" class="home  hotelmaster-button-classic-style  header-style-1  hotelmaster-classic-style  hotelmaster-single-classic-style">

    <div class="body-wrapper gdlr-boxed-style float-menu gdlr-icon-dark gdlr-header-solid" data-home="index-2.html">

        <header class="gdlr-header-wrapper">
            <!-- top navigation -->
            
            <div class="top-navigation-divider"></div>

            <!-- logo -->
            <div class="gdlr-header-inner">
                <div class="gdlr-header-container container">
                    <!-- logo -->
                    <div class="gdlr-logo">
                        <div class="gdlr-logo-inner">
                            <a href="<?php echo base_url()?>">
                                <img src="<?php echo base_url()?>images/logo.png" alt=""> </a>
                        </div>
                    </div>
                    <!-- navigation -->
                    <div class="gdlr-navigation-wrapper">
                        <nav class="gdlr-navigation" id="gdlr-main-navigation" role="navigation">
                            <ul id="menu-main-menu-1" class="sf-menu gdlr-main-menu">
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children  gdlr-normal-menu"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="menu-item current-menu-item menu-item current-menu-item gdlr-normal-menu"><a href="<?php echo base_url(); ?>home/aboutus" class="sf-with-ul-pre">About Us</a>
                                    
                                </li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="<?php echo base_url()?>home/allroom" class="sf-with-ul-pre">Rooms</a>
                                   
                                </li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-mega-menu"><a href="<?php echo base_url()?>home/contactus" class="sf-with-ul-pre">Contact Us</a>
                                </li>
                                <?php if($this->session->userdata('UserId')!= '')
                                {
                                ?>
                                    <li class="menu-itemmenu-item gdlr-normal-menu"><a href="<?php echo base_url()?>home/profile">Profile</a></li>
                                    <li class="menu-itemmenu-item gdlr-normal-menu"><a href="<?php echo base_url()?>home/logout">logout</a></li>
                                <?php
                                }
                                else
                                {
                                ?>
                                    <li class="menu-itemmenu-item gdlr-normal-menu"><a href="<?php echo base_url()?>home/loginpage">Login</a></li>
                                <?php
                                }
                                ?> 
                            </ul>
                        </nav>
                        
                        
                        <div class="gdlr-navigation-gimmick " id="gdlr-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div
                </div>
            </div>
        </header>

        <div id="gdlr-header-substitute">
        </div>
        <div class="gdlr-page-title-wrapper">
            <div class="gdlr-page-title-overlay"></div>
            <div class="gdlr-page-title-container container">
                <h1 class="gdlr-page-title">About Us</h1>
              
            </div>
        </div>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="gdlr-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <section id="content-section-1">
                        
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-2">
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-1" data-bgspeed="0.2" style="background-image: url('<?php echo base_url(); ?>upload/contact-bg.jpg'); padding-top: 90px; padding-bottom: 50px; ">
                            <div class="container">
                                <div class="six columns">
                                    <div class="gdlr-feature-media-ux gdlr-ux">
                                        <div class="gdlr-item gdlr-feature-media-item gdlr-left">
                                            <div class="feature-media-content-wrapper">
                                                <div class="gdlr-item-title-wrapper gdlr-item pos-left ">
                                                    <div class="gdlr-item-title-head">
                                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Story About US</h3>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="feature-media-content">
                                                    <p>One of the most reputed and oldest hotel in Surat, with spacious rooms. We invite you to take advantage of complimentary bed tea and breakfast, 24 hour room service, same day laundry service. Additional amenities at our hotel include complimentary wireless Internet access, concierge services, conference and wedding services. Spending a day for work in the most centrally located hotel in Surat will assist your business and personal visits.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="six columns">
                                    <div class="gdlr-item gdlr-content-item mb80"></div>
                                    <div class="gdlr-skill-bar-wrapper  gdlr-item gdlr-size-small" style="margin-bottom: 40px;"><span class="skill-bar-content" style="color: #ffffff;">Social Networks</span>
                                        <div class="gdlr-skill-bar gdlr-ux" style="background-color: #e9e9e9;">
                                            <div class="gdlr-skill-bar-progress" data-percent="100" style="background-color: #b89f80;"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-skill-bar-wrapper  gdlr-item gdlr-size-small" style="margin-bottom: 40px;"><span class="skill-bar-content" style="color: #ffffff;">Business Planning</span>
                                        <div class="gdlr-skill-bar gdlr-ux" style="background-color: #e9e9e9;">
                                            <div class="gdlr-skill-bar-progress" data-percent="80" style="background-color: #b89f80;"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-skill-bar-wrapper  gdlr-item gdlr-size-small" style="margin-bottom: 40px;"><span class="skill-bar-content" style="color: #ffffff;">Art & Design</span>
                                        <div class="gdlr-skill-bar gdlr-ux" style="background-color: #e9e9e9;">
                                            <div class="gdlr-skill-bar-progress" data-percent="85" style="background-color: #b89f80;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-3">
                        
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-4">
                        <div class="gdlr-color-wrapper  gdlr-show-all gdlr-skin-dark-skin" style="background-color: #b89f80; padding-top: 90px; padding-bottom: 60px; ">
                            <div class="container">
                                <div class="one-fifth column">
                                    <div class="gdlr-item gdlr-content-item">
                                        <div style="text-align: right; margin-right: 30px; margin-top: 33px;">
                                            <i class="gdlr-icon fa fa-bell" style="color: #ffffff; font-size: 58px; "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="four-fifth columns">
                                    <div class="gdlr-stunning-text-ux gdlr-ux">
                                        <div class="gdlr-item gdlr-stunning-text-item type-normal">
                                            <h2 class="stunning-text-title">Revolving Restaurant</h2>
                                            <div class="stunning-text-caption gdlr-skin-content">
                                                <p>Enjoy a meal at India's first revolving restaurant on the 16th floor which boasts of a panoramic view of the city and which has a wide variety of cuisine and is a favourite destination for all travelers to Surat. From your room, you can also access 24-hour room service. Buffet breakfasts are available daily from 7 AM to 10:30 AM.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                </div>

                <!-- Below Sidebar Section-->

            </div>
            <!-- gdlr-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->

        <footer class="footer-wrapper">
            <div class="footer-container container">
                <div class="footer-column six columns" >
                    <div class="foot-book">
                        <h3 class="gdlr-widget-title">Book Now!</h3>
                        <div class="clear"></div>
                        <div class="textwidget">
                            <p><i class="gdlr-icon fa fa-phone"></i> +91 90811-55133</p>
                            <div class="clear"></div>
                            <div class="gdlr-space mt-15" ></div>
							<br>
                            <p><i class="gdlr-icon fa fa-envelope-o"></i>info@texpalazzohotel.com</p>
                            <div class="clear"></div>
                            <div class="gdlr-space mt25" ></div>
                           
                        </div>
                    </div>
                </div>
                
                <div class="footer-column six columns" id="footer-widget-3">
                    <div id="text-10" class="widget widget_text gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">Our Awards</h3>
                        <div class="clear"></div>
                        <div class="textwidget"><img src="<?php echo base_url()?>upload/awards-logo.jpg" alt="">
                            <div class="clear"></div>
                            <div class="gdlr-space m220"></div>
                            Got the two most supious awards which are "Hotel Master" in 2017 and "BOUTIQUE CHOICE" in 2019.</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="copyright-wrapper">
                <div class="copyright-container container">
                    <div class="copyright-left">
                        <a class="mr10" href="<?php echo base_url();?>">Home</a>|
                        <a class="mr10 ml10" href="<?php echo base_url()?>home/checkavl">Reservation</a> | 
                        <a class="mr10 ml10" href="<?php echo base_url();?>home/aboutus">About</a> | 
                        <a class="mr10 ml10" href="<?php echo base_url()?>home/contactus">Contact<a></a> 
                    </div>
                    <div class="copyright-right">
                        Copyright 2020 All Right Reserved </div>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>
    </div>
    <!-- body-wrapper -->

    <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/core.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/datepicker.min.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var objectL10n = {
            "closeText": "Done",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "monthStatus": "Show a different month",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "firstDay": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/gdlr-hotel.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/superfish.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/hoverIntent.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/modernizr.custom.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.dlmenu.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.easing.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.transit.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.fancybox-thumbs.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.flexslider.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>js/gdlr-script.js'></script>
</body>

</html>
