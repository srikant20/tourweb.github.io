<!DOCTYPE html>
<html lang="en">



<body>
  <!-- Header Start -->
  <?php include "header.php" ?>
  <!-- header END -->

  <!-- Home Section Start -->
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item" data-interval="2000">
        <img src="images/carouselimg.jpg" class="d-block w-100" alt="" />
        <div class="carousel-caption d-lg-flex c-text">
          <h6>Explore, Discover, Travel</h6>
          <h1>Make your tour worthwhile</h1>
          <button class="btn">Discover more</button>
        </div>
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="images/carouselimg1.jpg" class="d-block w-100" alt="" />
        <div class="carousel-caption d-lg-flex c-text">
          <h6>Explore, Discover, Travel</h6>
          <h1>Make your tour worthwhile</h1>
          <button class="btn">Discover more</button>
        </div>
      </div>
      <div class="carousel-item active" data-interval="2000">
        <img src="images/carouselimg2.jpg" class="d-block w-100" alt="" />
        <div class="carousel-caption d-lg-flex c-text">
          <h6>Explore, Discover, Travel</h6>
          <h1>Make your tour worthwhile</h1>
          <button class="btn">Discover more</button>
        </div>
      </div>
    </div>
    <a href="#myCarousel" class="carousel-control-prev" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#myCarousel" class="carousel-control-next" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <!-- Home Section End -->

  <!-- Services Section Start -->
  <?php include "service.php" ?>
  <!-- Services End -->

  <!-- About us Section Start -->
  <section class="about">
    <div class="container">
      <div class="row a-box">
        <div class="col-md-6 p-0">
          <div class="a-img">
            <img src="images/camera.jpg" alt="" />
          </div>
        </div>
        <div class="col-md-6 p-0">
          <div class="a-text">
            <h1 class="a-title">About us</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repellendus, accusantium consequatur similique error ipsa, sunt
              quis reprehenderit, assumenda sequi perferendis magni? Non
              nostrum sit impedit sunt nihil ratione! Expedita, ullam?
            </p>
            <button class="btn"><a href="about.php" class="text-white">read more</a></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About us Section End -->

  <!-- package Section Start -->
  <section class="package">
    <h1>Our packages</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 p-3">
          <div class="p-box">
            <div class="p-img">
              <img src="images/p.jpg" alt="" />
            </div>
            <div class="p-text">
              <h5 class="p-title">Prem Mandir, Vrindavan</h5>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                explicabo!
              </p>
              <button class="btn"><a href="book.php" class="text-white">book now</a></button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 p-3">
          <div class="p-box">
            <div class="p-img">
              <img src="images/Rishikesh, uttarakhand.jpg" alt="" />
            </div>
            <div class="p-text">
              <h5 class="p-title">Rishikesh, uttarakhand</h5>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                explicabo!
              </p>
              <button class="btn"><a href="book.php" class="text-white">book now</a></button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 p-3">
          <div class="p-box">
            <div class="p-img">
              <img src="images/kedarnath.jpg" alt="" />
            </div>
            <div class="p-text">
              <h5 class="p-title">Kedarnath, Uttarakhand</h5>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic,
                explicabo!
              </p>
              <button class="btn"><a href="book.php" class="text-white">book now</a></button>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="btn p-load">Load more</div>
      </div>
    </div>
  </section>
  <!-- package Section End -->

  <!-- Package Offer Section Start -->
  <section class="offer">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <div class="o-text">
            <h1>upto 50% off</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla
              impedit modi, dignissimos illo, nesciunt nihil ullam quam
              asperiores ab numquam aliquid quae explicabo praesentium beatae
              sed eligendi officia eum soluta?
            </p>
            <div class="btn"><a href="book.php" class="text-white">book now</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Package Offer Section End -->

  <!-- Footer Start -->
  <?php include "footer.php" ?>
  <!-- Footer END -->
</body>

</html>