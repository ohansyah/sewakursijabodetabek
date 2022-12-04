<?php
// load const data
include 'data.php';
$id = $_GET['id'];
$category = $_GET['category'];
$product = getProduct($products, $id, $category);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Kami menyediakan jasa persewaan furniture, kursi, sofa, meja dan masih banyak lagi. Untuk menyewa produk kami Anda dapat menghubungi kami di 082125105779." />
    <meta name="keywords" content="sewa sofa jabodetabek, sewa meja jabodetabek, sewa perlengkapan event jabodetabek, Sewa Furniture di Area Jabodetabek, Sewa Kursi, Sofa, atau Perabot Lainnya Di Sekitar Jabodetabek, Sewa Kursi Terbaik Jabodetabek, Sewa Kursi Jabodetabek, Sewa Kursi Jakarta, Sewa Kursi Pamulang, Sewa Kursi Depok, Sewa Kursi Bogor, Kursi Terbaik untuk Disewakan di Jakarta" />

    <title>Sewa Kursi Jabodetabek - Produk <?=$product["heading"]?> </title>
    <?php include 'content/header-script.php';?>
</head>

<body id="page-top" data-aos="fade-in" data-aos-duration="50">
    <?php include 'content/navigation.php';?>
    <section class="page-section">
        <div class="container mt-5">

            <!--================Single Product Area =================-->
            <div class="product_image_area">
                <div class="row s_product_inner">

                    <div class="col-lg-6 ">
                        <div id="productImages" class="carousel slide" data-ride="carousel">
                            <!-- CAROUSEL WITH INDICATOR -->
                            <ol class="carousel-indicators">
                                <?php for ($i = 0; $i < count($product['images']); $i++): ?>
                                    <li data-target="#productImages" data-slide-to="<?=$i?>" class="<?=$i == 0 ? 'active' : ''?>"></li>
                                <?php endfor;?>
                            </ol>

                            <!-- CAROUSEL IMAGES -->
                            <div class="carousel-inner">
                                <?php for ($i = 0; $i < count($product['images']); $i++): ?>
                                    <div class="carousel-item <?=$i == 0 ? 'active' : ''?>">
                                        <img class="d-block w-100" src="<?=$product['images'][$i]?>">
                                    </div>
                                <?php endfor;?>
                            </div>

                            <!-- CAROUSEL NAVIGATOR -->
                            <a class="carousel-control-prev" href="#productImages" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#productImages" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1 mt-5 mb-5">
                        <div class="s_product_text">
                            <h3><?=$product["heading"]?></h3>
                            <h2><?=$product["subheading"]?></h2>
                            
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item" aria-current="page">Kategori</li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href=<?=$baseURL . '/categories.php?category=' . $category?>><b><?=ucfirst($category)?></b></a>
                                    </li>
                                </ol>
                            </nav>
                            <div class="card_area d-flex align-items-center">
                                <a class="btn btn-primary" href="<?=$WAme?>"><i class="fab fa-whatsapp"></i> Hubungi Kami</a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!--================End Single Product Area =================-->

        </div>
    </section>

    <?php include 'content/footer.php';?>
    <?php include 'content/script.php';?>

</body>

</html>
