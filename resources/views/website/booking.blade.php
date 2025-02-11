@extends('website.layouts.app')

@section('content')
<!-- breadcrumb starts here -->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1 style="color:black">Book Slot</h1>
        <div class="breadcrumb">
            <a href="{{ route('web.home') }}" style="color:black">Home</a>
            <span class="default"> /</span>
            <h4 style="color:black">Booking Slot</h4>
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
                <style>
                    /* Responsive Container */
                    .container {
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-between;
                        gap: 20px;
                    }

                    /* Column Styling */
                    .dt-sc-one-half {
                        flex: 1;
                        min-width: 100%;
                        /* Full width on small screens */
                    }

                    @media (min-width: 768px) {
                        .dt-sc-one-half {
                            min-width: 48%;
                            /* 2 columns side by side */
                        }
                    }

                    /* Video Container Styling */
                    .video-container {
                        position: relative;
                        width: 100%;
                        text-align: center;
                    }

                    .video-container img {
                        width: 100%;
                        height: auto;
                        border-radius: 10px;
                    }

                    .video-container button {
                        margin-top: 10px;
                        padding: 10px 20px;
                        font-size: 16px;
                        border: none;
                        background-color: #ff6600;
                        color: white;
                        border-radius: 5px;
                        cursor: pointer;
                        transition: 0.3s;
                    }

                    .video-container button:hover {
                        background-color: #cc5500;
                    }
                </style>

                <div class="container">
                    <div class="dt-sc-one-half animate" data-animation="fadeInLeft" data-delay="100">
                        <div class="dt-sc-hr-invisible-small"></div>
                        <!-- Embed YouTube Video -->
                        <div class="video-container">
                            <img src="https://st2.depositphotos.com/2550635/7519/i/450/depositphotos_75199819-Football-playground-view-of-grass-field-gate-at-the-end.-Detail-of-a-corner-in-a-soccer-field.-Plastic-grass-and-finely-ground-black-rubber..jpg" alt="">
                            <!-- <button>Book A Slot</button> -->
                            <a href="{{ route('web.booking.calendar') }}"><button type="submit" name="submit" value="Book A Slot" style="background: #BC4D9D">Book A Slot</button></a>
                        </div>
                    </div>

                    <div class="dt-sc-one-half first animate about-section" data-animation="fadeInUp" data-delay="100">
                        <h4 class="section-title" style="margin-left: 1rem">Offside Time Slot</h4>

                        <div class="working-hours">
                            <ul>
                                <li> Saturday 11:00 AM - 2:00 PM</li>
                                <li> Sunday 11:00 AM - 2:00 PM</li>
                                <li> Monday 10:00 AM - 1:00 PM</li>
                                <li> Tuesday 10:00 AM - 1:00 PM</li>
                                <li> Wednesday 10:00 AM - 1:00 PM</li>
                                <li> Thursday 10:00 AM - 1:00 PM</li>
                                <li> Friday 10:00 AM - 1:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Events starts here -->

                <div class="dt-sc-hr-invisible-medium"></div>


                <div class="dt-sc-hr-invisible-large"></div>
        </section>
    </div>
    <!-- main-content ends here -->
</div>
@endsection