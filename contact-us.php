<?php
include_once("components/header_t.php");
echo '<title>Contact us</title>';
include_once("components/header_b.php"); ?>



<section class="section-contact-form" id="js--active-sticky">
<div class="container">
    <h2>Contact Form</h2>
</div>
<div class="container">
    <div class="wrapper form-wrapper">
            <div class="main-contact-form contact-form">
                    <div id="en-status"></div>
                    <form id="contactUs" action="#">
                        <div class="form-group">
                            <label for="idname">Full name</label>
                            <input type="text" name="name" id="idname" required="requiered">
                        </div>
                         
                        <div class="form-group">
                            <label for="idphone">Mobile number</label>
                            <input type="number" name="number" id="idphone">
                        </div>
    
                        <div class="form-group">
                            <label for="idmail">E-mail</label>
                            <input type="email" name="mail" id="idmail">
                        </div>
                        <div class="form-group">
                            <label for="idcourse">Course</label>
                            <select class="form-control" name="course" id="idCourses">
                                <option value="null">-select-</option>
                                <option value="D. Pharma.">D Pharma.</option>
                                <option value="B. Pharma.">B Pharma.</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="idmsg">Message</label>
                            <input name="msg" type="text" id="idmsg">
                        </div>
                        <div class="form-group">
                            <input type="button" class="btn btn-md btn-primary contactUs" value="Submit">
                        </div>
                    </form>
                </div>
    </div>
</div>
</section>
<section class="section-contact jumbotron" style="margin-bottom: 0;">
<div class="container">
    <h2>Our Contacts</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="wrapper">
            <span class="icon-wrapper"><i class="icon ion-ios-pin icon-big"></i></span>
            <div class="b-info b-address">
                <h5 class="align-left b">Address:</h5><br/>
                Loknete Appasaheb Rajale College of Pharmacy<br/>
Adinathnagar.
Tq. Pathardi Dist. Ahilyanagar <br/>Pin - 414505. Maharashtra, India.
                
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="wrapper">
            <span class="icon-wrapper"><i class="icon ion-ios-call icon-big"></i></span>
            <div class="b-info b-address">
                <h5 class="align-left b-phone">Phone:</h5><br/>
                <p>
                    -&nbsp;&nbsp;<a href="tel:919158026328">+91 91 5802 6328</a><br>
                    -&nbsp;&nbsp;<a href="tel:919421170430">+91 94 2117 0430</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="wrapper">
        <span class="icon-wrapper"><i class="icon ion-ios-mail icon-big"></i></span>
        <div class="b-info b-email">
            <h5 class="align-left">E-mail: </h5><br/>
            <p class="b-email">
                <a href="mailto:larc.pharmacy@gmail.com">larc.pharmacy@gmail.com</a>
            </p>
        </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
       <div class="wrapper">
            <span class="icon-wrapper"><i class="icon ion-ios-time icon-big "></i></span>
            <div class="b-info  b-work">
                    <h5 class="align-left">Working Hours: </h5><br/>
                    <p class="b-work">
                        Monday-Saturday
                        09:30AM to 05:30PM
                    </p>
                </div>
        </div>
    </div>
    <style>
        .social-bottom {
            background-color: transparent;
            padding: 0;
        }
        .social-bottom div{
            background-color: #efefef;
        }
    </style>
    <div class="col-sm-12 col-md-6 col-lg-6">
       <div class="wrapper">
            <span class="icon-wrapper"><i class="icon ion-ios-git-network icon-big "></i></span>
            <div class="b-info  b-social">
                    <h5 class="align-left">Social Network</h5>
                    <p class="b-social">
                    <div class="social-top social-bottom">
                            <div style="display: inline-block;"><a href="https://www.facebook.com/p/Loknete-Appasaheb-Rajale-College-of-Pharmacy-61571782545648/" target="_blank"><img class="icon-social facebook" src="resources/images/icons/ic_facebook_circle.png" alt="facebook"><p>LARCOP Adinathnagar</p></a></div>
                            <div style="display: inline-block;"><a href="" target="_blank"><img class="icon-social twitter" src="resources/images/icons/ic-twitter-circle.png" alt="twitter"><p>LARCOP Adinathnagar</p></a></div>
                            <div style="display: inline-block;"><a href="https://www.instagram.com/larcop_adinathnagar" target="_blank"><img class="icon-social instagram" src="resources/images/icons/ic-instagram.png" alt="instagram"><p>LARCOP Adinathnagar</p></a></div>

                        </div>
                    </p>
                </div>
        </div>
    </div>
    </div>
</div>
</section>
<section class="section-google-map">
<div class="main-wrapper">
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.4359761979113!2d75.09662279999999!3d19.2198221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb5bdbd05b9c47%3A0xc233e685b4b4e53b!2sLoknete%20Appasaheb%20Rajale%20College%20of%20Pharmacy!5e0!3m2!1sen!2sin!4v1780213906306!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
</section>

<?php
  include_once('components/footer.php');
?>