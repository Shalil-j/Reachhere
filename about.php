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
        <h1 class="display-4 animated slideInDown mb-4">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

<div class="col-6 mx-auto px-5 py-2 rounded bg--primary">
  <h1 class="text-white text-center fw-light">
" You have two hands. One to help yourself, and one to help others. "
</h1>
<p class="text-white text-end fst-italic">
By Audrey Hepburn
</p>
</div>

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="img/carousel-1.jpg"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
                style="width: 200px; height: 200px"
              >
                <div
                  class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3"
                >
                  <h1 class="text-white mb-0">25</h1>
                  <h2 class="text-white">Years</h2>
                  <h5 class="text-white mb-0">Experience</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp mt-5" data-wow-delay="0.5s">
            <div class="h-100">
              <p class="fs-5 text-primary mb-4">
              Caregiving often calls us to lean into love we didn’t know possible. We as human beings, need care, assistance and backing, with compassion, at every stage of life. Reach Here is an inimitable concept providing instantaneous assistance through REACHERS (Assistants) on an hourly/contractual basis to address the requirements of senior citizens, domestic help and children.
              </p>
              <div class="border-top mt-4 pt-4">
                <div class="d-flex align-items-center">
                  <img
                    class="flex-shrink-0 rounded-circle me-3"
                    src="img/profile.jpg"
                    alt=""
                  />
                  <h5 class="mb-0">Call Us: +91 777715955</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
      <div class="container facts px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 px-4 ps-lg-0">
              <h1 class="text-white mb-4">For Individuals And Organisations</h1>
              <p class="text-light mb-5">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <a href="" class="align-self-start btn btn-secondary py-3 px-5"
                >More Details</a
              >
            </div>
          </div>
          <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 px-4 pe-lg-0">
              <div class="row g-5">
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Happy Clients</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Projects Succeed</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Awards Achieved</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Team Members</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/team-1.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/team-2.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/team-3.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/team-4.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

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
