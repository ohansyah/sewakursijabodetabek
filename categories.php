<?php
    // load const data
    include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Kami menyediakan jasa persewaan furniture, kursi, sofa, meja dan masih banyak lagi. Untuk menyewa produk kami Anda dapat menghubungi kami di 082125105779." />
    <meta name="keywords" content="sewa sofa jabodetabek, sewa meja jabodetabek, sewa perlengkapan event jabodetabek, Sewa Furniture di Area Jabodetabek, Sewa Kursi, Sofa, atau Perabot Lainnya Di Sekitar Jabodetabek, Sewa Kursi Terbaik Jabodetabek, Sewa Kursi Jabodetabek, Sewa Kursi Jakarta, Sewa Kursi Pamulang, Sewa Kursi Depok, Sewa Kursi Bogor, Kursi Terbaik untuk Disewakan di Jakarta" />

    <title>Sewa Kursi Jabodetabek - Produk</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logos/Vector-75x75.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- AOS https://github.com/michalsnik/aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top" data-aos="fade-in" data-aos-duration="50">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="categoryNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?=$baseURL?>"><img src="assets/img/logos/logo-197x75.png"
                    alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?=$baseURL?>/#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?=$baseURL?>/#portfolio">Produk</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?=$baseURL?>/#gallery">Gallery Event</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?=$baseURL?>/#contact">Kontak Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section bg-light">
        <div class="container mt-5">
            <div class="text-center">
                <h2 class="section-heading text-uppercase" data-aos="zoom-in" data-aos-delay="250">Produk</h2>
            </div>

            <div class="row py-5">
                <?php foreach ($products[$selected] as $product): ?>
                    <div class="col-lg-3">
                        <figure class="rounded p-3 bg-white shadow-sm" data-aos="fade-up" data-aos-delay="750">
                            <img src="<?=$product["image"]?>" alt="" class="w-100 card-img-top">
                            <figcaption class="p-4 card-img-bottom">
                            <h2 class="h5 font-weight-bold mb-2 font-italic"><?=$product["heading"]?></h2>
                            <p class="mb-0 text-small text-muted font-italic"><?=$product["subheading"]?></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

    <!-- Contact-->
    <section class="footer-section">
        <!-- Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">
                        <p class="text-muted">
                            <?=$address1?>
                            <?=$address2?>
                        </p>
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-outline-primary btn-social mx-2" target="_blank" href="https://wa.me/+6282125105779"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-primary btn-social mx-2" target="_blank" href="https://www.facebook.com/profile.php?id=100087890723468"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-social mx-2" target="_blank" href="https://www.instagram.com/sewakursijabotabek/"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <p class="text-muted">
                            <?=$phone?>
                            <?=$email?>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 180, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 1000, // values from 0 to 3000, with step 50ms
            // easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            // anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
        });
    </script>
</body>

</html>
