@extends('website.layouts.app')

@section('content')
<!-- breadcrumb starts here -->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1 style="color:black">About Us</h1>
        <div class="breadcrumb">
            <a href="{{ route('web.home') }}" style="color:black">Home</a>
            <span class="default"> /</span>
            <h4 style="color:black">About</h4>
        </div>
    </div>
</div>
<!-- breadcrumb ends here -->
<div id="main">
    <!-- main-content starts here -->
    <div id="main-content">
        <section id="primary" class="content-full-width">
            <div class="dt-sc-hr-invisible"></div>
            <div class="dt-sc-hr-invisible"></div>
            <div class="fullwidth-section dt-sc-paralax">
                <div class="container">
                    <div class="dt-sc-one-half column first animate" data-animation="fadeInUp" data-delay="100">
                        <h4 class="section-title">About Us</h4>
                        <p><i>Aenean leo</i> ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. <i>Phasellus viverra</i> nulla ut metus varius laoreet. Quisque rutrum. Sem quam semper libero, sit amet adipiscing sed ipsum. </p>
                        <div class="dt-sc-hr-invisible-small"></div>
                        <p><i>Excepteur</i> sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i>Nemo enim ipsam</i> voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est sed quia consequuntur magni dolores eos. </p>
                    </div>
                    <div class="dt-sc-one-half column animate" data-animation="fadeInLeft" data-delay="100">
                        <h4 class="section-title">We Are</h4>
                        <div class="dt-sc-hr-invisible-small"></div>
                        <!-- Embed YouTube Video -->
                        <div class="video-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/wHa7rzS4CjE?si=GQ9m4Pvo624RmHy1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Events starts here -->

            <div class="dt-sc-hr-invisible-medium"></div>

            <div class="fullwidth-section">
                <div class="container animate" data-animation="fadeInUp" data-delay="100">
                    <div class="dt-sc-tabs-container">
                        <ul class="dt-sc-tabs-frame">
                            <li><a href="#" class="current"> Extreme Play </a></li>
                            <li><a href="#"> Fitness for Play </a></li>
                            <li><a href="#"> Relaxation </a></li>
                        </ul>
                        <div class="dt-sc-tabs-frame-content">
                            <div class="dt-sc-hr-invisible-small"></div>
                            <div class="dt-sc-one-half column first">
                                <h2>Want to turn into a muscular person and impress everyone?</h2>
                                <div class="dt-sc-hr-invisible-small"></div>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
                                <p>Cras fringilla leo non quam placerat egestas. Nulla facilisi. Mauris magna enim, ullamcorper et leo a, commodo facilisis enim. Nulla non porta quam. </p>
                            </div>
                            <div class="dt-sc-one-half column">
                                <ul class="dt-sc-fancy-list circle-o custom-fancy-ico">
                                    <li>
                                        <h5>Improve your Diet</h5>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. </p>
                                    </li>
                                    <li>
                                        <h5>Stay Determined</h5>
                                        <p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
                                    </li>
                                    <li>
                                        <h5>Push your Limits</h5>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dt-sc-tabs-frame-content">
                            <div class="dt-sc-hr-invisible-small"></div>
                            <div class="dt-sc-one-half column first">
                                <h2>Maecenas id dui pretium, posuere metus elementum?</h2>
                                <div class="dt-sc-hr-invisible-small"></div>
                                <p>Cras fringilla leo non quam placerat egestas. Nulla facilisi. Mauris magna enim, ullamcorper et leo a, commodo facilisis enim. Nulla non porta quam. </p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
                            </div>
                            <div class="dt-sc-one-half column">
                                <ul class="dt-sc-fancy-list circle-o custom-fancy-ico">
                                    <li>
                                        <h5>Improve your Diet</h5>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. </p>
                                    </li>
                                    <li>
                                        <h5>Stay Determined</h5>
                                        <p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
                                    </li>
                                    <li>
                                        <h5>Push your Limits</h5>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dt-sc-tabs-frame-content">
                            <div class="dt-sc-hr-invisible-small"></div>
                            <div class="dt-sc-one-half column first">
                                <h2>Cras fringilla leo non quam placerat egestas?</h2>
                                <div class="dt-sc-hr-invisible-small"></div>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
                                <p>Cras fringilla leo non quam placerat egestas. Nulla facilisi. Mauris magna enim, ullamcorper et leo a, commodo facilisis enim. Nulla non porta quam. </p>
                            </div>
                            <div class="dt-sc-one-half column">
                                <ul class="dt-sc-fancy-list circle-o custom-fancy-ico">
                                    <li>
                                        <h5>Improve your Diet</h5>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. </p>
                                    </li>
                                    <li>
                                        <h5>Stay Determined</h5>
                                        <p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
                                    </li>
                                    <li>
                                        <h5>Push your Limits</h5>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabs ends here -->

            <div class="dt-sc-hr-invisible"></div>

            <!-- Paralax msg ends here -->
            <div class="dt-sc-hr-invisible-large"></div>
            <!-- Fulwidth starts here -->
            <div class="fullwidth-section dt-sc-paralax full-pattern3" style="background:url({{ asset('website') }}/images/pattern3.jpg) repeat; padding:70px 0px;">
                <div class="container">
                    <div class="dt-sc-one-half column first animate" data-animation="fadeInUp" data-delay="100">
                        <h2>Promo Ads that Enhances your Website to display in another level.</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. </p>
                        <div class="dt-sc-hr-invisible-small"></div>
                        <div class="dt-sc-one-half column first">
                            <div class="dt-sc-ico-content type4 black">
                                <div class="icon">
                                    <span class="fa fa-music"> </span>
                                </div>
                                <h3>Audio File Support</h3>
                            </div>
                            <div class="dt-sc-ico-content type4 black">
                                <div class="icon">
                                    <span class="fa fa-image"> </span>
                                </div>
                                <h3>Parallax Image Support</h3>
                            </div>
                        </div>
                        <div class="dt-sc-one-half column animate" data-animation="fadeInUp" data-delay="100">
                            <div class="dt-sc-ico-content type4 black">
                                <div class="icon">
                                    <span class="fa fa-video-camera"> </span>
                                </div>
                                <h3>Video File Support</h3>
                            </div>
                            <div class="dt-sc-ico-content type4 black">
                                <div class="icon">
                                    <span class="fa fa-book"> </span>
                                </div>
                                <h3>Exclusive Documentation</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dt-sc-one-half column animate" data-animation="fadeInRight" data-delay="100">
                        <img src="{{ asset('website') }}/images/weightlifting.png" alt="" title="">
                    </div>
                </div>
            </div>
            <!-- Fulwidth ends here -->
            <div class="dt-sc-hr-invisible-large"></div>
            <!-- Team starts here -->
            <div class="fullwidth-section dt-sc-paralax">
                <div class="container">
                    <h2 class="border-title aligncenter"> <span> Honourable Member </span></h2>
                    <div class="dt-sc-one-fourth column first animate" data-animation="fadeInLeft" data-delay="100">
                        <div class="dt-sc-team type2">
                            <div class="team-thumb">
                                <img src="{{asset('website')}}/images/teams.jpg" alt="" title="">
                                <h3><span>Abdur</span> <br><span>Rahim</span></h3>
                                <div class="team-detail">
                                    <h4>Honourable Member</h4>
                                    <ul>
                                        <li><span class="fa fa-trophy"></span> <b>Awards:</b> 5 </li>
                                        <li><span class="fa fa-mortar-board"></span> Football Club </li>
                                        <li><span class="fa fa-certificate"></span> <b>Experience:</b> 3+ years </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="dt-sc-social-icons">
                                <li class="facebook"><a class="fab fa-facebook" href="#"></a></li>
                                <li class="google"><a class="fab fa-google-plus" href="#"></a></li>
                                <li class="twitter"><a class="fab fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dt-sc-one-fourth column animate" data-animation="fadeInUp" data-delay="100">
                        <div class="dt-sc-team type2">
                            <div class="team-thumb">
                                <img src="{{asset('website')}}/images/teams.jpg" alt="" title="">
                                <h3><span>Mohammad </span><br><span>James</span></h3>
                                <div class="team-detail">
                                    <h4>Honourable Member</h4>
                                    <ul>
                                        <li><span class="fa fa-trophy"></span> <b>Awards:</b> 5 </li>
                                        <li><span class="fa fa-mortar-board"></span> Football Club </li>
                                        <li><span class="fa fa-certificate"></span> <b>Experience:</b> 3+ years </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="dt-sc-social-icons">
                                <li class="facebook"><a class="fab fa-facebook" href="#"></a></li>
                                <li class="google"><a class="fab fa-google-plus" href="#"></a></li>
                                <li class="twitter"><a class="fab fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dt-sc-one-fourth column animate" data-animation="fadeInDown" data-delay="100">
                        <div class="dt-sc-team type2">
                            <div class="team-thumb">
                                <img src="{{asset('website')}}/images/teams.jpg" alt="" title="">
                                <h3><span>Alisa</span> <br><span>Meow</span></h3>
                                <div class="team-detail">
                                    <h4>Honourable Member</h4>
                                    <ul>
                                        <li><span class="fa fa-trophy"></span> <b>Awards:</b> 5 </li>
                                        <li><span class="fa fa-mortar-board"></span> Football Club </li>
                                        <li><span class="fa fa-certificate"></span> <b>Experience:</b> 3+ years </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="dt-sc-social-icons">
                                <li class="facebook"><a class="fab fa-facebook" href="#"></a></li>
                                <li class="google"><a class="fab fa-google-plus" href="#"></a></li>
                                <li class="twitter"><a class="fab fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dt-sc-one-fourth column animate" data-animation="fadeInRight" data-delay="100">
                        <div class="dt-sc-team type2">
                            <div class="team-thumb">
                                <img src="{{asset('website')}}/images/teams.jpg" alt="" title="">
                                <h3><span>Mr.</span> <br><span>John</span></h3>
                                <div class="team-detail">
                                    <h4>Honourable Member</h4>
                                    <ul>
                                        <li><span class="fa fa-trophy"></span> <b>Awards:</b> 5 </li>
                                        <li><span class="fa fa-mortar-board"></span> Football Club </li>
                                        <li><span class="fa fa-certificate"></span> <b>Experience:</b> 3+ years </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="dt-sc-social-icons">
                                <li class="facebook"><a class="fab fa-facebook" href="#"></a></li>
                                <li class="google"><a class="fab fa-google-plus" href="#"></a></li>
                                <li class="twitter"><a class="fab fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team ends here -->
            <div class="dt-sc-hr-invisible-medium"></div>

            <div class="fullwidth-section dt-sc-paralax full-pattern4 aligncenter  intro-text type1" style="background:url({{ asset('website')}}/images/pattern4.jpg) repeat; padding:70px 0px; background-attachment:fixed;">
                <div class="container animate" data-animation="zoomIn" data-delay="100">
                    <h2 class="section-title"> <span> Today's Fitness Message </span> </h2>
                    <p>The World Health Organization recommends that adults 18-65 years old get "30 minutes of moderate-intensity physical activity 5 days per week" or "20 minutes of vigorous-intensity physical activity 3 days per week" </p>
                    <div class="dt-sc-hr-invisible-small"></div>
                    <a href="#">Get the list of High Intensity Workouts</a>
                </div>
            </div>
            <div class="dt-sc-hr-invisible"></div>

            <style>
                .slot_fullwidth-section .container {
                    display: flex;
                    flex-wrap: wrap;
                    /* Ensures responsiveness */
                    justify-content: space-between;
                    /* Ensures spacing between columns */
                }

                .slot_dt-sc-one-half {
                    flex: 1;
                    /* Makes both divs take equal space */
                    min-width: 45%;
                    /* Ensures they don’t shrink too much */
                }
            </style>
            <!-- fullwidth section starts here -->
            <div class="slot_fullwidth-section">
                <div class="container">
                    <div class="dt-sc-hr-invisible"></div>
                    <div class="slot_dt-sc-one-half column">
                        <h2 class="border-title"> <span> Day Slot </span></h2>
                        <div class="working-hours">
                            <ul>
                                <li><span class="opening-hour">08:00 - 9:00</span></li>
                                <li><span class="opening-hour">09:00 - 10:00</span></li>
                                <li><span class="opening-hour">10:00 - 11:00</span></li>
                                <li><span class="opening-hour">11:00 - 12:00</span></li>
                                <li><span class="opening-hour">12:00 - 13:00</span></li>
                                <li><span class="opening-hour">13:00 - 14:00</span></li>
                                <li><span class="opening-hour">14:00 - 15:00</span></li>
                                <li><span class="opening-hour">15:00 - 16:00</span></li>
                                <li><span class="opening-hour">16:00 - 17:00</span></li>
                            </ul>
                            <p><b>Note:</b> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium will be presented.</p>
                        </div>
                    </div>
                    <div class="slot_dt-sc-one-half column">
                        <h2 class="border-title"> <span> Night Slot </span></h2>
                        <div class="working-hours">
                            <ul>
                                <li><span class="opening-hour">19:30 - 21:00</span></li>
                                <li><span class="opening-hour">21:00 - 22:30</span></li>
                                <li><span class="opening-hour">22:30 - 24:00</span></li>
                                <li><span class="opening-hour">24:00 - 01:30</span></li>
                                <li><span class="opening-hour">01:30 - 03:00</span></li>
                            </ul>
                            <p><b>Note:</b> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium will be presented.</p>
                        </div>
                    </div>
                    <div class="dt-sc-hr-invisible"></div>
                </div>
            </div>
            <!-- fullwidth section ends here -->
            <div class="dt-sc-hr-invisible"></div>
            <div class="fullwidth-section dt-sc-paralax full-twitter">
                <div class="paralax-overlay">
                    <div class="container">
                        <div class="dt-sc-hr-invisible-medium"></div>
                        <h2 class="one-page-title aligncenter"> Twitter Feed </h2>
                        <div class="dt-sc-hr-invisible-small"></div>
                        <div class="tweet-box">
                            <div class="container">
                                <div id="tweets_container"></div>
                            </div>
                        </div>
                        <div class="dt-sc-hr-invisible-medium"></div>
                    </div>
                </div>
            </div>
            <div class="dt-sc-hr-invisible-normal"></div>
            <div class="dt-sc-hr-invisible"></div>
            <!-- welcome-txt starts here -->
            <div class="fullwidth-section dt-sc-paralax">
                <div class="container">
                    <div class="welcome-txt animate" data-animation="zoomIn" data-delay="100">
                        <h3>We have the best Equipments, Coachers and the Best Training Programs</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore <br>veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                        <a href="#" class="dt-sc-button medium" data-hover="View Programs">View Programs</a>
                        <a href="#" class="dt-sc-button medium" data-hover="Sign Up Now">Sign Up Now</a>
                    </div>
                </div>
            </div>
            <!-- welcome-txt ends here -->
            <div class="dt-sc-hr-invisible-large"></div>
        </section>
    </div>
    <!-- main-content ends here -->
</div>
@endsection