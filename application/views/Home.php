<!DOCTYPE html>
<html lang="en-US"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

    <title>Hotel Master</title>

    <link rel='stylesheet' href='css/gdlr-hotel.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/superfish.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/component.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/jquery.fancybox.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/flexslider.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/style-responsive.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/style-custom.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/masterslider.main.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css/customfc99.css?ver=2.6' type='text/css' media='all'>

    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,700|Open+Sans:300,300i,400,400i,600,700,800|Droid+Serif:300,300i,400,600,700" rel="stylesheet">
</head>

<body data-rsssl="1" class="home  hotelmaster-button-classic-style  header-style-1  hotelmaster-classic-style  hotelmaster-single-classic-style">
    <div class="body-wrapper gdlr-boxed-style float-menu gdlr-icon-dark gdlr-header-solid" data-home="index-2.html">

        <header class="gdlr-header-wrapper">
            
            <div class="top-navigation-divider"></div>

            <!-- logo -->
            <div class="gdlr-header-inner">
                <div class="gdlr-header-container container">
                    <!-- logo -->
                    <div class="gdlr-logo">
                        <div class="gdlr-logo-inner">
                            <a href="<?php echo base_url()?>">
                                <img src="images/logo.png" alt=""> </a>
                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="gdlr-navigation-wrapper">
                        <nav class="gdlr-navigation" id="gdlr-main-navigation" role="navigation">
                            <ul id="menu-main-menu-1" class="sf-menu gdlr-main-menu">
                                <li class="menu-item current-menu-item menu-item current-menu-item  gdlr-normal-menu"><a href="<?php echo base_url()?>">Home</a></li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="<?php echo base_url()?>home/aboutus" class="sf-with-ul-pre">About Us</a>
                                    
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
                    <div class="clear"></div>
                </div>
            </div>
        </header>

        <div id="gdlr-header-substitute"></div>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="gdlr-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <section id="content-section-1">
						<div>
							<img src="images/slider-1.jpg" style="height: 500px;width: 1200px;padding-left: 10px;padding-right: 10px;">
						</div>
					</section>
                    <section id="content-section-2">

                        <div class="gdlr-color-wrapper  gdlr-show-all no-skin pt80 pb10 bgw">
                            <div class="container">
                                <div class="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container ">
                                    <div class="gdlr-item-title-head">
                                        <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Hotel Master's Rooms</h3>
                                        <div class="gdlr-item-title-carousel"><i class="icon-angle-left gdlr-flex-prev"></i><i class="icon-angle-right gdlr-flex-next"></i></div>
                                        <div class="clear"></div>
                                    </div><a class="gdlr-item-title-link" href="<?php echo base_url()?>home/allroom">View All Rooms<i class="fa fa-long-arrow-right icon-long-arrow-right"></i></a></div>
                                <div class="room-item-wrapper type-modern">
                                    <div class="room-item-holder ">
                                        <div class="gdlr-room-carousel-item gdlr-item">
                                            <div class="flexslider" data-type="carousel" data-nav-container="room-item-wrapper" data-columns="3">
                                                <ul class="slides">
                                                    <?php
                                                        foreach($data as $value)
                                                        {
                                                 ?>
                                                    <li class="gdlr-item gdlr-modern-room">
                                                        <div class="gdlr-room-thumbnail">
                                                            <a href="singleroom.html"><img src="<?php echo $value['Image']?>" alt="" width="700" height="400"></a>
                                                        </div>
                                                        <h3 class="gdlr-room-title"><a href="singleroom.html"><?php echo $value['Type']?> Room &#8211; <?php echo $value['Bed']?></a></h3><a href="<?php echo base_url()?>home/checkavl" class="gdlr-room-detail">Check Details<i class="fa fa-long-arrow-right icon-long-arrow-right"></i></a></li>
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                </ul>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-3">
                        
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
                            <p><i class="gdlr-icon fa fa-envelope-o"></i> info@texpalazzohotel.com</p>
                            <div class="clear"></div>
                            <div class="gdlr-space mt25" ></div>
                        </div>
                    </div>
                </div>
               
                <div class="footer-column six columns" id="footer-widget-3">
                    <div id="text-10" class="widget widget_text gdlr-item gdlr-widget">
                        <h3 class="gdlr-widget-title">Hotel Information</h3>
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

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/core.min.js'></script>
    <script type='text/javascript' src='js/datepicker.min.js'></script>
    <script type='text/javascript'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
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
    <script type='text/javascript' src='js/gdlr-hotel.js'></script>
    <script type='text/javascript' src='js/superfish.js'></script>
    <script type='text/javascript' src='js/hoverIntent.min.js'></script>
    <script type='text/javascript' src='js/modernizr.custom.js'></script>
    <script type='text/javascript' src='js/jquery.dlmenu.js'></script>
    <script type='text/javascript' src='js/jquery.easing.js'></script>
    <script type='text/javascript' src='js/jquery.transit.min.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox-thumbs.js'></script>
    <script type='text/javascript' src='js/jquery.flexslider.js'></script>
    <script type='text/javascript' src='js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/gdlr-script.js'></script>
    <script>
        (window.MSReady = window.MSReady || []).push(function($) {

            "use strict";
            var masterslider_8141 = new MasterSlider();

            // slider controls
            masterslider_8141.control('arrows', {
                autohide: true,
                overVideo: true
            });
            masterslider_8141.control('bullets', {
                autohide: false,
                overVideo: true,
                dir: 'h',
                align: 'bottom',
                space: 8,
                margin: 25
            });
            // slider setup
            masterslider_8141.setup("MS5aeabe6fc8141", {
                width: 1220,
                height: 660,
                minHeight: 0,
                space: 0,
                start: 1,
                grabCursor: true,
                swipe: false,
                mouse: true,
                keyboard: false,
                layout: "boxed",
                wheel: false,
                autoplay: true,
                instantStartLayers: false,
                mobileBGVideo: false,
                loop: true,
                shuffle: false,
                preload: 0,
                heightLimit: true,
                autoHeight: false,
                smoothHeight: true,
                endPause: false,
                overPause: true,
                fillMode: "fill",
                centerControls: true,
                startOnAppear: false,
                layersMode: "center",
                autofillTarget: "",
                hideLayers: false,
                fullscreenMargin: 0,
                speed: 20,
                dir: "h",
                parallaxMode: 'swipe',
                view: "fadeFlow"
            });

            MSScrollParallax.setup(masterslider_8141, 30, 50, true);

            window.masterslider_instances = window.masterslider_instances || [];
            window.masterslider_instances.push(masterslider_8141);
        });
    </script>
    <script type='text/javascript' src='js/maps.js'></script>
    <script type='text/javascript' src='js/masterslider.min.js'></script>



</body>

<!-- Mirrored from max-themes.net/demos/hotelmaster/hotelmaster/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Feb 2020 12:55:23 GMT -->
</html>
