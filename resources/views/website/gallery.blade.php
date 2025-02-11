@extends('website.layouts.app')

@section('content')
<!-- breadcrumb starts here -->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1 style="color:black">Gallery</h1>
        <div class="breadcrumb">
            <a href="{{ route('web.home') }}" style="color:black">Home</a>
            <span class="default"> /</span>
            <h4 style="color:black">Gallery</h4>
        </div>
    </div>
</div>
<!-- breadcrumb ends here -->
<div id="main">
    <!-- main-content starts here -->
    <div id="main-content">
        <section id="primary" class="content-full-width">
            <div class="dt-sc-hr-invisible"></div>
            <div class="dt-sc-hr-invisible-small"></div>
            <div class="container">
                <div class="dt-sc-sorting-container">
                    <a class="first active-sort" data-filter="*" href="#">All</a>
                    <a data-filter=".agility" href="#">Agility</a>
                    <a data-filter=".coordination" href="#">Coordination</a>
                    <a data-filter=".flexibility" href="#">Flexibility</a>
                    <a data-filter=".games" href="#">Games</a>
                    <a data-filter=".quickness" href="#">Quickness</a>
                </div>
                <div class="dt-sc-portfolio-container">
                    <div class="portfolio dt-sc-one-fourth column flexibility games">
                        <div class="portfolio-thumb">
                            <img src="{{ asset('website') }}/images/portfolio1.jpg" alt="" title="">
                            <div class="image-overlay">
                                <div class="fig-content-wrapper">
                                    <div class="fig-overlay">
                                        <p>
                                            <a href="{{ asset('website') }}/images/portfolio1.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                            <a href="#" class="link"> <span class="fa fa-link"> </span> </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h4><a href="#">Play Football</a></h4>
                                <p><a href="#">Events</a></p>
                            </div>
                            <div class="views">
                                <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-fourth column agility coordination quickness">
                        <div class="portfolio-thumb">
                            <img src="{{ asset('website') }}/images/portfolio2.jpg" alt="" title="">
                            <div class="image-overlay">
                                <div class="fig-content-wrapper">
                                    <div class="fig-overlay">
                                        <p>
                                            <a href="{{ asset('website') }}/images/portfolio2.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                            <a href="#" class="link"> <span class="fa fa-link"> </span> </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h4><a href="#">Achivement</a></h4>
                                <p><a href="#">Events</a></p>
                            </div>
                            <div class="views">
                                <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-fourth column flexibility games quickness">
                        <div class="portfolio-thumb">
                            <img src="{{ asset('website') }}/images/portfolio3.jpg" alt="" title="">
                            <div class="image-overlay">
                                <div class="fig-content-wrapper">
                                    <div class="fig-overlay">
                                        <p>
                                            <a href="{{ asset('website') }}/images/portfolio3.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                            <a href="#" class="link"> <span class="fa fa-link"> </span> </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h4><a href="#">Pick Offer</a></h4>
                                <p><a href="#">Events</a></p>
                            </div>
                            <div class="views">
                                <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-fourth column agility coordination">
                        <div class="portfolio-thumb">
                            <img src="{{ asset('website') }}/images/portfolio4.jpg" alt="" title="">
                            <div class="image-overlay">
                                <div class="fig-content-wrapper">
                                    <div class="fig-overlay">
                                        <p>
                                            <a href="{{ asset('website') }}/images/portfolio4.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                            <a href="#" class="link"> <span class="fa fa-link"> </span> </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h4><a href="#">Perfect Shots</a></h4>
                                <p><a href="#">Events</a></p>
                            </div>
                            <div class="views">
                                <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-fourth column flexibility quickness">
                        <div class="portfolio-thumb">
                            <img src="{{ asset('website') }}/images/portfolio4.jpg" alt="" title="">
                            <div class="image-overlay">
                                <div class="fig-content-wrapper">
                                    <div class="fig-overlay">
                                        <p>
                                            <a href="{{ asset('website') }}/images/portfolio4.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                            <a href="#" class="link"> <span class="fa fa-link"> </span> </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h4><a href="#">Greate Shot</a></h4>
                                <p><a href="#">Events</a></p>
                            </div>
                            <div class="views">
                                <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-fourth column agility coordination games">
                        <div class="portfolio-thumb">
                            <img src="{{ asset('website') }}/images/portfolio3.jpg" alt="" title="">
                            <div class="image-overlay">
                                <div class="fig-content-wrapper">
                                    <div class="fig-overlay">
                                        <p>
                                            <a href="{{ asset('website') }}/images/portfolio3.jpgg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                            <a href="#" class="link"> <span class="fa fa-link"> </span> </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h4><a href="#">Pick And offer</a></h4>
                                <p><a href="#">Events</a></p>
                            </div>
                            <div class="views">
                                <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-fourth column coordination flexibility">
                        <div class="portfolio-thumb">
                            <img src="{{ asset('website') }}/images/portfolio2.jpg" alt="" title="">
                            <div class="image-overlay">
                                <div class="fig-content-wrapper">
                                    <div class="fig-overlay">
                                        <p>
                                            <a href="{{ asset('website') }}/images/portfolio2.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                            <a href="#" class="link"> <span class="fa fa-link"> </span> </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h4><a href="#">Achieve New</a></h4>
                                <p><a href="#">Events</a></p>
                            </div>
                            <div class="views">
                                <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-fourth column quickness agility">
                        <div class="portfolio-thumb">
                            <img src="{{ asset('website') }}/images/portfolio1.jpg" alt="" title="">
                            <div class="image-overlay">
                                <div class="fig-content-wrapper">
                                    <div class="fig-overlay">
                                        <p>
                                            <a href="{{ asset('website') }}/images/portfolio1.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                            <a href="#" class="link"> <span class="fa fa-link"> </span> </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h4><a href="#">Play Football</a></h4>
                                <p><a href="#">Events</a></p>
                            </div>
                            <div class="views">
                                <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- support starts here -->
            <div class="dt-sc-hr-invisible-large"></div>
        </section>
    </div>
    <!-- main-content ends here -->
</div>
@endsection