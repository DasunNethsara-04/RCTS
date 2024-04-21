<?php

include ("./Connection/db.php");
// checking if the Super User in the database or not
$sql = "SELECT * FROM user_tbl ut INNER JOIN user_role_tbl urt ON (ut.user_role_id = urt.user_role_id) WHERE ut.user_role_id = 1 AND ut.status=1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows < 1) {
  // super user not found
  // load the error 500 page
  header("Location:./Error/401.php");
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Richmond College Technology Society</title>
  <meta
    content="RCTS, ET, SFT, ICT, Richmond College, Galle, Tech, Technology, Technology Society, Technology Section, richmond college technology society"
    name="keywords" />

  <meta name="description" content="The Official Website of the Richmond College Technology Society" />
  <meta name="author" content="Dasun Nethsara" />
  <meta name="title" content="Richmond College Technology Society" />
  <meta name="og:title" content="Richmond College Technology Society" />
  <meta name="og:description" content="The Official Website of the Richmond College Technology Society" />
  <meta name="og:keywords"
    content="RCTS, ET, SFT, ICT, Richmond College, Galle, Tech, Technology, Technology Society, Technology Section, richmond college technology society" />
  <meta name="og:author" content="Dasun Nethsara" />

  <!-- Favicons -->
  <link href="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="./assets/lib/animate/animate.min.css" rel="stylesheet" />
  <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="./assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <img src="https://i.ibb.co/JF8nBS1/Logo-Tech-2.png" alt="richmond college technology society logo" srcset=""
        width="110px" />
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.php" class="nav-item nav-link active">Home</a>
        <a href="#news" class="nav-item nav-link">News and Events</a>
        <a href="#subjects" class="nav-item nav-link">Subjects</a>
        <a href="#staff" class="nav-item nav-link">Staff</a>
        <a href="#" class="nav-item nav-link">Gallery</a>
        <a href="#" class="nav-item nav-link">Downloads</a>
        <a href="./login.php" class="nav-item nav-link">Login</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="./assets/img/carousel/img1.jpg" alt="" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(24, 29, 56, 0.7)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                  Welcome To,
                </h5>
                <h1 class="display-3 text-white animated slideInDown">
                  Richmond College Technology Society
                </h1>
                <p class="fs-5 text-white mb-4 pb-2">
                  <!-- Richmond College is a primary and secondary school in Galle,
                    Sri Lanka which was established as Galle High School in
                    1876. The founder of school was the Wesleyan Missionary
                    George Bough. The first principal of the school was Rev
                    Samuel Langdon. In 1882, it was renamed Richmond College. -->
                  Welcome to Richmond College Tech Society! Dive into collaborative learning and hands-on tech
                  experiences with us. Let's innovate together!
                </p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="./assets/img/carousel/img2.jpg" alt="" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(24, 29, 56, 0.7)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                  Welcome To,
                </h5>
                <h1 class="display-3 text-white animated slideInDown">
                  Richmond College Technology Society
                </h1>
                <p class="fs-5 text-white mb-4 pb-2">
                  Welcome to Richmond College Tech Society! Dive into collaborative learning and hands-on tech
                  experiences with us. Let's innovate together!
                </p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="./assets/img/carousel/img3.jpg" alt="" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(24, 29, 56, 0.7)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                  Welcome To,
                </h5>
                <h1 class="display-3 text-white animated slideInDown">
                  Richmond College Technology Society
                </h1>
                <p class="fs-5 text-white mb-4 pb-2">
                  Welcome to Richmond College Tech Society! Dive into collaborative learning and hands-on tech
                  experiences with us. Let's innovate together!
                </p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="./assets/img/carousel/img4.jpg" alt="" />
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
          style="background: rgba(24, 29, 56, 0.7)">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-sm-10 col-lg-8">
                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                  Welcome To,
                </h5>
                <h1 class="display-3 text-white animated slideInDown">
                  Richmond College Technology Society
                </h1>
                <p class="fs-5 text-white mb-4 pb-2">
                  Welcome to Richmond College Tech Society! Dive into collaborative learning and hands-on tech
                  experiences with us. Let's innovate together!
                </p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- News Start -->
  <div class="container-xxl py-5" id="news">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">
          News
        </h6>
        <h1 class="mb-5">News & Events</h1>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="./assets/img/course-1.jpg" alt="" />
              <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                  style="border-radius: 20px">Read More</a>
              </div>
            </div>
            <div class="text-center p-4 pb-0">
              <h5 class="mb-4">
                Web Design & Development Course for Beginners
              </h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                Students</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-calendar text-primary me-2"></i>02.04.2022</small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="./assets/img/course-2.jpg" alt="" />
              <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                  style="border-radius: 20px">Read More</a>
              </div>
            </div>
            <div class="text-center p-4 pb-0">
              <h5 class="mb-4">
                Web Design & Development Course for Beginners
              </h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                Students</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-calendar text-primary me-2"></i>02.04.2022</small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="./assets/img/course-3.jpg" alt="" />
              <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                  style="border-radius: 20px">Read More</a>
              </div>
            </div>
            <div class="text-center p-4 pb-0">
              <h5 class="mb-4">
                Web Design & Development Course for Beginners
              </h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                Students</small>
              <small class="flex-fill text-center py-2"><i
                  class="fa fa-calendar text-primary me-2"></i>02.04.2022</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- News End -->

  <!-- Subjects Start -->
  <!-- recomended image resolusion: 600x400 -->
  <div class="container-xxl py-5" id="subjects">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">
          Subjects
        </h6>
        <h1 class="mb-5">Our Subjects</h1>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="./assets/img/course-1.jpg" alt="" />
            </div>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">ET</h3>
              <h5 class="mb-4">
                Engineering Technology<br />
              </h5>
            </div>
            <div class="d-flex border-top">
              <!-- Teachers count -->
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John
                Doe</small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="./assets/img/course-2.jpg" alt="" />
            </div>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">SFT</h3>
              <h5 class="mb-4">
                Science For Technology<br />
              </h5>
            </div>
            <div class="d-flex border-top">
              <!-- Teachers count -->
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John
                Doe</small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="./assets/img/course-3.jpg" alt="" />
            </div>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">ICT</h3>
              <h5 class="mb-4">
                Information and Communication Technology
              </h5>
            </div>
            <div class="d-flex border-top">
              <!-- Teachers count -->
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John
                Doe</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Subjects End -->

  <!-- Staff Member Start -->
  <div class="container-xxl py-5" id="staff">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">
          Staff
        </h6>
        <h1 class="mb-5">Academic Staff</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="./assets/img/team-1.jpg" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="./assets/img/team-2.jpg" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="./assets/img/team-3.jpg" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="./assets/img/team-4.jpg" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
        <h1 class="mb-5">Contact For Any Query</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <h5>Get In Touch</h5>
          <p class="mb-4">Have a question, comment, or inquiry? We're here to help! Get in touch with us through our
            contact form, email, or phone number. Our dedicated team is ready to assist you with any queries or concerns
            you may have. Feel free to reach out anytime – we're committed to providing exceptional support to our
            valued visitors</p>
          <div class="d-flex align-items-center mb-3">
            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
              style="width: 50px; height: 50px;">
              <i class="fa fa-map-marker-alt text-white"></i>
            </div>
            <div class="ms-3">
              <h5 class="text-primary">Address</h5>
              <p class="mb-0">Richmond Hill Rd, Galle 80000, Sri Lanka</p>
            </div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
              style="width: 50px; height: 50px;">
              <i class="fa fa-phone-alt text-white"></i>
            </div>
            <div class="ms-3">
              <h5 class="text-primary">Mobile</h5>
              <p class="mb-0">+94 76 055 5678</p>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
              style="width: 50px; height: 50px;">
              <i class="fa fa-envelope-open text-white"></i>
            </div>
            <div class="ms-3">
              <h5 class="text-primary">Email</h5>
              <p class="mb-0">rctsenovus@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <iframe class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.5788732854317!2d80.20548092701924!3d6.052363462013656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173ef4cc6b88d%3A0xd9c5ef5a5f92100b!2sRichmond%20College!5e0!3m2!1sen!2ssg!4v1687810154395!5m2!1sen!2ssg"
            frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
        <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="name" placeholder="Your Name">
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control" id="email" placeholder="Your Email">
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="subject" placeholder="Subject">
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a message here" id="message"
                    style="height: 150px"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Quick Link</h4>
          <a class="btn btn-link" href="">About Us</a>
          <a class="btn btn-link" href="">Contact Us</a>
          <a class="btn btn-link" href="">Privacy Policy</a>
          <a class="btn btn-link" href="">Terms & Condition</a>
          <a class="btn btn-link" href="">FAQs & Help</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Contact</h4>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
          </p>
          <p class="mb-2">
            <i class="fa fa-phone-alt me-3"></i>+012 345 67890
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope me-3"></i>info@example.com
          </p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-3">Newsletter</h4>
          <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
          <div class="position-relative mx-auto" style="max-width: 400px">
            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
              SignUp
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a class="border-bottom" href="./index.php">RCTS</a>, All Right
            Reserved. Designed By
            <a class="border-bottom" target="_blank" href="https://www.techsaralk.epizy.com">Dasun Nethsara</a><br />
          </div>
          <div class="col-md-6 text-center text-md-end">
            <div class="footer-menu">
              <a href="">Home</a>
              <a href="">Cookies</a>
              <a href="">Help</a>
              <a href="">FQAs</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/lib/wow/wow.min.js"></script>
  <script src="./assets/lib/easing/easing.min.js"></script>
  <script src="./assets/lib/waypoints/waypoints.min.js"></script>
  <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="./assets/js/main.js"></script>
</body>

</html>