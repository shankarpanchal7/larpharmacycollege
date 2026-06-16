 <?php
include_once("components/header_t.php");
echo '<title>Academic Timetable - B. Pharmacy</title>';
include_once("components/header_b.php"); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

<style>
  .gallery-container {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    /*justify-content: center;*/
  }

  .gallery-item {
    width: calc(100% - 12px); /* 4 items per row with gap */
    min-width: 200px;
    max-width: 450px;
  }

  .gallery-img {
    height: 850px;
    width: 100%;
    object-fit: cover;
    border-radius: 10px;
    transition: 0.3s;
  }

  .gallery-img:hover {
    transform: scale(1.03);
  }

  @media (max-width: 768px) {
    .gallery-item {
      width: calc(50% - 16px); /* 2 items per row on tablets */
    }
  }

  @media (max-width: 480px) {
    .gallery-item {
      width: 100%; /* Full width on small devices */
    }
  }
</style>

<div class="container-fluid py-5">
  <h2 class="mb-4 text-center my-4"><b>Academic Timetable - D. Pharmacy</b></h2>
  <div class="gallery-container d-flex flex-wrap gap-3 justify-content-center">
    
    

    <!-- New Images -->
        <div class="gallery-item">
        <P class="text-center my-4"><b>First Year D.Pharmacy</b></P>
        <a data-fancybox="gallery" href="college-storage/academic-timetable/d_pharm/dpharm_first_year.jpg">
          <img src="college-storage/academic-timetable/d_pharm/dpharm_first_year.jpg" class="gallery-img border" alt="Gallery Image"></a></div>
   <div class="gallery-item"> <P class="text-center my-4"><b>Second Year D.Pharm </b></P>
        <a data-fancybox="gallery" href="college-storage/academic-timetable/d_pharm/dpharm_second_year.jpg">
          <img src="college-storage/academic-timetable/d_pharm/dpharm_second_year.jpg" class="gallery-img border" alt="Gallery Image"></a></div>


  </div>
</div>


<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
  Fancybox.bind("[data-fancybox='gallery']", {});
</script>

   
<?php
  include_once('components/footer.php');
?>