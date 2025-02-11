@extends('website.layouts.app')

@section('content')
<!-- breadcrumb starts here -->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1 style="color:black">Contact</h1>
        <div class="breadcrumb">
            <a href="{{ route('web.home') }}" style="color:black">Home</a>
            <span class="default"> /</span>
            <h4 style="color:black">Contact</h4>
        </div>
    </div>
</div>
<!-- breadcrumb ends here -->
<div id="main">
    <!-- main-content starts here -->
    <div id="main-content">
        <section id="primary" class="content-full-width">
            <div class="fullwidth-section full-contact dt-sc-paralax" style="background:url({{ asset('website') }}/images/contact-bg.jpg) fixed; padding:50px 0px;">
                <div class="container">
                    <div class="dt-sc-one-half column first">
                        <h3>Contact us</h3>
                        <div id="ajax_contact_msg"></div>
                        <form name="frmcontact" action="https://wedesignthemes.com/html/fitness/php/send.php" method="post" id="contact-form">
                            <div class="dt-sc-one-half column first">
                                <input type="text" name="txtname" placeholder="Enter name..." required>
                            </div>
                            <div class="dt-sc-one-half column">
                                <input type="email" name="txtemail" placeholder="Enter email..." required>
                            </div>
                            <div class="clear"></div>
                            <div class="selection-box">
                                <select name="cmbsubject">
                                    <option value="Ask a Question?">Ask a Question?</option>
                                    <option value="How I boooked ?">How I boooked ?</option>
                                    <option value="How I payment ?">How I payment ?</option>
                                </select>
                            </div>
                            <textarea name="txtmessage" placeholder="Type your queries..." required></textarea>
                            <input type="submit" name="submit" value="Submit Query">
                        </form>
                    </div>
                    <div class="dt-sc-one-half column">
                        <h3>We are here</h3>
                        <div>
                            <h3>About Us</h3>
                            <p>Welcome to OFFSIDE, your ultimate destination for fun, fitness, and sports! We offer a well-maintained playground with multiple slots available for booking, allowing you to enjoy your favorite games at your convenience. Whether you're a casual player, a sports enthusiast, or part of a team, we provide a hassle-free booking experience to ensure you get the perfect time slot for your gam</p>
                        </div>
                        <div class="dt-sc-hr-invisible"></div>
                        <div class="dt-sc-one-half column first">
                            <div class="dt-sc-contact-info type1 address">
                                <p><i class="fa fa-rocket"></i>422, Ground Zero Complex <br> Abdus Sobhan Dali Road <br> Bashundhara R/A</p>
                            </div>
                            <div class="dt-sc-contact-info type1 time">
                                <p><i class="fa fa-clock-o"></i>CLASSES TIMING <br>8AM - 12AM<br> Saturday - Wednesday </p>
                            </div>
                        </div>
                        <div class="dt-sc-one-half column">
                            <div class="dt-sc-contact-info type1">
                                <p><i class="fa fa-phone"></i>+880 175 791 4141</p>
                            </div>
                            <div class="dt-sc-hr-invisible-small"></div>
                            <div class="dt-sc-contact-info type1">
                                <p><i class="fa fa-globe"></i><a href="https://www.google.com/" target="_blank">google.com</a></p>
                            </div>
                            <div class="dt-sc-hr-invisible-small"></div>
                            <div class="dt-sc-contact-info type1">
                                <p><i class="fa fa-envelope"></i><a href="#"><span class="__cf_email__" data-cfemail="mehediarif.du2gmail.com">[email&#160;protected]</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dt-sc-hr-invisible-medium"></div>
            <div class="fullwidth-section support" style="width: 100vw; margin: 0; padding: 0;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3290397769956!2d90.42440217592876!3d23.80689578660394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79666e32f03%3A0xfe1577c2a00204f5!2sGround%20Zero!5e0!3m2!1sen!2sbd!4v1739178236072!5m2!1sen!2sbd"
                    style="width: 100vw; height: 60vh; border: none;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="dt-sc-hr-invisible-large"></div>
        </section>
    </div>
    <!-- main-content ends here -->
</div>
@endsection