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
$keyword = "Sewa Kursi Event Jabodetabek, sewa sofa jabodetabek, sewa meja jabodetabek, sewa perlengkapan event jabodetabek, Sewa Furniture di Area Jabodetabek, Sewa Kursi, Sofa, atau Perabot Lainnya Di Sekitar Jabodetabek, Sewa Kursi Terbaik Jabodetabek, Sewa Kursi Jabodetabek, Sewa Kursi Jakarta, Sewa Kursi Pamulang, Sewa Kursi Depok, Sewa Kursi Bogor, Kursi Terbaik untuk Disewakan di Jakarta";

// products
$category = isset($_GET['category']) ? $_GET['category'] : 'kursi';
$products = [
    "kursi" => [
        [
            "id" => 1,
            "heading" => "Kursi Arm Chair",
            "subheading" => "Rp.200.000 / pcs",
            "image" => "assets/img/product/kursi/kursi1-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi1-400x400.png",
                "assets/img/gallery/kursi1-event1/kursi1-event1.jpg",
                "assets/img/gallery/kursi1-event1/kursi1-event2.jpg",
                "assets/img/gallery/kursi1-event1/kursi1-event3.jpg",
                "assets/img/gallery/kursi1-event1/kursi1-event4.jpg",
            ],
        ], [
            "id" => 2,
            "heading" => "Kursi Millenial / Scremble",
            "subheading" => "Rp.125.000 / pcs",
            "image" => "assets/img/product/kursi/millenial-400x400.png",
            "images" => [
                "assets/img/product/kursi/millenial-400x400.png",
                "assets/img/gallery/kursi-millenial-event/millenial1.jpg",
                "assets/img/gallery/kursi-millenial-event/millenial2.jpg",
                "assets/img/gallery/kursi-millenial-event/millenial3.jpg",
                "assets/img/gallery/kursi-millenial-event/millenial4.jpg",
                "assets/img/gallery/kursi-millenial-event/millenial6.jpg",
            ],
        ], [
            "id" => 3,
            "heading" => "Kursi Barstool Black",
            "subheading" => "Rp.125.000 / pcs",
            "image" => "assets/img/product/kursi/barstool-black-400x400.png",
            "images" => [
                "assets/img/product/kursi/barstool-black-400x400.png",
                "assets/img/gallery/kursi-barstool-black-event/barstool1.jpg",
                "assets/img/gallery/kursi-barstool-black-event/barstool2.jpg",
                "assets/img/gallery/kursi-barstool-black-event/barstool3.jpg",
                "assets/img/gallery/kursi-barstool-black-event/barstool4.jpg",
                "assets/img/gallery/kursi-barstool-black-event/barstool5.jpg",
            ],
        ], [
            "id" => 4,
            "heading" => "Kursi Barstool White",
            "subheading" => "Rp.125.000 / pcs",
            "image" => "assets/img/product/kursi/barstool-white-400x400.png",
            "images" => [
                "assets/img/product/kursi/barstool-white-400x400.png",
                "assets/img/gallery/kursi-barstool-white-event/barstool1.jpg",
                "assets/img/gallery/kursi-barstool-white-event/barstool2.jpg",
                "assets/img/gallery/kursi-barstool-white-event/barstool3.jpg",
                "assets/img/gallery/kursi-barstool-white-event/barstool4.jpg",
                "assets/img/gallery/kursi-barstool-white-event/barstool5.jpg",
            ],
        ], [
            "id" => 5,
            "heading" => "Kursi Payung Taman / Parasol",
            "subheading" => "Rp.550.000 / pcs",
            "image" => "assets/img/product/kursi/payung-400x400.png",
            "images" => [
                "assets/img/product/kursi/payung-400x400.png",
                "assets/img/gallery/kursi-payung-event/payung1.jpg",
                "assets/img/gallery/kursi-payung-event/payung2.jpg",
                "assets/img/gallery/kursi-payung-event/payung3.jpg",
                "assets/img/gallery/kursi-payung-event/payung4.jpg",
                "assets/img/gallery/kursi-payung-event/payung5.jpg",
                "assets/img/gallery/kursi-payung-event/payung6.jpg",
            ],
        ],
    ],
    "sofa" => [
        [
            "id" => 1,
            "heading" => "Sofa Single",
            "subheading" => "Rp.225.000 / pcs",
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
