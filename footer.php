  <!-- Footer Section Start -->
  
  <div
        class="section footer-section"
        style=" background-color:#161835;"
      >
        <div class="container" >
          <!-- Footer Widget Wrap Start -->
          <div class="footer-widget-wrap" >
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <!-- Footer Widget Start -->
                <div class="footer-widget-about" >
                  <div style="display:flex; flex-direction:row">
                  <a class="footer-logo" href="index" 
                    ><img src="assets/images/perfect.png" alt="Logo" style="width:40px;margin-top:12px;margin-right:8px;"
                  /></a>
                  <h3 style="color:white;margin-top:5px">Perfect Gateway Limited</h3>
                </div>
                  <p>
                  <?php echo $sysInfo['desc']; ?>
                  </p>
                  <div class="footer-social">
                    <ul class="social">
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Footer Widget End -->
              </div>
              <div class="col-lg-3 col-sm-6">
                <!-- Footer Widget Start -->
                <div class="footer-widget">
                  <h4 class="footer-widget-title">Useful Links</h4>

                  <div class="widget-link">
                    <ul class="link">
                      <li><a href="service">Terms & Conditions</a></li>
                      <li><a href="about">About Company</a></li>
                    </ul>
                  </div>
                </div>
                <!-- Footer Widget End -->
              </div>
              <div class="col-lg-3 col-sm-6">
                <!-- Footer Widget Start -->
                <div class="footer-widget">
                  <h4 class="footer-widget-title">Our Services</h4>

                  <div class="widget-link">
                    <ul class="link">
                      <li><a href="web">Web Applications</a></li>
                      <li><a href="mobile">Mobile Applications</a></li>
                      <li><a href="UI">UI/UX Designs</a></li>
                      <li><a href="Digital">Software Consultancy</a></li>
                    </ul>
                  </div>
                </div>
                <!-- Footer Widget End -->
              </div>
              <div class="col-lg-3 col-sm-6">
                <!-- Footer Widget Start -->
                <div class="footer-widget">
                  <h4 class="footer-widget-title">Contact Information</h4>

                  <div class="widget-info">
                    <ul>
                      <li>
                        <div class="info-icon">
                          <i class="flaticon-phone-call"></i>
                        </div>
                        <div class="info-text">
                          <span><a href="#"><?php echo $sysInfo['phone']; ?>,<?php echo $sysInfo['phone2']; ?></a></span>
                
                        </div>
                      </li>
                      <li>
                        <div class="info-icon">
                          <i class="far fa-envelope-open"></i>
                        </div>
                        <div class="info-text">
                          <span><a href="mailto:info@perfectgateway.com.ng"><?php echo $sysInfo['email']; ?></a></span>
                        </div>
                      </li>
                      <li>
                        <div class="info-icon">
                          <i class="flaticon-pin"></i>
                        </div>
                        <div class="info-text">
                          <span><?php echo $sysInfo['address']; ?></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Footer Widget End -->
              </div>
            </div>
          </div>
          <!-- Footer Widget Wrap End -->
        </div>

        <!-- Footer Copyright Start -->
        <div class="footer-copyright-area" style=" background: linear-gradient(195deg, #5B3767 30%, #9B3F67 70%);">
          <div class="container">
            <div class="footer-copyright-wrap">
              <div class="row align-items-center">
                <div class="col-lg-12">
                  <!-- Footer Copyright Text Start -->
                  <div class="copyright-text text-center">
                    <p>© Copyrights <?php echo date('Y').' '.$sysInfo['name']; ?> All rights reserved.</p>
                  </div>
                  <!-- Footer Copyright Text End -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Copyright End -->
      </div>
      <!-- Footer Section End -->