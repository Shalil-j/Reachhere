<!DOCTYPE html>
<html lang="en">
<?php include("components/header.php");?>
  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php require('components/sections/common/navbar.php') ?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Appointment</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Appointment
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Appointment Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 mb-5">
              We're Award Winning Insurance Company
            </h1>
            <p class="mb-5">
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
              stet lorem sit clita duo justo magna dolore erat amet. Tempor erat
              elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
              diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
              clita duo justo magna.
            </p>
            <div class="bg-light rounded p-3">
              <div class="d-flex align-items-center bg-white rounded p-3">
                <img
                  class="flex-shrink-0 rounded-circle me-3"
                  src="img/profile.jpg"
                  alt=""
                />
                <h5 class="mb-0">Call Us: +012 345 6789</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-light rounded p-5">
              <form>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="gname"
                        placeholder="Gurdian Name"
                      />
                      <label for="gname">Your Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control"
                        id="gmail"
                        placeholder="Gurdian Email"
                      />
                      <label for="gmail">Your Email</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cname"
                        placeholder="Child Name"
                      />
                      <label for="cname">Your Mobile</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cage"
                        placeholder="Child Age"
                      />
                      <label for="cage">Service Type</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 80px"
                      ></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary py-3 px-5" type="submit">
                      Get Appointment
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Appointment End -->

    <!-- Footer Start -->
    <?php require('components/sections/common/footer.php')  ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <?php require('components/scripts.php')  ?>
  </body>
</html>
