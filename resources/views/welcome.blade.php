<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="../public/css/style-old.css"> -->
        <link rel="stylesheet" href="css/app.css">


        <title>Portfolio</title>
    </head>

    <body>
    <!-- Début du header -->
    <header id="header" class="bg-header overlay-light">
        <!-- début de navigation -->
        <nav>
        <!-- Logo -->
        <div class="logo">
            <a href="#">
            </a>
            <img src="./img/logo-dark.png" alt="logo">
            </a>
        </div>
        <!-- Fin logo -->

        <!-- Début toggle menu -->
        <div class="toggleMenu">
            <div>

            <span class="barre1"></span>
            <span class="barre2"></span>
            <span class="barre3"></span>

            </div>
        </div>
        <!-- fin du toggle menu -->

        <!-- Début menu -->
        <div class="menu">
            <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Pages
                <i class="fas fa-angle-down"></i>
                </a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Service</a>
            </li>
            <li>
                <a href="#">Pricing</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
                <a href="#">Demos</a>
            </li>
            </ul>
        </div>
        <!-- Fin du menu -->
        </nav>
        <!-- fin de navigation -->

        <!-- Début du Carousel -->
        <section id="carousel">
        <div class="header-content">
            <h5>We are awesome creativity</h5>
            <h1>Apollo Creative Digital Agency</h1>
            <a href="#">Start exploring</a>
        </div>
        </section>
        <!-- Fin du carousel -->
    </header>
    <!-- Fin du header -->

    <!-- Début section about -->
    <section id="about" class="section-padding">
        <div class="container text-center mb-60 intro-about soustitre">
        <h1>About Our Studio</h1>
        <p>Eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident.
        </p>
        </div>
        <div class="container text-center mt-5">
        <div class="row">
            <div class="about-table col-md-4 content-box mb-sm-45">
            <i class="fab fa-react"></i>
            <h4>We are Creative</h4>
            <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                justo, fringilla vel
            </p>
            </div>
            <div class="about-table col-md-4 content-box mb-sm-45">
            <i class="fas fa-laptop"></i>
            <h4>We have Developer</h4>
            <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                justo, fringilla vel
            </p>
            </div>
            <div class="about-table col-md-4 content-box mb-sm-45">
            <i class="fas fa-camera-retro"></i>
            <h4>We are Photography</h4>
            <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                justo, fringilla vel
            </p>
            </div>
        </div>

        </div>
    </section>
    <!-- Fin de la section about -->

    <!-- Début de la section skills  -->
    <section id="skills" class="bg-header section-padding">
        <!-- Page triangle -->
        <div class="triangle">

        </div>

        <!-- fin page triangle -->

        <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h1>Our Skills & Values</h1>
            <p>Eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident Nemo ipsam voluptatem quia consequuntur magni.</p>
            <h6 class="upperbold-h6 mt-25">— Jeff Dunham</h6>
            </div>
            <div class="col-md-6">
            <div class="skillbar">
                <h6 class="skillbar-title">Design</h6>
                <div class="skillbar-percent">55%</div>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="skillbar">
                <h6 class="skillbar-title">Development</h6>
                <div class="skillbar-percent">80%</div>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="skillbar">
                <h6 class="skillbar-title">Photography</h6>
                <div class="skillbar-percent">40%</div>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="skillbar">
                <h6 class="skillbar-title">Branding</h6>
                <div class="skillbar-percent">70%</div>
                <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            </div>
        </div>
        </div>


    </section>

    <!-- Fin de la section skills -->

    <!-- Section Our team -->
    <section id="team" class="section-padding container">
        <!-- Titre de la team -->
        <div class="text-center mb-60 intro-about soustitre">
        <h1>Meet Our Team</h1>
        <p>Eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident.
        </p>
        </div>
        <!-- Fin du titre de la team -->

        <!-- Tableau team -->
        <div class="row text-center">
        <div class="col-4">
            <div class="teamvisu">
            <img class="d-block" src="./img/personna/01.jpg" alt="personna1" />
            <div class="teamitem">
                <div class="teamitem-hover">
                <ul class="social">
                    <a href="#">
                    <li>
                        <i class="fab fa-facebook-f"></i>
                    </li>
                    </a>
                    <a href="#">
                    <li>
                        <i class="fab fa-twitter"></i>
                    </li>
                    </a>
                    <a href="#">
                    <li>
                        <i class="fab fa-dribbble"></i>
                    </li>
                    </a>
                    <a href="#">
                    <li>
                        <i class="fab fa-linkedin-in"></i>
                    </li>
                    </a>
                </ul>
                </div>
            </div>
            </div>
            <div class="teaminfo pt-3">
            <h5>Mitchell Kappos</h5>
            <p>Graphic Designer</p>
            </div>
        </div>
        <div class="col-4">
            <div class="teamvisu">
            <img src="./img/personna/02.jpg" alt="personna1" />
            <div class="teamitem">
                <div class="teamitem-hover">
                <ul class="social">
                    <a href="#">
                    <li>
                        <i class="fab fa-facebook-f"></i>
                    </li>
                    </a>
                    <a href="#">
                    <li>
                        <i class="fab fa-twitter"></i>
                    </li>
                    </a>
                    <a href="#">
                    <li>
                        <i class="fab fa-dribbble"></i>
                    </li>
                    </a>
                    <a href="#">
                    <li>
                        <i class="fab fa-linkedin-in"></i>
                    </li>
                    </a>
                </ul>
                </div>
            </div>
            </div>
            <div class="teaminfo pt-3">
            <h5>Leonardo Da Vinci</h5>
            <p>Front-End Dev</p>
            </div>
        </div>
        <div class="col-4">
            <div class="teamvisu">
            <img src="./img/personna/03.jpg" alt="personna1" />
            <div class="teamitem">
                <div class="teamitem-hover">
                <ul class="social">
                    <a href="#">
                    <li>
                        <i class="fab fa-facebook-f"></i>
                    </li>
                    </a>
                    <a href="#">
                    <li>
                        <i class="fab fa-twitter"></i>
                    </li>
                    </a>
                    <a href="#">
                    <li>
                        <i class="fab fa-dribbble"></i>
                    </li>
                    </a>
                    <a href="#">
                    <li>
                        <i class="fab fa-linkedin-in"></i>
                    </li>
                    </a>
                </ul>
                </div>
            </div>
            </div>
            <div class="teaminfo pt-3">
            <h5>John Doe</h5>
            <p>Project Manager</p>
            </div>
        </div>
        </div>
        <!-- Fin du tableau team -->
    </section>
    <!-- Fin de la section Our team -->
    <hr>

    <!-- Features section -->
    <section id="features" class="section-padding container">
        <div class="row">
        <div class="col-md-5 text-left">
            <h1>Amazing Our Features</h1>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
            from 45 BC, making it over 2000 years old Richard McClintock The generated.</p>
            <p>It has roots in a piece of classical Latin literature from classical Latin literature 45 BC, making it over 2000
            years old.</p>

            <div class="row fmedia">
            <div class="col-6">
                <a href="#" class="link fblock-link">
                <div class="border rounded-circle icon text-center d-inline-block">
                    <i class="fab fa-youtube"></i>
                </div>
                <span>WATCH VIDEO</span>
                </a>
            </div>
            <div class="col-6">

                <a href="#" class="link fblock-link">
                <div class="border rounded-circle icon text-center d-inline-block">
                    <i class="fas fa-tags"></i>
                </div>
                <span>KEY FEATURES</span>
                </a>
            </div>
            </div>

        </div>
        <div class="col-md-7 text-right">
            <img src="./img/mockup02.png" alt="">
        </div>
        </div>

    </section>
    <!-- Fin de la features section -->

    <!-- Section COMMENT -->
    <section id="comment" class="section-padding bg-comment">
        <!-- page triangle -->
        <div class="triangle">
        </div>
        <!-- Fin du triangle -->
        <div class="container">
        <div class="clientspace">

            <div class="comment-content text-center text-white">
            <div class="quote-icon rounded-circle mb-3">
                <i class="fas fa-quote-right"></i>
            </div>
            <h2 class="mb-4">What People Say?</h2>
            <p class="mb-4">You can never eat a pet you name. And anyway, I did my first show in the third grade it would be like a ventriloquist.</p>
            <h6 class="upperbold-h6">Alexander Theroux
                <span class="text-regular">( USA )</span>
            </h6>
            </div>


            <div class="pagination">
            <div class="mx-auto w-300 text-center mt-3 mb-40neg">
                <div class="item-active"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>

            </div>
        </div>
        </div>
    </section>
    <!-- Fin du COMMENT -->

    <!-- Début PORTFOLIO -->
    <section id="portfolio" class="section-padding">
        <div class="container text-center intro-about soustitre mb-60">
        <h1>Our Portfolio</h1>
        <p>Eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident
        </p>
        </div>
        <div class="container menu-gallery">

        <ul class="nav nav-pills mb-3 mx-auto" id="pills-tab" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="pills-branding-tab" data-toggle="pill" href="#pills-branding" role="tab" aria-controls="pills-branding"
                aria-selected="false">Branding</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="pills-creative-tab" data-toggle="pill" href="#pills-creative" role="tab" aria-controls="pills-creative"
                aria-selected="false">Creative</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="pills-photo-tab" data-toggle="pill" href="#pills-photo" role="tab" aria-controls="pills-photo" aria-selected="false">Photography</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="pills-coffee-tab" data-toggle="pill" href="#pills-coffee" role="tab" aria-controls="pills-coffee"
                aria-selected="false">Coffee</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
            <div class="row mb-4">
                <div class="col-4">
                <img src="./img/gallery/01.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-4">
                <img src="./img/gallery/02.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-4">
                <img src="./img/gallery/03.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-4">
                <img src="./img/gallery/04.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-4">
                <img src="./img/gallery/05.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-4">
                <img src="./img/gallery/06.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-4">
                <img src="./img/gallery/07.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-4">
                <img src="./img/gallery/08.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-4">
                <img src="./img/gallery/09.jpg" alt="" class="img-fluid">
                </div>
            </div>

            </div>

            <div class="tab-pane fade" id="pills-branding" role="tabpanel" aria-labelledby="pills-branding-tab">
            <div class="row mb-4">
                <div class="col-4">
                <img src="./img/gallery/02.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-4">
                <img src="./img/gallery/03.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-4">
                <img src="./img/gallery/04.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4">
                <img src="./img/gallery/05.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-4">
                <img src="./img/gallery/06.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-4">
                <img src="./img/gallery/08.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4">
                <img src="./img/gallery/09.jpg" alt="" class="img-fluid">
                </div>

            </div>
            </div>

            <div class="tab-pane fade" id="pills-creative" role="tabpanel" aria-labelledby="pills-creative-tab">...</div>
            <div class="tab-pane fade" id="pills-photo" role="tabpanel" aria-labelledby="pills-photo-tab">...</div>
            <div class="tab-pane fade" id="pills-coffee" role="tabpanel" aria-labelledby="pills-coffee-tab">...</div>

        </div>

        </div>
        <div class="container mt-60">
        <div class="row">
            <div class="col-sm-8">
            <h3 class="mb-2">Like our Creative Projects?</h3>
            <p>classical Latin literature from 45 BC, making it over 2000 years old Richard McClintock The generated.</p>
            </div>
            <div class="col-sm-4 btn-portfolio text-right">
            <a class="font-weight-bold" href="#">Start project</a>
            </div>
        </div>
        </div>
    </section>
    <!-- Fin PORTFOLIO -->

    <!-- Section FACTS -->
    <section id="facts" class="section-padding bg-facts">
        <!-- Page triangle -->
        <div class="triangle"></div>
        <!-- fin page triangle -->

        <div class="container">
        <div class="facts-title text-center text-white mb-60">
            <h2>Some Interesting Facts</h2>
        </div>
        <div class="row text-white">
            <div class="col-3 d-flex justify-content-center">
            <div class="icon-counter mr-4">
                <i class="fas fa-trophy"></i>
            </div>
            <div class="counter-content text-left">
                <h1 class="counter-title">103</h1>
                <h5 class="counter-sub-title">awwards</h5>
            </div>
            </div>
            <div class="col-3 d-flex justify-content-center">
            <div class="icon-counter mr-4">
                <i class="fas fa-bullseye"></i>
            </div>
            <div class="counter-content text-left">
                <h1 class="counter-title">256</h1>
                <h5 class="counter-sub-title">clients</h5>
            </div>
            </div>
            <div class="col-3 d-flex justify-content-center">
            <div class="icon-counter mr-4">
                <i class="fas fa-briefcase"></i>
            </div>
            <div class="counter-content text-left">
                <h1 class="counter-title">348</h1>
                <h5 class="counter-sub-title">projects</h5>
            </div>
            </div>
            <div class="col-3 d-flex justify-content-center">
            <div class="icon-counter mr-4">
                <i class="fas fa-male"></i>
            </div>
            <div class="counter-content text-left">
                <h1 class="counter-title">23</h1>
                <h5 class="counter-sub-title">team</h5>
            </div>
            </div>
        </div>
    </section>
    <!-- Fin Section FACTS -->

    <!-- Section IPHONE -->
    <section id="iphone" class="section-padding">
        <div class="container">
        <div class="titleiphone text-center intro-about soustitre mb-60">
            <h1>
            Key Features
            </h1>
        </div>

        <div class="row">
            <div class="col-md-4">
            <div class="features-container">
                <div class="features-content text-right">
                <h4>Bootstrap 4</h4>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                    pede justo.</p>
                </div>
                <div class="features-icons text-right">
                <i class="fas fa-desktop"></i>
                </div>
            </div>
            <div class="features-container">
                <div class="features-content text-right">
                <h4>Clean Code & Design</h4>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                    pede justo.</p>
                </div>
                <div class="features-icons text-right">
                <i class="fas fa-sync-alt"></i>
                </div>
            </div>
            <div class="features-container">
                <div class="features-content text-right">
                <h4>Flexible & Customizable</h4>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                    pede justo.</p>
                </div>
                <div class="features-icons text-right">
                <i class="fas fa-cogs"></i>
                </div>
            </div>
            <div class="features-container">
                <div class="features-content text-right">
                <h4>Unlimited Layouts</h4>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                    pede justo.</p>
                </div>
                <div class="features-icons text-right">
                <i class="fas fa-database"></i>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <img src="./img/mockup01.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4">
            <div class="features-container">
                <div class="features-icons text-left">
                <i class="far fa-comment-alt"></i>
                </div>
                <div class="features-content text-left">
                <h4>Fully Reasponsive</h4>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                    pede justo.</p>
                </div>

            </div>
            <div class="features-container">
                <div class="features-icons text-left">
                <i class="fas fa-tags"></i>
                </div>
                <div class="features-content text-left">
                <h4>Multi Prapose Theme</h4>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                    pede justo.</p>
                </div>

            </div>
            <div class="features-container">
                <div class="features-icons text-left">
                <i class="far fa-file-alt"></i>
                </div>
                <div class="features-content text-left">
                <h4>Well Documented</h4>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                    pede justo.</p>
                </div>

            </div>
            <div class="features-container">
                <div class="features-icons text-left">
                <i class="far fa-comments"></i>
                </div>
                <div class="features-content text-left">
                <h4>Friendly Support</h4>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                    pede justo.</p>
                </div>

            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Fin de IPHONE -->

    <!-- Section CUSTOMERS -->
    <section id="customers" class="bg-customers section-padding">
        <!-- Page triangle -->
        <div class="triangle"></div>
        <!-- fin page triangle -->
        <div class="container">
        <div class="title-customer text-center text-white mb-60">
            <h2 class="mb-60">Truster Consumers</h2>
        </div>

        <div class="customersplace text-center">

            <div class="customer-img mx-2">
            <a href="#">
                <img src="./img/customers/01.png" alt="" class="" height="90px">
            </a>
            </div>
            <div class="customer-img mx-2">
            <a href="#">
                <img src="./img/customers/02.png" alt="" class="" height="90px">
            </a>
            </div>
            <div class="customer-img mx-2">
            <a href="#">
                <img src="./img/customers/03.png" alt="" class="" height="90px">
            </a>
            </div>
            <div class="customer-img mx-2">
            <a href="#">
                <img src="./img/customers/04.png" alt="" class="" height="90px">
            </a>
            </div>
            <div class="customer-img mx-2">
            <a href="#">
                <img src="./img/customers/05.png" alt="" class="" height="90px">
            </a>
            </div>
            <div class="customer-img mx-2">
            <a href="#">
                <img src="./img/customers/06.png" alt="" class="" height="90px">
            </a>
            </div>

        </div>

    </section>
    <!-- Fin section CUSTOMERS -->

    <!-- Section CONTACT -->
    <section id="contact" class="section-padding">
        <div class="container text-center soustitre">
        <h1>Contact Us</h1>
        <p class="mb-60 mx-auto">ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quia tempore rem quis iste saepe in omnis aspernatur
            eligendi asperiores.
        </p>
        <form id="contact-form" class="mb-4" accept-charset="ISO-8859-1">
            <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control form-name" placeholder="YOUR NAME">
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control form-mail" placeholder="EMAIL">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control form-subject" placeholder="SUBJECT">
            </div>
            <div class="col-md-12">
                <textarea class="form-control" rows="7" form="contact-form" placeholder="YOUR MESSAGE"></textarea>
            </div>
            </div>
        </form>
        <div class="col-12">
            <a href="" class="btn-message">Send Message</a>
        </div>

        </div>
    </section>
    <!-- Fin de section CONTACT -->

    <!-- Section ADRESSE -->
    <section id="adresse">
        <div class="container">
        <div class="row">
            <div class="col-md-4">
            <div class="adresse-info text-center">
                <i class="fas fa-mobile mb-4"></i>
                <p>+40 (0) 012 345 6789</p>
            </div>
            </div>
            <div class="col-md-4">
            <div class="adresse-info text-center">
                <i class="fas fa-map-marker-alt mb-4"></i>
                <p class="mx-5">250 South Street Baldwin, NY 11510</p>
            </div>
            </div>
            <div class="col-md-4">
            <div class="adresse-info text-center">
                <i class="far fa-envelope-open mb-4"></i>
                <p>yourname@domain.com</p>
            </div>

            </div>
        </div>
        </div>
    </section>
    <!-- Fin de section ADRESSE -->

    <!-- Section CARTE -->
    <section id="carte">

    </section>
    <!-- Fin de la section CARTE -->

    <!-- FOOTER -->
    <footer id="footer" class="section-padding">
        <div class="container text-center">
        <ul class="social mb-60">
            <a href="#">
            <li>
                <i class="fab fa-facebook-f"></i>
            </li>
            </a>
            <a href="#">
            <li>
                <i class="fab fa-twitter"></i>
            </li>
            </a>
            <a href="#">
            <li>
                <i class="fab fa-linkedin-in"></i>
            </li>
            </a>
            <a href="#">
            <li>
                <i class="fab fa-google-plus-g"></i>
            </li>
            </a>
        </ul>
        <p class="copyright">
            <a href="#" class="copy-link">© Apollo 2016</a>
            <br> All Rights Reserved, Template by
            <a href="http://nileforest.com/" target="_blank">
            <b>nileforest</b>
            </a>
        </p>
        </div>

    </footer>
    <!-- Fin du FOOTER -->

    <!-- Script -->
    <script src="./js/app.js"></script>
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->
    </body>
</html>
