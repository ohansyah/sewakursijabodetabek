<?php

$isProd = true;
$baseURL = "https://sewakursijabodetabek.com/";
if (!$isProd) {
    $baseURL = "http://localhost/sewakursijabodetabek";
}

// web data
$address1 = "Jl. Alam Segar no No.2, Bambu Apus Kec";
$address2 = "Pamulang, Kota Tangerang Selatan, Banten 15415";
$phone = "+6282125105779";
$WAme = "https://wa.me/+6282125105779";
$email = "sewakursijabodetabek@gmail.com";
$maps = "https://goo.gl/maps/RizeC1YfUNe1UgRb6";
$description = "Sewa Kursi Event Jabodetabek menyediakan jasa persewaan furniture, kursi, sofa, meja dan masih banyak lagi. Untuk menyewa produk kami Anda dapat menghubungi kami di 082125105779.";

// products
$category = isset($_GET['category']) ? $_GET['category'] : 'kursi';
$products = [
    "kursi" => [
        [
            "id" => 1,
            "heading" => "Kursi Arm Chair",
            "subheading" => "Rp.300.000 / pcs",
            "image" => "assets/img/product/kursi/kursi1-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi1-400x400.png",
                "assets/img/gallery/kursi1-event1/kursi1-event1 (1).jpg",
                "assets/img/gallery/kursi1-event1/kursi1-event1 (2).jpg",
                "assets/img/gallery/kursi1-event1/kursi1-event1 (3).jpg",
                "assets/img/gallery/kursi1-event1/kursi1-event1 (4).jpg",
            ],
        ], [
            "id" => 2,
            "heading" => "Kursi Millenial / Scremble",
            "subheading" => "Rp.100.000 / pcs",
            "image" => "assets/img/product/kursi/millenial-400x400.png",
            "images" => [
                "assets/img/product/kursi/millenial-400x400.png",
                "assets/img/gallery/kursi-millenial-event/millenial1.jpg",
                "assets/img/gallery/kursi-millenial-event/millenial2.jpg",
                "assets/img/gallery/kursi-millenial-event/millenial3.jpg",
                "assets/img/gallery/kursi-millenial-event/millenial4.jpg",
                "assets/img/gallery/kursi-millenial-event/millenial5.jpg",
                "assets/img/gallery/kursi-millenial-event/millenial6.jpg",
            ],
        ],
    ],
    "sofa" => [
        [
            "id" => 1,
            "heading" => "Sofa Single",
            "subheading" => "Rp.200.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-single1-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-single1-400x400.png",
                "assets/img/gallery/sofa-single-event/sofa-single-1.jpg",
                "assets/img/gallery/sofa-single-event/sofa-single-2.jpg",
                "assets/img/gallery/sofa-single-event/sofa-single-3.jpg",
                "assets/img/gallery/sofa-single-event/sofa-single-4.jpg",
            ],
        ],
    ],
];

/**
 * Get product based on id and category
 */
function getProduct($products, $id, $category)
{
    $key = array_search($id, array_column(json_decode(json_encode($products[$category]), true), 'id'));
    return $products[$category][$key];
}
