<!--footer -->
<footer>
    <section class="footer footer_1its py-5">
        <div class="container py-md-4">

            <div class="row footer-top mb-md-5 mb-4">
                <div class="col-lg-4 col-md-6 footer-grid_section_1its" data-aos="fade-right">
                    <div class="footer-title-w3ls">
                        <h3>Address</h3>
                    </div>
                    <div class="footer-text">
                        <p>Address : india</p>
                        <p>Phone : +91 7905920803</p>
                        <p>Email : <a href="mailto:info@example.com">rajkazmi901@gmail.com</a></p>
                        <p>Fax : </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                    <div class="footer-title-w3ls">
                        <h3>Quick Links</h3>
                    </div>
                    <div class="row">
                        <ul class="col-6 links">
                            <li><a href="about.php">Why Choose Us </a></li>
                            <li><a href="about.php">Overview </a></li>
                            <li><a href="#">Pricing Plans</a></li>                        
                            <li><a href="contact.php">Contact </a></li>
                        </ul>
                        <ul class="col-6 links">
                            <li><a href="#">Privacy Policy </a></li>
                            <li><a href="#">General Terms </a></li>
                            <li><a href="#faq" class="scroll">Faq's </a></li>
                            <li><a href="#">Knowledge </a></li>
                            <li><a href="#">Forum </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its" data-aos="fade-left">
                    <div class="footer-title-w3ls">
                        <h3>Newsletter</h3>
                    </div>
                    <div class="footer-text">
                        <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                        <form action="#" method="post">
                            <input type="email" name="Email" placeholder="Enter your email..." required="">
                            <button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            <div class="clearfix"> </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-grid_section text-center">
                <div class="footer-title-w3ls mb-3" data-aos="fade-up">
                    <a href="index.html" class="text-uppercase"><i  aria-hidden="true"></i> Entrtnmnt</a>
                </div>
                <div class="footer-text">
                    <p data-aos="fade-up">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur elit.</p>
                </div>
                <ul class="social_section_1info" data-aos="fade-up">
                    <li class="mb-2 facebook"><a href="#"><i class="fa fa-facebook mr-1"></i>facebook</a></li>
                    <li class="mb-2 twitter"><a href="#"><i class="fa fa-twitter mr-1"></i>twitter</a></li>
                    <li class="google"><a href="#"><i class="fa fa-google-plus mr-1"></i>google</a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin mr-1"></i>linkedin</a></li>
                </ul>
            </div>

        </div>
    </section>
</footer>
<!-- //footer -->

<!-- //copy-right -->
<div class="cpy-right text-center py-3">
    <p >© 2018. All rights reserved </p>
</div>
<!-- //copy-right -->


<script src="js/jquery-2.2.3.min.js"></script>
<!--/aos -->
<script src="js/aos.js"></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
<!--//aos -->
<!--/counter-->
<script src="js/counternew.js"></script>
<!--//counter-->
<!--/ start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
        						var defaults = {
        							  containerID: 'toTop', // fading element id
        							containerHoverID: 'toTopHover', // fading element hover id
        							scrollSpeed: 1200,
        							easingType: 'linear' 
        						 };
        						*/

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
    
    
</script>
<!--// end-smoth-scrolling -->

<!-- //js -->

<script src="js/bootstrap.js"></script>

</body>

</html>