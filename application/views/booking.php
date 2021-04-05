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
    <link rel='stylesheet' href='<?php echo base_url()?><?php echo base_url()?>css/font-awesome.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/jquery.fancybox.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/flexslider.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/style-responsive.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/style-custom.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?><?php echo base_url()?>css/masterslider.main.css' type='text/css' media='all'>
    <link rel='stylesheet' href='<?php echo base_url()?>css/customfc99.css?ver=2.6' type='text/css' media='all'>



    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,700|Open+Sans:300,300i,400,400i,600,700,800|Droid+Serif:300,300i,400,600,700" rel="stylesheet">

</head>

<body data-rsssl="1" class="home  hotelmaster-button-classic-style  header-style-1  hotelmaster-classic-style  hotelmaster-single-classic-style">


    <div class="body-wrapper gdlr-boxed-style float-menu gdlr-icon-dark gdlr-header-solid" data-home="index-2.jsp">

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
            </div>
        </header>

        <div id="gdlr-header-substitute">
        </div>
        <div class="gdlr-page-title-wrapper">
            <div class="gdlr-page-title-overlay"></div>
            <div class="gdlr-page-title-container container">
                <h1 class="gdlr-page-title">Booking</h1>
            </div>
        </div>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="gdlr-content">

                <div class="with-sidebar-wrapper">
                    <div class="with-sidebar-container container gdlr-class-no-sidebar">
                        <div class="with-sidebar-left twelve columns">
                            <div class="with-sidebar-content six columns" style="width: 62%;">
                                <div class="gdlr-item gdlr-item-start-content" id="gdlr-single-booking-content" data-ajax="https://demo.goodlayers.com/hotelmaster/wp-admin/admin-ajax.php">
                                    <center>
                                    <form class="gdlr-reservation-bar" data-action="gdlr_hotel_booking" align="center" action="<?php echo base_url()?>home/booking" method="post">
                                        <div class="gdlr-reservation-bar-title">Your Reservation</div>
                                        <div class="gdlr-reservation-bar-summary-form" ></div>
                                        <div class="gdlr-reservation-bar-room-form" ></div>
                                        <div class="gdlr-reservation-bar-date-form">
                                            <div class="gdlr-reservation-field gdlr-resv-datepicker"><span class="gdlr-reservation-field-title">Check In</span>
                                                <div class="">
                                                    <input type="date" id="" name="checkin" class="gdlr-datepicker" autocomplete="off" data-dfm="d M yy" data-block="" value="">
                                                    <input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-in" autocomplete="off" value="">
                                                </div>
                                            </div>
                                            <div class="gdlr-reservation-field gdlr-resv-combobox "><span class="gdlr-reservation-field-title">Night</span>
                                                <div class="gdlr-combobox-wrapper">
                                                    <select name="gdlr-night" id="">
                                                        <option value="1" selected="">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="gdlr-reservation-field gdlr-resv-datepicker"><span class="gdlr-reservation-field-title">Check Out</span>
                                                <div class="">
                                                    <input type="date" id="" name="checkout" class="gdlr-datepicker" autocomplete="off" data-min-night="1" data-dfm="d M yy" data-block="">
                                                    <input type="hidden" class="gdlr-datepicker-alt" name="gdlr-check-out" autocomplete="off" value="">
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number"><span class="gdlr-reservation-field-title">Rooms</span>
                                                <div class="gdlr-combobox-wrapper">
                                                    <select name="gdlr-room-number" id="">
                                                        <option value="1" selected="">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="gdlr-reservation-field gdlr-resv-combobox gdlr-reservation-bar-room-number"><span class="gdlr-reservation-field-title">Room Type</span>
                                                <div class="gdlr-combobox-wrapper" style="width: 130%;">
                                                    <select name="gdlr-room-type" id="">
                                                        <?php 
                                                        foreach ($data as $value)
                                                        {
                                                        ?>
                                                                <option value="<?php echo $value["RoomId"]?>"><?php echo $value["Type"]?></option>
                                                       <?php 
                                                        }
                                                       ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="gdlr-reservation-people-amount-wrapper" id="gdlr-reservation-people-amount-wrapper">
                                                <div class="gdlr-reservation-people-amount">
                                                    <div class="gdlr-reservation-people-title">Room <span>1</span></div>
                                                    <div class="gdlr-reservation-field gdlr-resv-combobox "><span class="gdlr-reservation-field-title">Adults</span>
                                                        <div class="gdlr-combobox-wrapper">
                                                            <select name="gdlr-adult-number">
                                                                <option value="1">1</option>
                                                                <option value="2" selected="">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-reservation-field gdlr-resv-combobox "><span class="gdlr-reservation-field-title">Children</span>
                                                        <div class="gdlr-combobox-wrapper">
                                                            <select name="gdlr-children-number">
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div><input type="submit" value="Book Now" name="submit">
                                            <div class="clear"></div>
                                        </div>
                                        <div class="gdlr-reservation-bar-service-form" id="gdlr-reservation-bar-service-form"></div>
                                        <div style="color: red;">
                                        </div>
                                    </form>
                                    </center>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            

                            <div class="clear"></div>
                        </div>

                        <div class="clear"></div>
                    </div>
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

    <script type='text/javascript' src='<?php echo base_url()?><?php echo base_url()?><?php echo base_url()?><?php echo base_url()?>js/jquery.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?><?php echo base_url()?><?php echo base_url()?>js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?><?php echo base_url()?>js/core.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url()?>js/datepicker.min.js'></script>
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
    <script type='text/javascript' src='<?php echo base_url()?>js/gdlr-portfolio-script.js'></script>

</body>

<!-- Mirrored from max-themes.net/demos/hotelmaster/hotelmaster/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Feb 2020 12:59:38 GMT -->
</html>
