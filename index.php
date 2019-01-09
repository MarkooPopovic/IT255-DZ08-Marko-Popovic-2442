
  <?php
    $title = 'Home';
    include 'templates/header.php';
    include 'templates/navigation.php';

  ?>


  <!-- Slider section -->

  <main class="container">
    <div class="col-12">
      <div id="slider" class="carousel slide mt-4" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#slider" data-slide-to="0" class="active"></li>
          <li data-target="#slider" data-slide-to="1"></li>
          <li data-target="#slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="img/slide_01.jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3>Brand New Facilities</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img/slide_02.jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3>Learn About Our Services</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img/slide_03.jpg">
            <div class="carousel-caption d-none d-md-block">
              <h3>New Website 2 For 1 In All Service</h3>
            </div>
          </div>
        </div>
        <!--.carousel-inner-->

        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </main>

  <section class="new-website pt-5 ">
    <h2 class="text-center text-uppercase pb-2"><span class="text-lowercase">Welcome to our new </span></br>Website</h2>
    <p class="text-center mt-2">Excellent conditions for maintaining all kinds of corporate meetings and . </br>
      celebrations</p>
  </section>

  <div class="container pb-5">
    <div class="row">
      <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
        <div class="image-links">
          <img src="img/service_01.jpg" class="image-fluid">
          <div class="row no-gutters">
            <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
              <h3 class="text-center text-uppercase"><span class="text-lowercase">Learn more</span>About Us</h3>
              <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read more</a>
            </div>
          </div>
        </div>
      </div> <!-- col-md-4 -->
      <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
        <div class="image-links">
          <img src="img/service_02.jpg" class="image-fluid">
          <div class="row no-gutters">
            <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
              <h3 class="text-center text-uppercase"><span class="text-lowercase">about our</span>Service</h3>
              <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read more</a>
            </div>
          </div>
        </div>
      </div><!-- col-md-4 -->
      <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
        <div class="image-links">
          <img src="img/service_03.jpg" class="image-fluid">
          <div class="row no-gutters">
            <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
              <h3 class="text-center text-uppercase"><span class="text-lowercase">visit our</span>Store</h3>
              <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read more</a>
            </div>
          </div>
        </div>
      </div><!-- col-md-4 -->
    </div>
  </div>


  <!-- Hours section -->
  <div class="business-hours">
    <div class="container">
      <div class="row">
        <div class="col-md-6 py-5">
          <h2 class="text-uppercase text-center ">Business Hour:</h2>
          <p class="text-center mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. </p>
          <table class="table table-hover mt-5 text-center">
            <thead class="table-danger">
              <tr>
                <th>Day</th>
                <th>From</th>
                <th>To</th>
              </tr>
            </thead>
            <tr>
              <td>Monday</td>
              <td>24:00</td>
              <td>00:00</td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td>24:00</td>
              <td>00:00</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td>24:00</td>
              <td>00:00</td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td>24:00</td>
              <td>00:00</td>
            </tr>
            <tr>
              <td>Friday</td>
              <td>24:00</td>
              <td>00:00</td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td>24:00</td>
              <td>00:00</td>
            </tr>
            <tr>
              <td>Sunday</td>
              <td>24:00</td>
              <td>00:00</td>
            </tr>
          </table>
        </div>
        <div class="col-md-6 bg-hours">
          <div class="row">

          </div>
        </div> <!-- col-md-6 -->
      </div>
    </div>
  </div>

  <!-- Products Section -->

  <div class="container products py-5">
    <h2 class="text-center text-uppercase"><span class="text-lowercase">checkout our </span>products</h2>
    <div class="row py-4">
      <div class="col-6 col-md-3 mb-5 mb-md-0">
        <div class="card">
          <a href="#">
            <img src="img/product_thumb_01.jpg" class="card-img-top img-fluid"></a>
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase mb-0">Product 1</h3>
            <p class="text-center card-text text-uppercase">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              seddoeiusmod.</p>
            <p class="price text-center mb-0">$25</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-5 mb-md-0">
        <div class="card">
          <a href="#">
            <img src="img/product_thumb_02.jpg" class="card-img-top img-fluid"></a>
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase mb-0">Product 1</h3>
            <p class="text-center card-text text-uppercase ">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              seddoeiusmod.</p>
            <p class="price text-center mb-0">$25</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-5 mb-md-0">
        <div class="card">
          <a href="#">
            <img src="img/product_thumb_03.jpg" class="card-img-top img-fluid"></a>
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase mb-0">Product 1</h3>
            <p class="text-center card-text text-uppercase ">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              seddoeiusmod.</p>
            <p class="price text-center mb-0">$25</p>
          </div>
          </a>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-5 mb-md-0">
        <div class="card">
          <a href="#">
            <img src="img/product_thumb_04.jpg" class="card-img-top img-fluid"></a>
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase mb-0">Product 1</h3>
            <p class="text-center card-text text-uppercase ">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              seddoeiusmod.</p>
            <p class="price text-center mb-0">$25</p>
          </div>
          </a>
        </div>
      </div>

      <!-- Appointment Section -->


      <div class="appointment container-fluid py-5">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-3 text-center ">
            <h3 class="text-uppercase">make an appointment</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, seddoeiusmod Lorem Lorem ipsum dolor sit
              amet,
              consectetur adipiscing elit, seddoeiusmod Lorem</p>
            <a href="#" class="btn btn-primary btn-lg mt-3 text-uppercase">read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
      include 'templates/footer.php';
  ?>

  <script src="js/jquery.slim.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>
