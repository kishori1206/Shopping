<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confetti Cart Contact</title>


    <!-- bootstrap cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


    <!-- including font-awesome and bootstrap-social -->
    <script src="https://kit.fontawesome.com/f4bc18eeb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/bootstrap-social.css">

    <!-- google font cdn-->
    <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@300&display=swap" rel="stylesheet">
    <link rel='icon' href="Images/logo.png">






    <link rel="stylesheet" href="styles1.css" />



    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="app1.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"
        integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg=="
        crossorigin="anonymous"></script>



    <script>
        var wow = new WOW(
            {
                boxClass: 'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 0,          // distance to the element when triggering the animation (default is 0)
                mobile: true,       // trigger animations on mobile devices (default is true)
                live: true,       // act on asynchronously loaded content (default is true)
                callback: function (box) {
                    // the callback is fired every time an animation is started
                    // the argument that is passed in is the DOM node being animated
                },
                scrollContainer: null,    // optional scroll container selector, otherwise use window,
                resetAnimation: true,     // reset animation on end (default is true)
            }
        );
        wow.init();
    </script>

</head>

<body>


    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo">CONFETTI CART</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="index1.html" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="about.html" class="navbar__links" id="about-page">About</a>
                </li>
                <li class="navbar__item">
                    <a href="contact.php" class="navbar__links" id="services-page">Contact</a>
                </li>

            </ul>
        </div>
    </nav>
    <section class="breadcrumbs-section">
        <div class="container pl-3 p-sm-3">
            <div class="row">
                <div class="col-12">
                    <h2 class="wow fadeOut">
                        Contact Us
                    </h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index1.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Contact Us</a></li>

                    </ol>
                </div>

            </div>
        </div>

    </section>



    <section>
        <div class="container ">
            <div class="row">
                <div class="col-12 ">


                    <p>
                        Thank you for your interest in confetti cart.
                        We would love to hear your reviews and suggestions to improve our service.New Quotes submission
                        will be highly Appreciated.
                    </p>
                    <hr />

                </div>

            </div>

        </div>

    </section>


    <section class="my-5">
     <div class="py-5">
          <h3 class="text-center"> 
                    Contact Us</h3>
     </div>

     <div class="w-50 m-auto">
          <form action="userinfo.php" method="post">
          <div class="form-group">
          <label >Ussername</label>
          <input type="text" name="user"  auotcomplete="off"  class="form-control">
     </div>
     <div class="form-group">
          <label >Email id</label>
          <input type="text" name="email"  auotcomplete="off"  class="form-control">
     </div>
     <div class="form-group">
          <label >Mobile</label>
          <input type="text" name="mobile"  auotcomplete="off"  class="form-control">
     </div>
     <div class="form-group">
          <label > Comment</label>
          <textarea class="form-control" name="comment">
          </textarea>
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
     </form>
     </div>
     </section>





    <!-- <section class="form -section ">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 ">

                    <form action="" method="post">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="user" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name="mobile" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Comments</label>
                            <textarea class="form-control" name="comments">
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                </div>


                 <div class="col-md-6 address ">

                    <h5>Call Us/ Whatsapp</h5>
                    <p> <a href="tel:+910000000000"> <i class="fa fa-phone"></i>0000000000</a></p>

                    <h5>email</h5>
                    <p> <a href="ayushi.agrawal_cs18@gla.ac.in">ayushi.agrawal_cs18@gla.ac.in</a>
                        <br />
                        <a href="kishori.agrawal_cs18@gla.ac.in">kishori.agrawal_cs18@gla.ac.in</a>
                        <br />
                        <a href="shubhangi.srivastav_cs18@gla.ac.in">shubhangi.srivastav_cs18@gla.ac.in</a>
                        <br />

                        
                    </p>
                    <h5>Working hours</h5>
                    <p> Mon-Fri : 9am -6pm (IST)
                    </p>

                    <h5>Address</h5>
                    <p> 2rd floor,C block,krishna colony,Mathura
                    </p>

                </div> 
            </div>

        </div>

    </section> -->
 <!-- Footer Section -->
 <div class="footer__container">
    <div class="footer__links">
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2>About Us</h2>
                <a href="/sign__up">How it works</a> <a href="/">Testimonials</a>
                <a href="/">Careers</a> <a href="/">Terms of Service</a>
            </div>
            <div class="footer__link--items">
                <h2>Contact Us</h2>
                <a href="/">Contact</a> <a href="/">Support</a>
                <a href="/">Destinations</a>
            </div>
        </div>
        <div class="footer__link--wrapper">
            <div class="footer__link--items">
                <h2>Videos</h2>
                <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
                <a href="/">Agency</a>
            </div>
            <div class="footer__link--items">
                <h2>Social Media</h2>
                <a href="/">Instagram</a> <a href="/">Facebook</a>
                <a href="/">Youtube</a> <a href="/">Twitter</a>
            </div>
        </div>
    </div>
    <section class="social__media">
        <div class="social__media--wrap">
            <div class="footer__logo">
                <a href="/" id="footer__logo">CONFETTI CART</a>
            </div>
            <p class="website__rights">© CONFETTI CART 2020. All rights reserved</p>
            <div class="social__icons">
                <a href="" class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="" class="social__icon--link"><i class="fab fa-instagram"></i></a>
                <a href="" class="social__icon--link"><i class="fab fa-youtube"></i></a>
                <a href="" class="social__icon--link"><i class="fab fa-linkedin"></i></a>
                <a href="" class="social__icon--link"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </section>
</div>




</body>

</html>