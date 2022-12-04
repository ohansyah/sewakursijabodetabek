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
    <?php include 'content/header-script.php'; ?>
</head>

<body id="page-top" data-aos="fade-in" data-aos-duration="50">
    <?php include 'content/navigation.php'; ?>
    <section class="page-section bg-light">
        <div class="container mt-5">
            <div class="text-center">
                <h2 class="section-heading text-uppercase" data-aos="zoom-in" data-aos-delay="250">Produk</h2>
            </div>

            <div class="row py-5">
                <?php foreach ($products[$category] as $product): ?>
                    <div class="col-lg-3">
                        <a class="portfolio-link" href="product-detail.php?category=<?=$category.'&id='.$product["id"]?>">
                            <figure class="rounded p-3 bg-white shadow-sm" data-aos="fade-up" data-aos-delay="750">
                                <img src="<?=$product["image"]?>" alt="" class="w-100 card-img-top">
                                <figcaption class="p-4 card-img-bottom">
                                <h2 class="h5 font-weight-bold mb-2 font-italic"><?=$product["heading"]?></h2>
                                <p class="mb-0 text-small text-muted font-italic"><?=$product["subheading"]?></p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

    <?php include 'content/footer.php'; ?>
    <?php include 'content/script.php'; ?>

</body>

</html>
