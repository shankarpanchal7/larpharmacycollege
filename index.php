<?php
include_once("components/header_t.php");
echo '<title>Loknete Appasaheb Rajale College of Pharmacy</title>';
include_once("components/header_b.php"); ?>

<style>
    .marquee {
      height: 25px;
      overflow: hidden;
      position: relative;
      padding-bottom: 35px
    }

    .marquee div {
      display: block;
      width: 200%;
      height: 30px;

      position: absolute;
      overflow: hidden;

      animation: marquee 10s linear infinite;
    }

    .marquee span {
      float: left;
      width: 50%;
      font-weight: 400;
      color: red;
      font-style: italic;
    }

    .carousel-item {
      height: 480px !important;
    }

    @keyframes marquee {
      0% {
        left: 0;
      }

      100% {
        left: -100%;
      }
    }

    /*----------------------------------------------------------*/
    .card-3d {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1),
        0 25px 50px rgba(0, 0, 0, 0.1);
      border-radius: 1rem;
    }

    .card-3d:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15),
        0 35px 70px rgba(0, 0, 0, 0.2);
    }

    .img-3d {
      border: 6px solid #fff;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease;
    }

    .card-3d:hover .img-3d {
      transform: scale(1.05);
    }
  </style>

  <main>
    <section class="section-carousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
        </ol>

        <div class="carousel-inner">

          <div class="carousel-item active">
            <img class="d-block w-100" src="/img/slides/slide1.jpg" alt="Loknete Appasaheb Rajale College of Pharmacy">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide2.jpg" alt="Loknete Appasaheb Rajale College of Pharmacy">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide3.jpg" alt="Loknete Appasaheb Rajale College of Pharmacy">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide4.jpg" alt="Loknete Appasaheb Rajale College of Pharmacy">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide5.jpg" alt="Loknete Appasaheb Rajale College of Pharmacy">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide6.jpg" alt="Loknete Appasaheb Rajale College of Pharmacy">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide7.jpg" alt="Loknete Appasaheb Rajale College of Pharmacy">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide8.jpg" alt="Loknete Appasaheb Rajale College of Pharmacy">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide9.jpg" alt="Loknete Appasaheb Rajale College of Pharmacy">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide10.jpg" alt="Loknete Appasaheb Rajale College of Pharmacy">
          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div>
    </section>
    <section class="about1">
      <!-- <img class="about-sec-logo-top" alt="logo" src="/img/logo_tr.png"> -->
      <div class="td_height_120 td_height_lg_80"></div>
      <div class="institute-profile-section td_style_1">
        <div class="container">
          <div class="row align-items-center td_gap_y_40">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.25s"
              style="visibility: visible; animation-duration: 1s; animation-delay: 0.25s; animation-name: fadeInLeft;">
              <div class="institute-profile_thumb_wrap">
                <div class="institute-profile_year text-uppercase td_fs_64 td_bold">EST 2023</div>
                <div class="institute-profile_thumb_1">
                  <picture>
                    <source srcset="/img/college-building2-removebg.png" type="image/webp">
                    <source srcset="/img/college-building2-removebg.png?v=12345" type="image/jpeg">
                    <img src="/img/college-building2-removebg.png" alt="oncoedge-2025" class="img-fluid"
                      style="width: 100%;" loading="eager" fetchpriority="high" decoding="async">
                  </picture>

                </div>
                <div class="institute-profile_thumb_2">
                  <picture>
                    <source srcset="/img/student2.jpg" type="image/webp">
                    <source srcset="/img/about-img.jpg?v=12345" type="image/jpeg">
                    <img src="/img/about-img.jpg" alt="About Image" class="img-fluid" style="width: 100%;"
                      loading="eager" fetchpriority="high" decoding="async">
                  </picture>
                </div>
                <!-- <a href="#vid" class="td_circle_text td_center td_video_open" aria-describedby="popup-1">
                <img src="/img/rotate-img2-removebg-preview.png" alt="Circle text" class="img-fluid" loading="lazy"></a>  -->
                <!-- <div class="td_circle_shape"></div> -->
                <div class="institute-profile_thumb_3">
                  <p>Loknete Appasaheb Rajale College of Pharmacy.</p>
                  <span>Adinathnagar, Tq. Pathardi, Dist. Ahilyanagar</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
              style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
              <div class="td_section_heading td_style_1 td_mb_30 institute-profile_wlc">
                <div class="section-title1">
                  <h3>Institute Profile</h3>
                  <h2 class="wow zoomIn" style="visibility: visible; animation-name: zoomIn;">Loknete Appasaheb Rajale
                    College of Pharmacy</h2>
                </div>
                <p style="margin-bottom: 0;text-align: justify; text-justify: inter-word;">
                  Dadapatil Rajale Shikshan Sanstha, established in 1991 by Late Dadapatil Rajale Saheb, aims to provide
                  quality education to rural and economically weaker communities. Inspired by the vision of Late Rajivji
                  Rajale, Loknete Appasaheb Rajale College of Pharmacy was established in 2023-24 under the leadership
                  of
                  Hon. Appasaheb Rajale, Hon. Monikatai Rajale, and Hon. Rahuldada Rajale. Located at Adinathnagar, Tal.
                  Pathardi, Dist. Ahilyanagar, the institute offers D.Pharm and B.Pharm programs with 60 seats each. The
                  college focuses on academic excellence, ethical values, practical skills, women’s empowerment, and
                  rural
                  development while preparing competent pharmacy professionals to serve society and the healthcare
                  sector
                  effectively.
                </p>

              </div>
              <div class="mt-3">
                <!-- <p>The institute is approved by</p>
              <div class="abt-approval-sec">
                <img src="/img/approvals/Govt. of Maharashtra.jpg" class="img-fluid img-logo" width="60px" alt="Govt. of Maharashtra" loading="lazy"/>
                <img src="/img/approvals/AICTE.png" class="img-fluid img-logo" width="60px" alt="AICTE" loading="lazy"/>
                <img src="/img/approvals/DTE.png" class="img-fluid img-logo" width="60px" alt="DTE" loading="lazy"/>
                <img src="/img/approvals/DBATU.jpg" class="img-fluid img-logo" width="60px" alt="DBATU" loading="lazy"/>
                <img src="/img/approvals/MSBTE.png" class="img-fluid img-logo" width="60px" alt="MSBTE" loading="lazy"/>
                <img src="/img/approvals/PCI.png" class="img-fluid img-logo" width="60px" alt="PCI" loading="lazy"/>
                <img src="/img/approvals/HTE.png" class="img-fluid img-logo" width="60px" alt="HTE" loading="lazy"/>
                <img src="/img/approvals/SUK.jpeg" class="img-fluid img-logo" width="60px" alt="SUK" loading="lazy"/>
              </div> -->
              </div>
              <div class="col-lg-12 mt-4">

              </div>
            </div>
          </div>
        </div>
      </div>



    </section>
    <section style="background-color: #cccccc24;">
      <div class="stats">
        <div class="stats-grid">
          <div data-motion="fade-up" data-motion-in="true" class="motion_reveal__KX9E3 motion_fadeUp__XYFyD stat-cell"
            style="--m-i:0;--m-distance:14px">
            <div class="num">03</div>
            <div class="lbl">Years of Excellence</div>
          </div>
          <div data-motion="fade-up" data-motion-in="true" class="motion_reveal__KX9E3 motion_fadeUp__XYFyD stat-cell"
            style="--m-i:0;--m-distance:14px">
            <div class="num">02</div>
            <div class="lbl">Academic Programs Offered</div>
          </div>
          <div data-motion="fade-up" data-motion-in="true" class="motion_reveal__KX9E3 motion_fadeUp__XYFyD stat-cell"
            style="--m-i:1;--m-distance:14px">
            <div class="num">250+</div>
            <div class="lbl">Enrolled students in LARCOP</div>
          </div>
          <div data-motion="fade-up" data-motion-in="true" class="motion_reveal__KX9E3 motion_fadeUp__XYFyD stat-cell"
            style="--m-i:2;--m-distance:14px">
            <div class="num">20+</div>
            <div class="lbl">Expert Faculties</div>
          </div>
          <div data-motion="fade-up" data-motion-in="true" class="motion_reveal__KX9E3 motion_fadeUp__XYFyD stat-cell"
            style="--m-i:3;--m-distance:14px">
            <div class="num">50+</div>
            <div class="lbl">Research publications</div>
          </div>
          <div data-motion="fade-up" data-motion-in="true" class="motion_reveal__KX9E3 motion_fadeUp__XYFyD stat-cell"
            style="--m-i:4;--m-distance:14px">
            <div class="num">62+</div>
            <div class="lbl">Placement Offered in 2026 </div>
          </div>
          <div data-motion="fade-up" data-motion-in="true" class="motion_reveal__KX9E3 motion_fadeUp__XYFyD stat-cell"
            style="--m-i:4;--m-distance:14px">
            <div class="num">10+</div>
            <div class="lbl">Industry & Hospital Tie-ups</div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-letest" id="js--active-sticky">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 co-xs-12 news-block">
            <h3 class="bg-primary-this news-section-title"><i class="fa fa-newspaper-o"
                aria-hidden="true"></i>&nbsp;<span style="color: white; margin-left: 10px;"> News &amp; Notices</span>
            </h3>
            <div class=" news-block" style="overflow: hidden;">

              <div class="news" style="overflow: hidden;">
                <ul class="newsticker" style=" overflow: hidden;">
                  <li class="news-item" style="margin-top: 0px;">
                    <div class="news-item-box"></div>
                    <div>
                      <h4>Pharmacy Counseling and Health Screening</h4>
                      <p class="p-date">Jul 23, 2019</p>

                    </div>
                  </li>
                  <li class="news-item" style="margin-top: 0px;">
                    <div class="news-item-box"></div>
                    <div>
                      <h4>Pharmacy Counseling and Health Screening</h4>
                      <p class="p-date">Jul 23, 2019</p>

                    </div>
                  </li>
                  <li class="news-item" style="margin-top: 0px;">
                    <div class="news-item-box"></div>
                    <div>
                      <h4>Pharmacy Counseling and Health Screening</h4>
                      <p class="p-date">Jul 23, 2019</p>

                    </div>
                  </li>
                  <li class="news-item" style="margin-top: 0px;">
                    <div class="news-item-box"></div>
                    <div>
                      <h4>Pharmacy Counseling and Health Screening</h4>
                      <p class="p-date">Jul 23, 2019</p>

                    </div>
                  </li>
                  <li class="news-item" style="margin-top: 0px;">
                    <div class="news-item-box"></div>
                    <div>
                      <h4>Pharmacy Counseling and Health Screening</h4>
                      <p class="p-date">Jul 23, 2019</p>

                    </div>
                  </li>
                  <li class="news-item" style="margin-top: 0px;">
                    <div class="news-item-box"></div>
                    <div>
                      <h4>Pharmacy Counseling and Health Screening</h4>
                      <p class="p-date">Jul 23, 2019</p>

                    </div>
                  </li>
                  <li class="news-item" style="margin-top: 0px;">
                    <div class="news-item-box"></div>
                    <div>
                      <h4>Pharmacy Counseling and Health Screening</h4>
                      <p class="p-date">Jul 23, 2019</p>

                    </div>
                  </li>
                  <li class="news-item" style="margin-top: 0px;">
                    <div class="news-item-box"></div>
                    <div>
                      <h4>Pharmacy Counseling and Health Screening</h4>
                      <p class="p-date">Jul 23, 2019</p>

                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 co-xs-12 features-block " style="overflow: hidden;">
            <div class=" p-4 rounded-3 shadow-sm features-block" style="overflow: hidden;">
              <div class="marquee">
                <div>
                  <span>Admission open for B.Pharm and D.Pharm and for A. Y. 2026-27</span>
                  <span>Admission open for B.Pharm and D.Pharm and for A. Y. 2026-27</span>
                </div>
              </div>
              <div class="feature-box">
                <div class="feature-desc">
                  <img src="/img/new_icon.gif">
                  <h4><b>Admission Enquiry for D.Pharm & B.Pharm. link </b></h4>
                  <p><a target="_blank" href="https://docs.google.com/forms/d/1rvTojSawHSzG4d18-aoAz1DLWx5P7j2bSUG6t4H8vUE/viewform?pli=1&chromeless=1&pli=1&edit_requested=true">Click Here</a></p>
                </div>


              </div>
              <!-- <div class="feature-box">
                <div class="feature-desc">

                  <h4>Admission Brochure 2026-27</h4>
                  <p><a href="college-storage/Prospect New.pdf">Click here to Download</a></p>
                </div>
              </div> -->
              <!-- <div class="feature-box">
                <div class="feature-desc">
                  <img src="/img/new_icon.gif">
                  <h4>Admission Form</h4>
                  <p><a href="college-storage/admissionformPharmacy(1).pdf">Click here to Download</a></p>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mission-vision">
      <div class="container d-flex">
        <div class="section-icon">
          <div class="sec-line"></div>
          <div class="sec-inner"></div>
        </div>
        <h3 class=" section-title">OUR VISION AND MISSION</h3>
      </div>
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 co-xs-12">
            <div class="mv-block mission-block">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="our-company">LARCOP</h4>
                <div class="mv-icon"><i class="fa fa-bullseye"></i></div>
              </div>
              <h4 class="mv-title">Mission</h4>
              <div class="mv-text-box">
                <p>To introduce excellence in Pharmacy education through infrastructure, quality instruction, highly
                  qualified and experienced faculty, and learning resources to meet the needs of students in pursuit of
                  their knowledge, as well as to promote entrepreneurial abilities in students and make them competent
                  pharmacists with a focus on indigenous resources.</p>
              </div>

              <div class="service-shape">
                <span class="hexagon-clippath"></span>
                <span class="hexagon-clippath2"></span>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 co-xs-12">
            <div class="mv-block vision-block">

              <div class="d-flex justify-content-between align-items-center">
                <h4 class="our-company">LARCOP</h4>
                <div class="mv-icon"><i class="fa fa-eye"></i></div>
              </div>

              <h4 class="mv-title">Vision</h4>
              <div class="mv-text-box">
                <p>To be the top institution in the pharmacy discipline by providing outstanding education with the aim
                  to
                  accomplish overall growth of the pharmacists to furnish the requirements of the profession and
                  society.
                </p>
              </div>

              <div class="service-shape">
                <span class="hexagon-clippath"></span>
                <span class="hexagon-clippath2"></span>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 co-xs-12">
            <div class="mv-block peo-block">
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="our-company">LARCOP</h4>
                <div class="mv-icon"><i class="fa fa-book" aria-hidden="true"></i></div>
              </div>

              <h4 class="mv-title">PEO</h4>
              <div class="mv-text-box">
                <p><b> PEO1 :</b> Graduates of the program will be having strong background and skills in pharmaceutical
                  sciences
                  and
                  able to use these tools in Pharmaceutical industry and/or institutes where ever necessary for success.
                </p>
                <p> <b> PEO2 :</b> Technically sound and mentally robust with critical thinking abilities to excel in
                  career. </p>
                <p> <b> PEO3 :</b> Professional and ethical attitude and have ability to address healthcare issues of
                  community.
                </p>
              </div>

              <div class="service-shape">
                <span class="hexagon-clippath"></span>
                <span class="hexagon-clippath2"></span>
              </div>
            </div>

          </div>
        </div>
      </div>
      </div>
    </section>
    <hr>
    <section class="our-management">
      <div class="row">
        <div class="container d-flex">
          <div class="section-icon">
            <div class="sec-line"></div>
            <div class="sec-inner"></div>
          </div>
          <h3 class="section-title">
            <span>O</span>UR MANAGEMENT
          </h3>
        </div>
        <div class="container">
          <div class="row p-5">
            <div class="col-lg-4">
              <div class="member">
                <div class="member-img">
                  <img src="img/president_2.jpg"
                    style="border-radius: 10px; border: solid;border-color: #ef0b0b; background-color: white;"
                    alt="member img">
                </div>
                <div class="member-info">
                  <h5 class="member-name">Hon’ Appasaheb Rajale</h5>
                  <p class="member-desc" style="color: red;">President</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="member">
                <div class="member-img">
                  <img src="img/rahuldada_rajale.png"
                    style="border-radius: 10px; border: solid;border-color: #ef0b0b; background-color: white;"
                    alt="member img">
                </div>
                <div class="member-info">
                  <h5 class="member-name">Hon’ Rahul Dada Rajale</h5>
                  <p class="member-desc" style="color: red;">Trustee</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="member">
                <div class="member-img">
                  <img src="img/trustee_2.png"
                    style="border-radius: 10px; border: solid;border-color: #ef0b0b; background-color: white;"
                    alt="member img">
                </div>
                <div class="member-info">
                  <h5 class="member-name">Hon’ Monika Tai Rajiv ji Rajale</h5>
                  <p class="member-desc" style="color: red;">Trustee</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-recruiters-sec">
      <div class="row">
        <div class="container">
          <h3 class="section-title">OUR RECRUITERS</h3>
        </div>
        <div class="recruiters-block container py-5">
          <div>
            <img src="/img/recruiters/agio_no_bg.png" alt="">
            <img src="/img/recruiters/cipla_bg.png" alt="">
            <img src="/img/recruiters/emcure_bg.png" alt="">
            <img src="/img/recruiters/fdc_bg.png" alt="">
            <img src="/img/recruiters/ipca_bg.png" alt="">
            <img src="/img/recruiters/lupin_bg.png" alt="">
            <img src="/img/recruiters/mylan_bg.png" alt="">
            <img src="/img/recruiters/m_bg.png" alt="">
            <img src="/img/recruiters/wockhardt_bg.png" alt="">
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
include_once('components/footer.php');
?>