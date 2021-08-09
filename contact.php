<?php include "header.php"; ?>


</div>
<div id="in">
    <!-- banner-w3layouts -->
    <section class="ab-info-main py-md-5 py-5">
        <div class="container py-md-5 py-5">
            <div class="ab-info-grids pt-md-5 pt-3">
                <div class="contact-info pt-md-5 pt-0 text-center">
                    <h3 class="tittle text-uppercase text-center mb-lg-5 mb-3 inner-tittle"><span class="sub-tittle">Find Us</span> Contact Us</h3>
                    <p class="text-center" data-aos="fade-up">Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis,Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
                    <div class="contact-form mt-md-5">
                        <div class="contact-form-inner mx-auto text-left">
                            <form name="contactform " id="contactform" method="post" action="#" onsubmit="return(validate());" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" data-aos="fade-up">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                                        </div>
                                        <div class="form-group" data-aos="fade-up">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
                                        </div>

                                    </div>
                                    <div class="col-lg-6">

                                        <div class="form-group" data-aos="fade-up">
                                            <label>Phone No.</label>
                                            <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
                                        </div>
                                        <div class="form-group" data-aos="fade-up">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" id="name" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" data-aos="fade-up">
                                    <label>How can we help?</label>
                                    <textarea name="issues" class="form-control" id="iq" placeholder="Enter Your Message Here"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                            <div class="map mt-md-5" data-aos="fade-up">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-w3layouts -->
    <!--/newsletter -->
    <section class="subscribe-main py-lg-5 py-4">
        <div class="container">
            <div class="newsletter-info text-center p-md-5 py-md-0 py-5 px-md-0 px-4">
                <form action="#" method="post" class="d-flex">
                    <input type="email" name="email" placeholder="Enter your Email..." required="">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
    <!--//newsletter-->
</div>

<?php include "footer.php"; ?>