<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <link rel="stylesheet" href="./assets/css/themify-icon.css">
    <title>Document</title>
</head>

<body data-bs-spy="scrool" data-bs-target=".navbar">
    <!--Navigation section-->

    <section id="header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo.png" alt="logo" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-align-justify navbar-toggler-icon"></span>

                    <!-- <span class="navbar-toggler-icon"></span> -->
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#special">Special</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </section>

    <!-- Home section -->

    <section id="home" class="home pt-5 overflow-hidden">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="home-banner home-banner-1">
                        <div class="home-banner-text">
                            <h1>Women</h1>
                            <h2>52% Discount for this Season</h2>
                            <a href="#" class="btn btn-danger text-uppercase mt-4">Our Products</a>

                        </div>

                    </div>

                </div>
                <div class="carousel-item">
                    <div class="home-banner home-banner-2">
                        <div class="home-banner-text">
                            <h1>E-Shop</h1>
                            <h2>With Working card & pay pal</h2>
                            <a href="#" class="btn btn-danger text-uppercase mt-4">Our Products</a>

                        </div>

                    </div>

                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <span class="ti-angle-left slider-icon"></span>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <span class="ti-angle-right slider-icon"></span>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!--Offer section-->
        <div class="offers">
            <div class="container">
                <div class="row">
                    <!-- Offer box One -->
                    <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
                        <a href="#">
                            <div class="offer-box text-center position-relative">
                                <div class="offer-inner">
                                    <div class="offer-image position-relative overflow-hidden">
                                        <img src="./assets/images/offer1.jpg" alt="offers" class="img-fluid">
                                        <div class="offer-overlay"></div>

                                    </div>
                                    <div class="offer-info">
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">Sale 30%</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                            <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </div>
                    <!-- offer box Two -->
                    <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4 d-flex flex-column justify-content-between">
                        <a href="#">
                            <div class="offer-box text-center position-relative mb-4 mb-sm-0 mb-lg-0">
                                <div class="offer-inner">
                                    <div class="offer-image position-relative overflow-hidden">
                                        <img src="./assets/images/offer2.jpg" alt="offers" class="img-fluid">
                                        <div class="offer-overlay"></div>

                                    </div>
                                    <div class="offer-info">
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">Sale 70%</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                            <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </a>
                        <a href="#">
                            <div class="offer-box text-center position-relative ">
                                <div class="offer-inner">
                                    <div class="offer-image position-relative overflow-hidden">
                                        <img src="./assets/images/offer3.jpg" alt="offers" class="img-fluid">
                                        <div class="offer-overlay"></div>

                                    </div>
                                    <div class="offer-info">
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">Sale 50%</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                            <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </div>
                    <!-- offer Box Three -->
                    <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
                        <a href="#">
                            <div class="offer-box text-center position-relative">
                                <div class="offer-inner">
                                    <div class="offer-image position-relative overflow-hidden">
                                        <img src="./assets/images/offer4.jpg" alt="offers" class="img-fluid">
                                        <div class="offer-overlay"></div>

                                    </div>
                                    <div class="offer-info">
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">Sale 25%</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                            <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Product section -->
    <section id="products" class="products">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headline text-center mb-5">
                        <h2 class="pb-3 position-relative d-inline-block">Featured Products</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6  col-lg-4">
                    <a href="#" class="d-block text-center mb-4">
                        <div class="product-list">
                            <div class="product-image position-relative">
                                <span class="sale">Sale</span>
                                <img src="./assets/images/p1.jpg" alt="products" class="img-fluid product-image-first">
                                <img src="./assets/images/p3.jpg" alt="products" class="img-fluid product-image-secondary">


                            </div>
                            <div class="product-name pt-3">
                                <h3 class="text-capitalize">Winter Long Sleeve Black White</h3>
                                <p class="mb-0 amount">$400.00 <del>$580.00</del></p>
                                <div class="py-1">
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                </div>
                                <button type="button" class="add_to_card"> Add To Card</button>

                            </div>
                        </div>
                    </a>
                </div>

                <!-- card -->
                <div class="col-sm-6  col-lg-4">
                    <a href="#" class="d-block text-center mb-4">
                        <div class="product-list">
                            <div class="product-image position-relative">
                                <!-- <span class="sale">Sale</span> -->
                                <img src="./assets/images/p1.jpg" alt="products" class="img-fluid product-image-first">
                                <img src="./assets/images/p3.jpg" alt="products" class="img-fluid product-image-secondary">


                            </div>
                            <div class="product-name pt-3">
                                <h3 class="text-capitalize">Winter Long Sleeve Black White</h3>
                                <p class="mb-0 amount">$300.00 <del>$480.00</del></p>
                                <div class="py-1">
                                    <span class="ti-star active"></span>
                                    <span class="ti-star active"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                </div>
                                <button type="button" class="add_to_card"> Add To Card</button>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6  col-lg-4">
                    <a href="#" class="d-block text-center mb-4">
                        <div class="product-list">
                            <div class="product-image position-relative">
                                <!-- <span class="sale">Sale</span> -->
                                <img src="./assets/images/p1.jpg" alt="products" class="img-fluid product-image-first">
                                <img src="./assets/images/p3.jpg" alt="products" class="img-fluid product-image-secondary">


                            </div>
                            <div class="product-name pt-3">
                                <h3 class="text-capitalize">Winter Long Sleeve Black White</h3>
                                <p class="mb-0 amount">$400.00 <del>$580.00</del></p>
                                <div class="py-1">
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                </div>
                                <button type="button" class="add_to_card"> Add To Card</button>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6  col-lg-4">
                    <a href="#" class="d-block text-center mb-4">
                        <div class="product-list">
                            <div class="product-image position-relative">
                                <!-- <span class="sale">Sale</span> -->
                                <img src="./assets/images/p1.jpg" alt="products" class="img-fluid product-image-first">
                                <img src="./assets/images/p3.jpg" alt="products" class="img-fluid product-image-secondary">


                            </div>
                            <div class="product-name pt-3">
                                <h3 class="text-capitalize">Winter Long Sleeve Black White</h3>
                                <p class="mb-0 amount">$400.00 <del>$580.00</del></p>
                                <div class="py-1">
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                </div>
                                <button type="button" class="add_to_card"> Add To Card</button>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6  col-lg-4">
                    <a href="#" class="d-block text-center mb-4">
                        <div class="product-list">
                            <div class="product-image position-relative">
                                <!-- <span class="sale">Sale</span> -->
                                <img src="./assets/images/p1.jpg" alt="products" class="img-fluid product-image-first">
                                <img src="./assets/images/p3.jpg" alt="products" class="img-fluid product-image-secondary">


                            </div>
                            <div class="product-name pt-3">
                                <h3 class="text-capitalize">Winter Long Sleeve Black White</h3>
                                <p class="mb-0 amount">$400.00 <del>$580.00</del></p>
                                <div class="py-1">
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                </div>
                                <button type="button" class="add_to_card"> Add To Card</button>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6  col-lg-4">
                    <a href="#" class="d-block text-center mb-4">
                        <div class="product-list">
                            <div class="product-image position-relative">
                                <!-- <span class="sale">Sale</span> -->
                                <img src="./assets/images/p1.jpg" alt="products" class="img-fluid product-image-first">
                                <img src="./assets/images/p3.jpg" alt="products" class="img-fluid product-image-secondary">


                            </div>
                            <div class="product-name pt-3">
                                <h3 class="text-capitalize">Winter Long Sleeve Black White</h3>
                                <p class="mb-0 amount">$400.00 <del>$580.00</del></p>
                                <div class="py-1">
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                    <span class="ti-star"></span>
                                </div>
                                <button type="button" class="add_to_card"> Add To Card</button>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Up to 75% Off -->
            <div class="overflow-hidden my-5">
                <div class="row">
                    <div class="col-sm-12 up_to_off">
                        <img src="./assets/images/lg.jpg" alt="offers" class="img-fluid w-100">
                        <div class="up_to_content">
                            <h2>Up To 75% Off SpringSale!</h2>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <!-- Special section -->
    <section id="special" class="special">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headline text-center mb-5">
                        <h2 class="pb-3 position-relative d-inline-block">Summer Sale</h2>

                    </div>
                </div>
                <div class="col-sm-12 col-lg-7 text-center text-lg-start">
                    <div class="countdown-container">
                        <h2 class="text-uppercase">Sexy Women Floral Embroidery</h2>
                        <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aliquam illum quas facilis aperiam consequatur non impedit,
                            consequuntur maxime laudantium, eaque delectus? Sequi
                            officia accusantium animi dolorum non asperiores repellat dicta?
                        </p>
                        <ul class="list-unstyled countdown-counter">
                            <li><span class="fs-1 d-block" id="days">00</span>Days</li>
                            <li><span class="fs-1 d-block" id="hours">00</span>Hr</li>
                            <li><span class="fs-1 d-block" id="min">00</span>Min</li>
                            <li><span class="fs-1 d-block" id="sec">00</span>Sec</li>

                        </ul>
                        <span class="countdown-price h3 d-block mb-4">$420.00 <del>$670.00</del></span>
                        <button type="button" class="btn btn-danger">Add To Cart</button>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-5">
                    <div class="special-img position-relative">
                        <span class="sale">Sale</span>
                        <img src="./assets/images/p7.jpg" alt="products" class="img-fluid">

                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Testimonial Section -->

    <section id="testimonial" class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headline text-center mb-5">
                        <h2 class="pb-3 position-relative d-inline-block">Testimonials</h2>

                    </div>
                </div>
                <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
                    <div id="carouselExampleCaptionsTwo" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptionsTwo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="carouselExampleCaptionsTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-wrapper">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="./assets/images/user.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="username">
                                            <h3>Martin Johe, Co-Founder / CEO</h3>
                                            <span>Fastcompany ltd.</span>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                Expedita eos dolorem ut quibusdam ab, harum quos,
                                                officiis ex vel pariatur sequi reprehenderit recusandae velit dicta?
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-wrapper">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="./assets/images/user2.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="username">
                                            <h3>Martin Johe, Co-Founder / CEO</h3>
                                            <span>Fastcompany ltd.</span>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                Expedita eos dolorem ut quibusdam ab, harum quos,
                                                officiis ex vel pariatur sequi reprehenderit recusandae velit dicta?
                                            </p>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionsTwo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true">
                                <span class="ti-angle-left slider-icon"></span>
                            </span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptionsTwo" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true">
                                <span class="ti-angle-right slider-icon"></span>
                            </span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact">
            <div class="container">
                <div class="mb-5 text-center">
                    <h5>Let's Start a Conversation</h5>
                    <h2 class="fw-bold">Contact Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <h4 class="fw-bold">Contact Info</h4>
                        <ul class="info list-unstyled">
                            <li class="d-flex align-items-center">
                                <span class="pe-3 ti-location-pin fs-5"></span>
                                <p><a href="#">Raushan Singh.</a></p>

                            </li>
                            <li class="d-flex align-items-center">
                                <span class="pe-3 ti-mobile fs-5"></span>
                                <p><a href="#">+91 8051120005</a></p>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="pe-3 ti-envelope fs-5"></span>
                                <p><a href="#">ssinghraushan@gmail.com</a></p>
                            </li>

                        </ul>

                    </div>
                    <div class="col-lg-7 col-md-7 pt-lg-0 pt-md-0 pt-4">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Id">
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="textarea" name="message" id="message" cols="30" rows="4" placeholder="Enter your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-danger"><span class="ti-rocket pe-2 fs-5"></span>Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Footer Section -->

    <footer>
        <div class="p-3 copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 p-1 p-lg text-center text-lg-start">
                        <p class="my-0">copyright@2023 <a href="#">E-Shop</a>All Right Reserved</p>

                    </div>
                    <div class="col-12 col-lg-6 p-1 p-lg-3 text-center text-lg-end">
                        <p>Desined by <a href="#" target="_blank">Raushan</a></p>

                    </div>
                </div>
            </div>

        </div>
    </footer>

    <!-- Scrool Back To Top -->
    <div id="scrollUp" title="Scroll TO Top">
        <a href="#home"><span class="ti-arrow-up fs-4 text-white"></span></a>

    </div>

    <script src="./assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>