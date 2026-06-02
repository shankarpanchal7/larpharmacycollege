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
  border: 1px solid #fff;
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}
</style>

<?php
include_once('components/footer.php');
?>