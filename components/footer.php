<footer>
  <div class="container">
          <div class="row">
              <!--<div class="col-lg-2 col-md-2 col-sm-12 co-xs-12">-->
              <!--   <img src="/img/logo_tr.png" class="logo-footer" alt="rcph">-->
              <!--</div>-->
              
          
              <div class="col-lg-3 col-md-3 col-sm-12 co-xs-12">
                      <h4>Contact</h4>
                      <ul class="icon_bunch">
                          <li>
                              <a href="tel:919158026328"><i class="icon ion-md-call icon-small"></i>+91 91 5802 6328</a>
                          </li>
                          <li>
                              <a href="tel:919421170430"><i class="icon ion-md-call icon-small"></i>+91 94 2117 0430</a>
                          </li>
                          <li><a href="mailto:larc.pharmacy@gmail.com"><i class="icon ion-ios-mail icon-small"></i>larc.pharmacy@gmail.com</a></li>
                      </ul>                                                    
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 co-xs-12">
                      <h4>Institute Address</h4>
                      <p>Loknete Appasaheb Rajale College of Pharmacy <br> (D. Pharm & B. Pharm), Adinathnagar.
                          <br>Tq. Pathardi
                          Dist. Ahilyanagar
                          Pin – 414505.
                          Maharashtra, India.
                          </p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 co-xs-12">
                  <h4>Social links</h4>
<div class="social-links">
            <a target="_blank" class="icon ion-logo-linkedin social-icon" href="https://www.linkedin.com/in/loknete-appasaheb-rajale-college-of-pharmacy-0b3a59415/"></a>
            <a target="_blank" class="icon ion-logo-facebook social-icon"
              href="https://www.facebook.com/p/Loknete-Appasaheb-Rajale-College-of-Pharmacy-61571782545648/"></a>
            <a target="_blank" class="icon ion-logo-instagram social-icon"
              href="https://www.instagram.com/larcop_adinathnagar"></a>
          </div>

                  
              </div>
            <div class="col-lg-2 col-md-2 col-sm-12 co-xs-12">
                <div class="google-map mt-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.4359761979113!2d75.09662279999999!3d19.2198221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb5bdbd05b9c47%3A0xc233e685b4b4e53b!2sLoknete%20Appasaheb%20Rajale%20College%20of%20Pharmacy!5e0!3m2!1sen!2sin!4v1780213906306!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
          </div>
      </div>
       <div class="container" style="padding: 25px 0px;">
           <div class="divider"></div>
       </div>
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 co-xs-12">
                 <p class="cpy-txt">© 2024 Loknete Appasaheb Rajale College of Pharmacy. All Rights Reserved. Developed By <a href="https://github.com/shankarpanchal7/" class="xpica">Shankar Langote</a></p>     
              </div>   
          </div>
      </div>  
             
</footer>
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
<script src="/vendors/js/jquery-3.3.1.min.js"></script>
<script src="/vendors/js/popper.min.js"></script>
<script src="/vendors/js/jquery.waypoints.min.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendors/js/newsTicker.js"></script>
<script src="/vendors/js/jquery.zoom.min.js"></script>
<script src="https://unpkg.com/lenis@1.3.11/dist/lenis.min.js"></script>
<!-- <script src="/resources/js/main.js"></script> -->
<script src="/resources/js/O_main.js"></script>

<script>
  $(document).ready(function(){
          const lenis = new Lenis({
                  duration: 0.9,
                  smoothWheel: true,
                  wheelMultiplier: 1,
                  touchMultiplier: 2,
                });

            function raf(time) {
              lenis.raf(time);
              requestAnimationFrame(raf);
            }

            requestAnimationFrame(raf);

      $('.stat-cell').addClass('is-visible');

      $('.stat-cell .num').each(function () {
        var $this = $(this);
        var rawText = $this.text();

        var targetNum = parseInt(rawText.replace(/[^0-9]/g, ''), 10);
        var suffix = rawText.replace(/[0-9]/g, '');
        var originalLength = rawText.replace(/[^0-9]/g, '').length;

        function easeOutExpo(t, b, c, d) {
          return (t === d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
        }

        var duration = 5000; // Animation time in milliseconds
        var startTime = null;

        function animateCount(timestamp) {
          if (!startTime) startTime = timestamp;
          var progress = timestamp - startTime;

          if (progress > duration) progress = duration;

          var currentVal = easeOutExpo(progress, 0, targetNum, duration);
          var currentNumStr = Math.floor(currentVal).toString();

          while (currentNumStr.length < originalLength) {
            currentNumStr = '0' + currentNumStr;
          }

          $this.text(currentNumStr + suffix);

          if (progress < duration) {
            requestAnimationFrame(animateCount);
          } else {
            var finalNumStr = targetNum.toString();
            while (finalNumStr.length < originalLength) {
              finalNumStr = '0' + finalNumStr;
            }
            $this.text(finalNumStr + suffix);
          }
        }

        // Initialize animation smoothly via browser paint cycles
        requestAnimationFrame(animateCount);
      });

  });
</script>
</body>
</html>