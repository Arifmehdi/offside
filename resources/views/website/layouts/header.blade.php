<div id="header-wrapper">
            	<header id="header" class="header1">
                    <!-- Top bar starts here -->
                    <div class="top-bar">
                        <div class="container">
                            <div class="dt-sc-contact-info">
                                <p><i class="fa fa-phone m-0" ></i>Any Questions? Call Us: <span>+880 175 791 4141</span></p>
                            </div>
                            <div class="top-right">
                                <ul>
                                    <li><a title="Login" href="{{ url('/login') }}"><span class="fa fa-sign-in"></span>Member Login</a></li>
                                    <li><a title="Register Now" href="{{ url('/register') }}"><span class="fa fa-user"></span> Register </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top bar ends here -->
                    <div class="main-menu-container">
                    	<div class="main-menu">
                            <div id="logo">
                                <a title="Travel" href="{{ route('web.home') }}"><img title="Fitness" alt="Fitness" src="{{ asset('website') }}/images/offside_logo_02.png"></a>
                            </div>
                            <div id="primary-menu">
                                <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                                <nav id="main-menu">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="current_page_item menu-item-simple-parent menu-item-depth-0"><a href="{{ route('web.home') }}">Home</a>
                                            {{--<ul class="sub-menu">
                                                <li><a href="indexv2.html">Home 2</a></li>
                                                <li class="current_page_item"><a href="indexv3.html">Home 3</a></li>
                                                <li><a href="indexv4.html">Home 4</a></li>
                                                <li><a href="indexv5.html">Home 5</a></li>
                                                <li><a href="header1.html">Headers</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="header1.html">Header 1</a></li>
                                                        <li><a href="header2.html">Header 2</a></li>
                                                        <li><a href="header3.html">Header 3</a></li>
                                                        <li><a href="header4.html">Header 4</a></li>
                                                        <li><a href="header5.html">Header 5</a></li>
                                                    </ul>
                                                    <a class="dt-menu-expand">+</a>
                                                </li>
                                                <li><a href="about.html">About Us 1</a></li>
                                                <li><a href="about-v2.html">About Us 2</a></li>
                                                <li><a href="one-page.html">One Page Layout</a></li>
                                            </ul>--}}
                                            <a class="dt-menu-expand">+</a>
                                        </li>

                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="{{ route('web.about') }}">About Us</a>
                                        </li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="{{ route('web.booking') }}">Booking</a>
                                        </li>
                                        {{--<li class="menu-item-megamenu-parent  megamenu-4-columns-group menu-item-depth-0"> <a href="about.html">Packages</a>
                                            <div class="megamenu-child-container">
                                                <ul class="sub-menu">
                                                    <li class="menu-item-fullwidth fill-four-columns">
                                                        <div class="menu-item-widget-area-container">
                                                            <ul>
                                                                <li class="widget">
                                                                    <div class="dt-sc-programs">
                                                                        <div class="dt-sc-pro-thumb">
                                                                            <a href="package-detail.html"><img src="{{ asset('website') }}/images/event1.jpg" alt="" title=""></a>
                                                                            <div class="programs-overlay">
                                                                                <div class="dt-sc-pro-title">
                                                                                    <h3>Muscle Build Pro</h3>
                                                                                    <span>1 yr training program</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-sc-pro-detail">
                                                                            <div class="dt-sc-pro-price">
                                                                                <p class="pro-price-content">
                                                                                    <sup>$</sup> 89.99/<span>6 Months</span>
                                                                                </p>
                                                                                <a class="dt-sc-button small" href="#" data-hover="Enroll Now">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="widget">
                                                                    <div class="dt-sc-programs">
                                                                        <div class="dt-sc-pro-thumb">
                                                                            <a href="package-detail.html"><img src="{{ asset('website') }}/images/event3.jpg" alt="" title=""></a>
                                                                            <div class="programs-overlay">
                                                                                <div class="dt-sc-pro-title">
                                                                                    <h3>Muscle Build Pro</h3>
                                                                                    <span>1 yr training program</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-sc-pro-detail">
                                                                            <div class="dt-sc-pro-price">
                                                                                <p class="pro-price-content">
                                                                                    <sup>$</sup> 89.99/<span>6 Months</span>
                                                                                </p>
                                                                                <a class="dt-sc-button small" href="#" data-hover="Enroll Now">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="widget">
                                                                    <div class="dt-sc-programs">
                                                                        <div class="dt-sc-pro-thumb">
                                                                            <a href="package-detail.html"><img src="{{ asset('website') }}/images/event2.jpg" alt="" title=""></a>
                                                                            <div class="programs-overlay">
                                                                                <div class="dt-sc-pro-title">
                                                                                    <h3>Muscle Build Pro</h3>
                                                                                    <span>1 yr training program</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-sc-pro-detail">
                                                                            <div class="dt-sc-pro-price">
                                                                                <p class="pro-price-content">
                                                                                    <sup>$</sup> 89.99/<span>6 Months</span>
                                                                                </p>
                                                                                <a class="dt-sc-button small" href="#" data-hover="Enroll Now">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="widget">
                                                                    <div class="dt-sc-programs">
                                                                        <div class="dt-sc-pro-thumb">
                                                                            <a href="package-detail.html"><img src="{{ asset('website') }}/images/event4.jpg" alt="" title=""></a>
                                                                            <div class="programs-overlay">
                                                                                <div class="dt-sc-pro-title">
                                                                                    <h3>Muscle Build Pro</h3>
                                                                                    <span>1 yr training program</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-sc-pro-detail">
                                                                            <div class="dt-sc-pro-price">
                                                                                <p class="pro-price-content">
                                                                                    <sup>$</sup> 89.99/<span>6 Months</span>
                                                                                </p>
                                                                                <a class="dt-sc-button small" href="#" data-hover="Enroll Now">Enroll Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="widgettitle">
                                                            <a href="#">About</a>
                                                        </div>
                                                        <div class="menu-item-widget-area-container">
                                                            <ul>
                                                                <li> 
                                                                    <div class="textwidget">
                                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                                                        <a href="#" class="dt-sc-button small" data-hover="View Programs">View Programs</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="widgettitle">
                                                            <a href="#">Useful Links</a>
                                                        </div>
                                                        <div class="menu-item-widget-area-container">
                                                            <ul>
                                                                <li>
                                                                    <div class="textwidget">
                                                                        <ul>
                                                                            <li> <a href="#" title=""> Food Habits </a> </li>
                                                                            <li> <a href="#" title=""> Check your Body Mass Ratio </a> </li>
                                                                            <li> <a href="#" title=""> Create a Workout Pattern </a> </li>
                                                                            <li> <a href="#" title=""> Before and After Pictures </a> </li>
                                                                            <li> <a href="#" title=""> Tips for Healthy a Lifestyle </a> </li>
                                                                            <li> <a href="#" title=""> Ripping out the best body </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="widgettitle">
                                                            <a href="#">Latest Blog</a>
                                                        </div>
                                                        <div class="menu-item-widget-area-container">
                                                            <ul>
                                                                <li> 
                                                                    <article class="blog-entry format-link">
                                                                        <div class="blog-entry-inner">
                                                                            <div class="entry-title">
                                                                                <h4><a href="#">Best Cardio Exercise</a></h4>
                                                                                <div class="entry-metadata">
                                                                                    <p class="tags"><a href="#">Workout </a> / <a href="#"> Diet</a></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="entry-thumb">
                                                                                <a href="blog-detail.html">
                                                                                    <img title="" alt="" src="{{ asset('website') }}/images/blog1.jpg">
                                                                                    <div class="blog-overlay"><span class="image-overlay-inside"></span></div>
                                                                                </a>
                                                                                <div class="entry-meta">
                                                                                    <div class="date">
                                                                                        <span>21</span>
                                                                                        mar<br>
                                                                                        2014
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="widgettitle">
                                                            <a href="#">Testimonials</a>
                                                        </div>
                                                        <div class="menu-item-widget-area-container">
                                                            <ul class="sub-menu">
                                                                <li> 
                                                                    <div class="textwidget">
                                                                        <div class="type2">
                                                                            <div class="dt-sc-testimonial">
                                                                                <blockquote>
                                                                                    <q> By injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </q>
                                                                                </blockquote>
                                                                                <div class="author">
                                                                                    <img title="John Doe" alt="John Doe" src="{{ asset('website') }}/images/team5.jpg">
                                                                                </div>
                                                                                <cite>
                                                                                    <a href="#">Jeniffer Aniston</a>
                                                                                    <span>Actor</span>
                                                                                </cite>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="dt-menu-expand">+</a>
                                        </li>--}}

                                        <!-- <li class="menu-item-megamenu-parent  megamenu-4-columns-group menu-item-depth-0"> <a href="shortcodes.html" title=""> pages </a>
                                            <div class="megamenu-child-container">
                                                <ul class="sub-menu">
                                                    <li> 
                                                        <div class="widgettitle">
                                                            <a href="#">Shortcodes I</a>
                                                        </div>
                                                        <ul class="sub-menu">
                                                            <li> <a href="shortcodes.html"> Typography </a> </li>
                                                            <li> <a href="tabs.html">  Tabs &amp; Toggles </a> </li>
                                                            <li> <a href="buttons.html"> Buttons &amp; Lists </a> </li>
                                                            <li> <a href="fancybox.html">  Fancy Boxes </a> </li>
                                                        </ul>
                                                        <a class="dt-menu-expand">+</a>
                                                    </li>
                                                    <li>
                                                        <div class="widgettitle">
                                                            <a href="#">Shortcodes II</a>
                                                        </div>
                                                        <ul class="sub-menu">
                                                            <li> <a href="progressbar.html"> Progress Bars </a> </li>
                                                            <li> <a href="quotes.html"> Quotes </a> </li>
                                                            <li> <a href="pricing-table.html"> Pricing Tables </a> </li>
                                                            <li> <a href="miscellaneous.html"> Miscellaneous </a> </li>
                                                        </ul>
                                                        <a class="dt-menu-expand">+</a>
                                                    </li>
                                                    <li>
                                                        <div class="widgettitle">
                                                             <a href="#">Shortcodes III</a>
                                                        </div>
                                                        <ul class="sub-menu">
                                                            <li> <a href="faq.html"> faq </a> </li>
                                                            <li> <a href="contact-info.html"> Contact Info </a> </li>
                                                            <li> <a href="our-shedule.html"> Our Shedule </a> </li>
                                                            <li> <a href="carousel.html"> Carousel </a> </li>
                                                        </ul>
                                                        <a class="dt-menu-expand">+</a>
                                                    </li>
                                                    <li>
                                                        <div class="widgettitle">
                                                             <a href="#">Shortcodes IV</a>
                                                        </div>
                                                        <ul class="sub-menu">
                                                            <li> <a href="columns.html"> Columns </a> </li>
                                                            <li> <a href="callout-boxes.html"> Callout Boxes </a> </li>
                                                            <li> <a href="services.html">  Services </a> </li>
                                                            <li> <a href="404.html"> 404 </a> </li>
                                                        </ul>
                                                        <a class="dt-menu-expand">+</a>
                                                    </li>
                                                    <li class="fulwidth-image-link menu-item-fullwidth">
                                                        <ul class="sub-menu">
                                                            <li><span class="nolink-menu"></span>
                                                                <div class="dt-megamenu-custom-content"><img src="{{ asset('website') }}/images/mega-menu-img.png" alt="" title=""></div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="dt-menu-expand">+</a>
                                        </li> -->
                                        <li class="menu-item-megamenu-parent  megamenu-4-columns-group menu-item-depth-0"> <a href="#" title="">Blog</a>
                                        </li>
                                        <li class="menu-item-megamenu-parent  megamenu-4-columns-group menu-item-depth-0"> 
                                            <a href="{{ route('web.gallery') }}" title=""> Gallery </a>
                                        </li>
                                        <li class="menu-item-simple-parent menu-item-depth-0">
                                            <a href="{{ route('web.contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
				</header>
			</div>