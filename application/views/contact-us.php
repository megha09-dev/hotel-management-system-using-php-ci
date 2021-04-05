<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

    <title>Hotel Master</title>

    <link rel='stylesheet' href='<?php echo base_url()?>css/gdlr-hotel.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/style.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/superfish.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/component.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/font-awesome.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/jquery.fancybox.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/flexslider.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/style-responsive.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/style-custom.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/masterslider.main.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/customfc99.css?ver=2.6' type='text/css' media='all'>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/base.css" />




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
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="<?php echo base_url()?>">Home</a></li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="<?php echo base_url()?>home/aboutus" class="sf-with-ul-pre">About Us</a>
                                    
                                </li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu"><a href="<?php echo base_url()?>home/allroom" class="sf-with-ul-pre">Rooms</a>
                                   
                                </li>
                                <li class="menu-item  current-menu-item menu-item current-menu-item gdlr-mega-menu"><a href="<?php echo base_url()?>home/contactus" class="sf-with-ul-pre">Contact Us</a>
                                    
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
            </div>
        </header>

        <div id="gdlr-header-substitute">
        </div>
        <div class="gdlr-page-title-wrapper">
            <div class="gdlr-page-title-overlay"></div>
            <div class="gdlr-page-title-container container">
                <h1 class="gdlr-page-title">Contact</h1>
                
            </div>
        </div>

        <div id="gdlr-header-substitute">
        </div>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="gdlr-content">

                <!-- Above Sidebar Section-->
                <div class="above-sidebar-wrapper">
                    <section id="content-section-1">
                        <div class="gdlr-full-size-wrapper gdlr-show-all" style="padding-bottom: 0px;  background-color: #ffffff; ">
                            <div class="gdlr-item gdlr-content-item" style="margin-bottom: 0px;">
                              
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <div class="with-sidebar-container container">
                        <div class="with-sidebar-left eight columns">
                            <div class="with-sidebar-content twelve columns">
                                <section id="content-section-2">
                                    <div class="section-container container">
                                        <img src="<?php echo base_url()?>images/contact.jpg">
                                        <div class="clear"></div>
                                    </div>
                                </section>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="gdlr-sidebar gdlr-right-sidebar four columns">
                            <div class="gdlr-item-start-content sidebar-right-item">
                                <div id="text-6" class="widget widget_text gdlr-item gdlr-widget">
                                    <h3 class="gdlr-widget-title">Hotel Information</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">Featured amenities include complimentary wired Internet access, a 24-hour business center if needed, and car service. Planning an event in Surat? Do contact us.</div>
                                </div>
                                <div id="text-7" class="widget widget_text gdlr-item gdlr-widget">
                                    <h3 class="gdlr-widget-title">Contact Information</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">
                                        <p><i class="gdlr-icon fa fa-map-marker" style="color: #444444; font-size: 16px; "></i>Ring Rd, Sahara Darwaja, New Textile Market, Surat, Gujarat 395002</p>
                                        <p><i class="gdlr-icon fa fa-phone" style="color: #444444; font-size: 16px; "></i> +91-261-6616018 / 19 / 20</p>
                                        <p><i class="gdlr-icon fa fa-envelope" style="color: #444444; font-size: 16px; "></i> +91-261-6616018 / 19 / 20</p>
                                        <p><i class="gdlr-icon fa fa-clock-o" style="color: #444444; font-size: 16px; "></i> Everyday 9:00-17:00</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Below Sidebar Section-->
                <div class="below-sidebar-wrapper">
                    <section id="content-section-3">
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all no-skin" id="gdlr-parallax-wrapper-1" data-bgspeed="0.2" style="background-image: url('upload/contact-bg.jpg'); padding-top: 100px; padding-bottom: 50px; ">
                            <div class="container">
                                <div class="four columns">
                                    <div class="gdlr-box-with-icon-ux gdlr-ux">
                                        <div class="gdlr-item gdlr-box-with-icon-item pos-top type-circle">
                                            <div class="box-with-circle-icon" style="background-color: #b89f80"><i class="fa fa-envelope" style="color:#ffffff;"></i>
                                                <br>
                                            </div>
                                            <h4 class="box-with-icon-title">Contact By Email</h4>
                                            <div class="clear"></div>
                                            <div class="box-with-icon-caption">
                                                <p>We provide an email services.Through the email you can send us any querey regarding to hotel.we provide services as early as possible</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="gdlr-box-with-icon-ux gdlr-ux">
                                        <div class="gdlr-item gdlr-box-with-icon-item pos-top type-circle">
                                            <div class="box-with-circle-icon" style="background-color: #b89f80"><i class="fa fa-phone" style="color:#ffffff;"></i>
                                                <br>
                                            </div>
                                            <h4 class="box-with-icon-title">Contact By Phone</h4>
                                            <div class="clear"></div>
                                            <div class="box-with-icon-caption">
                                                <p>Customer can contact us using the contact number given here and ask for any query.Our phone services is available all time.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="gdlr-box-with-icon-ux gdlr-ux">
                                        <div class="gdlr-item gdlr-box-with-icon-item pos-top type-circle">
                                            <div class="box-with-circle-icon" style="background-color: #b89f80"><i class="fa fa-home" style="color:#ffffff;"></i>
                                                <br>
                                            </div>
                                            <h4 class="box-with-icon-title">Come To See Us</h4>
                                            <div class="clear"></div>
                                            <div class="box-with-icon-caption">
                                                <p>Customer can also visit at our place and make a wish for their booking.We warmly welcome our customer to come and check our services.</p>
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
                        <a class="mr10" href="<?php echo base_url()?>">Home</a>|
                        <a class="mr10 ml10" href="<?php echo base_url()?>home/checkavl">Reservation</a> | 
                        <a class="mr10 ml10" href="<?php echo base_url()?>home/aboutus">About</a> | 
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
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery/jquery.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery/ui/core.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery/ui/datepicker.min.js'></script>
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
    <script type='text/javascript' src='<?php echo base_url()?>js/gdlr-hotel.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/superfish.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/hoverIntent.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/modernizr.custom.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery.dlmenu.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery.easing.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery.transit.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery.fancybox-thumbs.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery.flexslider.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/gdlr-script.js'></script>

    <script>
        jQuery(document).ready(function($) {
            var map1 = $("#map1").maps({
                "map_options": {
                    "center_lat": "51.5073509",
                    "center_lng": "-0.12775829999998223",
                    "zoom": 14,
                    "map_type_id": "ROADMAP",
                    "draggable": true,
                    "scroll_wheel": false,
                    "display_45_imagery": "",
                    "marker_default_icon": null,
                    "infowindow_setting": "",
                    "infowindow_bounce_animation": null,
                    "infowindow_drop_animation": false,
                    "close_infowindow_on_map_click": false,
                    "default_infowindow_open": false,
                    "infowindow_open_event": "click",
                    "full_screen_control": true,
                    "search_control": true,
                    "zoom_control": true,
                    "map_type_control": true,
                    "street_view_control": true,
                    "full_screen_control_position": null,
                    "search_control_position": null,
                    "zoom_control_position": null,
                    "map_type_control_position": null,
                    "map_type_control_style": null,
                    "street_view_control_position": null,
                    "map_control": true,
                    "map_control_settings": null,
                    "width": "",
                    "height": "450"
                },
                "places": [{
                    "id": "1",
                    "title": "London",
                    "address": "london",
                    "source": "manual",
                    "content": "London",
                    "location": {
                        "icon": null,
                        "lat": "51.5073509",
                        "lng": "-0.12775829999998223",
                        "city": null,
                        "state": null,
                        "country": null,
                        "onclick_action": "marker",
                        "redirect_custom_link": null,
                        "marker_image": null,
                        "open_new_tab": null,
                        "postal_code": null,
                        "draggable": false,
                        "infowindow_default_open": false,
                        "animation": null,
                        "infowindow_disable": true,
                        "zoom": 5,
                        "extra_fields": null
                    },
                    "categories": [],
                    "custom_filters": null
                }],
                "street_view": null,
                "map_property": {
                    "map_id": "1"
                }
            }).data("wpgmp_maps");
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCmVhK5ZjYRjzAe-e9ZKS1mA3NBPuViwQ"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpgmp_local = {
            "all_location": "All",
            "show_locations": "Show Locations",
            "sort_by": "Sort by",
            "wpgmp_not_working": "not working...",
            "place_icon_url": "https:\/\/demo.goodlayers.com\/hotelmaster\/wp-content\/plugins\/wp-google-map-plugin\/assets\/images\/icons\/"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='js/maps.js'></script>
    <script type='text/javascript' src='js/frontend.js'></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
</body>
</html>
