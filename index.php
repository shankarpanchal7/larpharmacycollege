
<?php
include_once("components/header_t.php");
echo '<title>Rashtriya College of Pharmacy Hatnur</title>';
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
  font-weight: 700;
  color: #e90c15;
  font-style: oblique;
}
.carousel-item {
    height: 700px !important;
}

@keyframes marquee {
  0% { left: 0; }
  100% { left: -100%; }
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
       
        <img class="d-block w-100" src="/img/slides/newslide/slider8.png" alt="First slide">
       
      </div>
       <div class="carousel-item">
      
        <img class="d-block w-100" src="/img/slides/newslide/slider3.png" alt="First slide">
        
      </div>
      
       <div class="carousel-item">
     
        <img class="d-block w-100" src="/img/slides/newslide/slider5.png" alt="First slide">
    
      </div>
           <div class="carousel-item ">
    
        <img class="d-block w-100" src="/img/slides/newslide/Rashtriya clg website images-01.png" alt="First slide">
     
      </div>
         <div class="carousel-item ">
      
        <img class="d-block w-100" src="/img/slides/newslide/slider7.png" alt="First slide">
     
      </div>
    
   
    
      <div class="carousel-item">
      
        <img class="d-block w-100" src="/img/slides/newslide/slider1.png" alt="First slide">
      
      </div>
      <div class="carousel-item">
      
        <img class="d-block w-100" src="/img/slides/newslide/slider2.png" alt="First slide">
       
      </div>
     
      <div class="carousel-item">
      
        <img class="d-block w-100" src="/img/slides/newslide/slider4.png" alt="First slide">
     
      </div>
     
      <div class="carousel-item">
      
        <img class="d-block w-100" src="/img/slides/newslide/slider6.png" alt="First slide">
       
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
</section>


<!--<section class="welcome">-->
<!--  <div class="container">-->
<!--    <h3><span>Welcome to</span> Rashtriya College of Pharmacy</h3>-->
<!--    <p> -->
<!--      Rashtriya College of Pharmacy, Hatnoor was established in 2020 under aegis of Rashtriya Charitable Trust, Aurangabad. The Rashtriya College of Pharmacy is situated in the area of Hatnoor, about 1 km away from National Highway- 211 near Kannad. The institute campus can be reached by rail or by road. It is situated near the Ellora caves & Ghrushneshwar temple. The college is approved by AICTE New Delhi, Pharmacy council of India, New Delhi., DTE Mumbai, & affiliated to Dr. BATU Lonere and MSBTE, Mumbai. -->
<!--    </p>-->

<!--  </div>-->
<!--</section>-->
<!-- Welcome Section -->
<section class="welcome py-5 position-relative" style="background: linear-gradient(135deg, #fbe9e7, #fff3e0); overflow: hidden;">
  <!-- Decorative Shape -->
  <div style="position:absolute; top:-40px; right:-60px; width:200px; height:200px; background:#ffe0b2; border-radius:50%; opacity:0.3; z-index:0;"></div>

  <div class="container text-center position-relative" style="z-index: 1;">
    <h3 class="fw-bold mb-3" style="font-size: 2.2rem; color: #4e342e;">
      <span class="d-block mb-1" style="font-size: 1.5rem; color: #bf360c;">Welcome to</span>
      Rashtriya College of Pharmacy
    </h3>
    <p class="lead text-dark mx-auto" style="max-width: 850px; font-size: 1.1rem; line-height: 1.8;">
      <i class="bi bi-mortarboard-fill text-warning me-2"></i>
      Rashtriya College of Pharmacy, Hatnoor, was established in 2020 under the aegis of Rashtriya Charitable Trust, Aurangabad. Located just 1 km from NH-211 near Kannad, the college is surrounded by culturally rich landmarks like the Ellora Caves and Ghrushneshwar Temple.
      <br><br>
      The institute is approved by <strong>AICTE</strong>, <strong>PCI</strong>, <strong>DTE Mumbai</strong>, and affiliated with <strong>Dr. BATU Lonere</strong> and <strong>MSBTE Mumbai</strong>.
    </p>

    <a href="/about" class="btn btn-lg mt-4 px-4 rounded-pill text-white" style="background: linear-gradient(45deg, #6d4c41, #a1887f); box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
      Explore More
    </a>
  </div>
</section>

<!-- Bootstrap Icons CDN (Add in <head> if not already included) -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">-->


<section class="section-letest" id="js--active-sticky" style="background: linear-gradient(135deg, #fbe9e7, #fff3e0); overflow: hidden;">
  <div class="container-fluid" style="background: linear-gradient(135deg, #fbe9e7, #fff3e0); overflow: hidden;">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 co-xs-12 news-block "style="background: linear-gradient(135deg, #fbe9e7, #fff3e0); overflow: hidden;" >
           <div class=" p-4 rounded-3 shadow-sm border" style="background: linear-gradient(135deg, #fbe9e7, #fff3e0); overflow: hidden;">
              <h3 style="font-size: 21px; font-family: sans-serif;"><img class="icon-news" src="/img/news.png">&nbsp;<span>News & Updates</span></h3>
              <!--News start here-->
              
              <div class="news" style="background: linear-gradient(135deg, #fbe9e7, #fff3e0); overflow: hidden;">
                  <ul class="newsticker">
                      <li class="news-item">
                        <h4>राष्ट्रीय चारीटेबल ट्रस्ट स्ट तर्फे स्वातंत्र्य दिन उत्साहात</h4>
                        <p class="p-date">15 Aug, 2019</p>
                        <p><img src="img/news/samupdeshan_aroygtapasni.jpg" alt="राष्ट्रीय कॉलेज ऑफ फार्मसी समुपदेशन व आरोग्य तपसानी" class="w-100"/></p>

                        <p></p>
                      </li>
                      <li class="news-item">
                        <h4>राष्ट्रीय कॉलेज ऑफ फार्मसी समुपदेशन व आरोग्य तपसानी</h4>
                        <p class="p-date">Jul 23, 2019</p>
                        <p><img src="img/news/samupdeshan_aroygtapasni.jpg" alt="राष्ट्रीय कॉलेज ऑफ फार्मसी समुपदेशन व आरोग्य तपसानी" class="w-100"/></p>
                      </li>
                      <li class="news-item">
                        <h4>राष्ट्रीय कॉलेज ऑफ फार्मसी समुपदेशन व आरोग्य तपसानी</h4>
                        <p class="p-date">Jul 23, 2019</p>
                        <p><img src="img/news/samupdeshan_aroygtapasni.jpg" alt="राष्ट्रीय कॉलेज ऑफ फार्मसी समुपदेशन व आरोग्य तपसानी" class="w-100"/></p>
                      </li>
                      <li class="news-item">
                        <h4>राष्ट्रीय कॉलेज ऑफ फार्मसी समुपदेशन व आरोग्य तपसानी</h4>
                        <p class="p-date">Jul 23, 2019</p>
                        <p><img src="img/news/samupdeshan_aroygtapasni.jpg" alt="राष्ट्रीय कॉलेज ऑफ फार्मसी समुपदेशन व आरोग्य तपसानी" class="w-100"/></p>
                      </li>
                      <li class="news-item">
                        <h4>राष्ट्रीय कॉलेज ऑफ फार्मसी समुपदेशन व आरोग्य तपसानी</h4>
                        <p class="p-date">Jul 23, 2019</p>
                        <p><img src="img/news/samupdeshan_aroygtapasni.jpg" alt="राष्ट्रीय कॉलेज ऑफ फार्मसी समुपदेशन व आरोग्य तपसानी" class="w-100"/></p>
                      </li>
                      
                  </ul>
              </div>                    
          </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 co-xs-12 features-block " style="background: linear-gradient(135deg, #fbe9e7, #fff3e0); overflow: hidden;"> 
               <div class=" p-4 rounded-3 shadow-sm border"style="background: linear-gradient(135deg, #fbe9e7, #fff3e0); overflow: hidden;">
                     <div class="marquee">
            <div>
              <span>Admission open for B.Pharm and D.Pharm and for A. Y. 2025-26</span>
              <span>Admission open for B.Pharm and D.Pharm and for A. Y. 2025-26</span>
            </div>
          </div>
                   <div class="feature-box" >
                  <div class="feature-desc">
                       <img src="/img/new_icon.gif"/><h4>Admission registration for B. Pharm. and D. Pharm. link 2025-26 </h4>
                      <p><a target="_blank" href="college-storage/admissionformPharmacy(1).pdf">Click Here</a></p>
                  </div>
          
          
              </div>
              <div class="feature-box">
                  <div class="feature-desc">
                      
                      <h4>Admission Brochure 2025-26</h4>
                      <p><a href="college-storage/Prospect New.pdf">Click here to Download</a></p>
                  </div>
          
          
              </div>
              <div class="feature-box">
                <div class="feature-desc">
                    
                  <img src="/img/new_icon.gif"/><h4>Admission Form</h4>
                    <p><a href="college-storage/admissionformPharmacy(1).pdf">Click here to Download</a></p>
                </div>
        
        
            </div>
          </div>
          </div>
      </div>
  </div>
</section>

<!-- <section 
  class="message-section section-75" 
  style="border-bottom: 2px solid #efefef;
        padding-top: 15px;
        padding-bottom: 15px;"
  >
  <div class="shell">
    <div class="row">
      <div class="col-md-2 desk-message">
        <img src="./img/secretary.png">
      </div>
      <div class="col-md-10 desk-message">
        <div class="m-l-5">
          <h3>Hon. Dr. Jayant Pradeep Patil (Saheb) </h3>
          <span class="text-grey">Secretary, Shri Yashwant Shikshan Prasarak Mandal, Kodoli</span>
          <p>"You are always students, never a master. You have to keep moving forward.
            We believe in imparting quality education based on moral values. Our main goal is to become one of the most
            prominent and exceptional educational institute in the field of pharmacy. We are privileged to have a
            capable, highly dedicated teaching and support staff.I am sure my committed faculty and staff will strive
            hard to transcend you all into prospective young pharmacists with globally compatible skills and knowledge.
            I look forward to welcoming you to join and contribute to our journey towards exploring new frontiers in the
            field of pharmacy education with wisdom."

          </p>
        </div>
      </div>
    </div>


  </div>
</section> -->


<!-- <section class="message-section section-75" style="border-bottom: 2px solid #efefef;
        padding-top: 15px;
        padding-bottom: 15px;">
  <div class="shell">
    <div class="row">
      <div class="col-md-2 desk-message">
        <img src="./img/Principal_Photo.jpg">
      </div>

      <div class="col-md-10 desk-message">
        <div class="m-l-5">
          <h3>Dr. Santosh A. Payghan</h3>
          <span class="text-grey">Principal, Rashtriya College of pharmacy, Kodoli</span>
          <p>
            "We are running the D. Pharmacy course from 2003 and B. Pharmacy course from 2017. Pharmacy is a versatile,
            dynamic, growing and increasingly diverse profession, as there are so many opportunities for the service.
            Our motto is to develop the students with updated knowledge, skills and competency. We have highly
            dedicated, qualified, enthusiastic and exceptionally brilliant faculty to ensure betterment of students in
            every aspect and to uplift students of rural areas. A number of companies are visiting the campus for
            placements. The placement cell is in constant contact with the leading industries. I believe that any
            student of our institute will never face any difficulty to get employment as well as opportunity for higher
            studies.
            I heartily welcome all the students into our family and wish them a positive phase of learning and enjoyable
            stay at rcph".

          </p>
        </div>
      </div>
      

    </div>


  </div>
</section> -->

<!-- <section style="background-color: aqua;">
  <div class="container">
    <h3 class="text-left">Our Vision</h3>
    <p style="font-style: italic;">“ To impart quality education to the students and mold them into proactive multifaceted Pharmacists. ”</p>
  </div>
</section>
<section  >
  <div class="container">
    <h3 class="text-left">Our Mission</h3>
    <p style="font-style: italic;">“ To establish a center of academic excellence and research in Pharmacy education and thereby produce professionally competent and ethically sound Pharmacists to cater the needs of the global society. ”</p>
  </div>
</section> -->

<!--<section class="desk-messages-section">-->
<!--  <div class="container">-->
<!--    <div class="row">-->
<!--      <div class="col-md-4">-->
<!--        <div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">-->
<!--          <div class="wpb_single_image wpb_content_element vc_align_center">-->
            
<!--            <figure class="wpb_wrapper vc_figure">-->
<!--              <div class="vc_single_image-wrapper vc_box_border_circle  vc_box_border_grey"><img class="vc_single_image-img " src="/img/Nitin Patil Saheb.jpg" width="252" height="252" alt="1" title="1"></div>-->
<!--            </figure>-->
<!--          </div>-->
<!--        <h3 style="text-align: left" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_start_animation animated">Honorable  Shri.  Nitin Suresh Patil </h3><p>(President, Rashtriya Charitable Trust)</p>-->
<!--          <div class="wpb_text_column wpb_content_element  vc_custom_1523341354265">-->
<!--            <div class="wpb_wrapper">-->
<!--              <p  class="desk-message-p">“It gives me a great pleasure to extend a very warm welcome to the attractive campus of Rashtriya charitable Trust’s, Rashtriya College of Pharmacy, At post- Hatnoor, Tq- Kannad, Dist- Aurangabad.” </p>-->
<!--              <p>Since last two decades, I have been working in various fields such as education, politics, social work and cooperative sector. I have special affection for education. As education is light, it is also the pathway to a higher purpose. Rashtriya charitable Trust’s is our humble effort to bring education at the reach of rural people, that they need, that they desire.</p>-->
        
<!--            </div>-->
<!--          </div>-->
<!--          <div class="vc_btn3-container vc_btn3-inline">-->
<!--            <a onmouseleave="this.style.borderColor='#ffffff'; this.style.backgroundColor='transparent'; this.style.color='#ffffff'" onmouseenter="this.style.borderColor='#982827'; this.style.backgroundColor='#982827'; this.style.color='#ffffff';" style="border-color: rgb(255, 255, 255); color: rgb(255, 255, 255); background-color: transparent;" class="btn vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" href="/president-message.php" title="Founder">Read more</a>-->

<!--            </div>-->
<!--          </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-md-4">-->
<!--        <div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">-->
<!--          <div class="wpb_single_image wpb_content_element vc_align_center">-->
            
<!--            <figure class="wpb_wrapper vc_figure">-->
<!--              <div class="vc_single_image-wrapper vc_box_border_circle  vc_box_border_grey"><img class="vc_single_image-img " src="/img/Arjun Patil Saheb.jpeg" width="252" height="252" alt="1" title="1"></div>-->
<!--            </figure>-->
<!--          </div>-->
<!--        <h3 style="text-align: left" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_start_animation animated">Honorable Shri. Arjun N. Patil </h3><p>(Secretary,  Rashtriya Charitable Trust)</p>-->
<!--          <div class="wpb_text_column wpb_content_element  vc_custom_1523341354265">-->
<!--            <div class="wpb_wrapper">-->
<!--              <p class="desk-message-p">“In today’s world of globalization and competition, it has become necessary to bring reformation in the current education system that would empower the youth to be innovators and entrepreneurs. It is the need of the hour to bring the pool of knowledge to the rural areas.”</p>-->
<!--              <p>With the aim to provide world class innovative education to the rural pupils. Rashtriya charitable Trust was established in 1991 by our Hon’ble Suresh Patil. We at RCT always believe in strengthening academics along with the inculcation of cultural values in the students.</p>-->
        
<!--            </div>-->
<!--          </div>-->
<!--          <div class="vc_btn3-container vc_btn3-inline">-->
<!--            <a onmouseleave="this.style.borderColor='#ffffff'; this.style.backgroundColor='transparent'; this.style.color='#ffffff'" onmouseenter="this.style.borderColor='#982827'; this.style.backgroundColor='#982827'; this.style.color='#ffffff';" style="border-color: rgb(255, 255, 255); color: rgb(255, 255, 255); background-color: transparent;" class="btn vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" href="/secretary-message.php" title="Founder">Read more</a>-->

<!--            </div>-->
<!--          </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-md-4">-->
<!--        <div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">-->
<!--          <div class="wpb_single_image wpb_content_element vc_align_center">-->
            
<!--            <figure class="wpb_wrapper vc_figure">-->
<!--              <div class="vc_single_image-wrapper vc_box_border_circle  vc_box_border_grey"><img class="vc_single_image-img " src="/img/Dr Khange Sir Principal.jpeg" width="252" height="252" alt="1" title="1"></div>-->
<!--            </figure>-->
<!--          </div>-->
<!--          <h3 style="text-align: left" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_start_animation animated">Dr. Khanage Shantaram Gajanan</h3>-->
<!--          <p class="small-text">(Principal, Rashtriya College of Pharmacy)</p>-->
<!--          <div class="wpb_text_column wpb_content_element  vc_custom_1523341354265">-->
<!--            <div class="wpb_wrapper">-->
<!--              <p  class="desk-message-p">“From the very inception, Rashtriya College of Pharmacy is known to be “a college with a difference” with distinct identity and disposition amongst the Pharmacy Colleges in the State of Maharashtra.”</p>-->
<!--            <p>Situated in a scenic and picturesque location, the campus provides an environment conducive to learning and achieving the academic and professional aspirations of the students. Facilities are provided to promote every talent and innovation in students. Innovations and performance have become the survival strategies in the present techno-economic scenario marked by fierce competition.</p>-->
        
<!--            </div>-->
<!--          </div>-->
<!--          <div class="vc_btn3-container vc_btn3-inline">-->
<!--            <a onmouseleave="this.style.borderColor='#ffffff'; this.style.backgroundColor='transparent'; this.style.color='#ffffff'" onmouseenter="this.style.borderColor='#982827'; this.style.backgroundColor='#982827'; this.style.color='#ffffff';" style="border-color: rgb(255, 255, 255); color: rgb(255, 255, 255); background-color: transparent;" class="btn vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" href="/principle-message.php" title="Founder">Read more</a>-->

<!--            </div>-->
<!--          </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->



<!--  </div>-->
<!--</section>-->


<section class="desk-messages-section py-5 " style="background: linear-gradient(135deg, #fbe9e7, #fff3e0); overflow: hidden;">
  <div class="container">
    <div class="row g-4">

      <!-- President -->
      <div class="col-md-4">
        <div class="card text-center card-3d h-100"  >
          <div class="position-relative pt-4">
            <img src="/img/Nitin Patil Saheb.jpg" class="rounded-circle img-3d mx-auto" width="140" height="140" alt="President Image" style="object-fit: cover;">
          </div>
          <div class="card-body px-4">
            <h5 class="fw-semibold mt-3">Hon. Shri. Nitin Suresh Patil</h5>
            <p class="text-danger small fw-semibold">(President, Rashtriya Charitable Trust)</p>
            <p class="text-muted fst-italic small">“It gives me a great pleasure to extend a very warm welcome to the attractive campus of Rashtriya charitable Trust’s, Rashtriya College of Pharmacy...”</p>
            <p class="small text-secondary">Since last two decades, I have been working in education, politics, social work and cooperative sector. Education is the light and a pathway to a higher purpose...</p>
            <a href="/president-message.php" class="btn btn-sm  rounded-pill mt-2" style="background-color: #4e260b; color:#fff;">Read More</a>
          </div>
        </div>
      </div>

      <!-- Secretary -->
      <div class="col-md-4">
        <div class="card text-center card-3d h-100">
          <div class="position-relative pt-4">
            <img src="/img/Arjun Patil Saheb.jpeg" class="rounded-circle img-3d mx-auto" width="140" height="140" alt="Secretary Image" style="object-fit: cover;">
          </div>
          <div class="card-body px-4">
            <h5 class="fw-semibold mt-3">Hon. Shri. Arjun N. Patil</h5>
            <p class="text-danger small fw-semibold">(Secretary, Rashtriya Charitable Trust)</p>
            <p class="text-muted fst-italic small">“In today’s world of globalization and competition, education must empower the youth to become innovators and entrepreneurs...”</p>
            <p class="small text-secondary">With a mission to deliver world-class education to rural students, Rashtriya Charitable Trust was established in 1991 by Hon’ble Suresh Patil...</p>
            <a href="/secretary-message.php" class="btn btn-sm  rounded-pill mt-2"style="background-color: #4e260b; color:#fff;">Read More</a>
          </div>
        </div>
      </div>

      <!-- Principal -->
      <div class="col-md-4">
        <div class="card text-center card-3d h-100">
          <div class="position-relative pt-4">
            <img src="/img/principal.jpeg" class="rounded-circle img-3d mx-auto" width="140" height="140" alt="Principal Image" style="object-fit: cover;">
          </div>
          <div class="card-body px-4">
            <h5 class="fw-semibold mt-3">Dr. Jayshri Hiradas Bairagi</h5>
            <p class="text-danger small fw-semibold">(Principal, Rashtriya College of Pharmacy)</p>
            <p class="text-muted fst-italic small">“From inception, Rashtriya College of Pharmacy is known as ‘a college with a difference’ due to its distinct academic spirit...”</p>
            <p class="small text-secondary">Nestled in a scenic setting, the campus nurtures academic and professional dreams in a peaceful, learning-friendly atmosphere...</p>
            <a href="/principle-message.php" class="btn btn-sm  rounded-pill mt-2"style="background-color: #4e260b; color:#fff;">Read More</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<!--<section class="quick-links bg-grey" style="padding: 10px 0px;">-->
<!--  <div class="container">-->
<!--    <h3 class="">Quick Links</h3>-->
    
<!--    <a target="_blank" href="https://www.aicte-india.org/"><i class="fa fa-link"></i>&nbsp;AICTE</a>-->
<!--    <a target="_blank" href="http://www.pci.nic.in/"><i class="fa fa-link"></i>&nbsp;PCI</a>-->
<!--    <a target="_blank" href="http://www.dtemaharashtra.gov.in/index.html"><i class="fa fa-link"></i>&nbsp;DTE</a>-->
<!--    <a target="_blank" href="https://msbte.org.in/"><i class="fa fa-link"></i>&nbsp;MSBTE</a>-->
<!--    <a target="_blank" href="https://online.mspcindia.org/"><i class="fa fa-link"></i>&nbsp;MSPC</a>-->
<!--    <a target="_blank" href="http://www.maha-ara.org/ara/index.php"><i class="fa fa-link"></i>&nbsp;ARA</a>-->
<!--    <a target="_blank" href="http://www.sssamiti.org/~sspnsamiti/web_fra/?q=home"><i-->
<!--        class="fa fa-link"></i>&nbsp;SSS</a>-->
<!--    <a target="_blank" href="http://cetcell.mahacet.org/"><i class="fa fa-link"></i>&nbsp;CET CELL</a>-->
<!--    <a target="_blank" href="#"><i class="fa fa-link"></i>&nbsp;SIF</a>-->
<!--    <a target="_blank" href="#"><i class="fa fa-link"></i>&nbsp;AISHE</a>-->
<!--  </div>-->
<!--</section>-->
<section class="quick-links  py-4 " style="background: linear-gradient(135deg, #fbe9e7, #fff3e0); overflow: hidden;">
  <div class="container-fluid">
    <h3 class="mb-4 text-center" style="font-size: 1.5rem; color: #bf360c;">Quick Links</h3>
    <div class="row g-3 justify-content-center">

      <!-- Each Link as a Button -->
      <div class="col-md-2 col-sm-6">
        <a href="https://www.aicte-india.org/" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> AICTE
        </a>
      </div>

      <div class=" col-md-2 col-sm-6">
        <a href="http://www.pci.nic.in/" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> PCI
        </a>
      </div>

      <div class="col-md-2 col-sm-6">
        <a href="http://www.dtemaharashtra.gov.in/index.html" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> DTE
        </a>
      </div>

      <div class="col-md-2 col-sm-6">
        <a href="https://msbte.org.in/" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> MSBTE
        </a>
      </div>

      <div class="col-md-2 col-sm-6">
        <a href="https://online.mspcindia.org/" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> MSPC
        </a>
      </div>

      <div class="col-md-2 col-sm-6">
        <a href="http://www.maha-ara.org/ara/index.php" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> ARA
        </a>
      </div>

      <div class="col-md-2 col-sm-6">
        <a href="http://www.sssamiti.org/~sspnsamiti/web_fra/?q=home" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> SSS
        </a>
      </div>

      <div class="col-md-2 col-sm-6">
        <a href="http://cetcell.mahacet.org/" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> CET CELL
        </a>
      </div>

      <div class="col-md-2 col-sm-6">
        <a href="#" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> SIF
        </a>
      </div>

      <div class="col-md-2 col-sm-6">
        <a href="#" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> AISHE
        </a>
      </div>
      <div class="col-md-2 col-sm-6">
        <a href="/fra-document.php" target="_blank" class="btn btn-outline-primary w-100 shadow-sm py-3">
          <i class="fa fa-link me-2"></i> FRA
        </a>
      </div>

    </div>
  </div>
</section>
<style>
.quick-links .btn {
  transition: all 0.3s ease-in-out;
  font-weight: 600;
  border: 1px solid;
  border-radius: 10px;
}

.quick-links .btn:hover {
  background-color: #5f3112;
  color: #fff;
    border: 1px  solid #fff;
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}
</style>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <!--<div class="modal-content" style="padding: 0;background-color: transparent;">-->
    <!--  <div class="modal-body" style="padding: 0;">-->
    <!--    <button style="position: absolute;top: -25px;right: 0;" type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--      <span aria-hidden="true">&times;</span>-->
    <!--    </button>-->
    <!--    <img src="/img/a.jfif" style="width: 100%;" alt="Rashtriya College of Pharmacy Hatnur">-->
    <!--  </div>-->
    <!--</div>-->
    
    <div class="modal-content p-0 bg-transparent border-0">
  <div class="modal-body p-0 position-relative">
    <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close" style="top: -25px; right: 0; z-index: 1051;">
      <span aria-hidden="true">&times;</span>
    </button>
    <img src="/img/mainbanner.jpeg" class="img-fluid w-100" alt="Rashtriya College of Pharmacy Hatnur">
  </div>
</div>

  </div>
</div>

<?php
  include_once('components/footer.php');
?>  