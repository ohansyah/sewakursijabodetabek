<?php

$isProd = false;
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

// products
$category = isset($_GET['category']) ? $_GET['category'] : 'kursi';
$products = [
    "kursi" => [
        [
            "id" => 1,
            "heading" => "Kursi Event 1",
            "subheading" => "Kursi antik kayu dengan ukiran klasik",
            "image" => "assets/img/product/kursi/kursi1-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi1-400x400.png",
                "assets/img/gallery/kursi1-event1/kursi1-event1 (1).jpg",
                "assets/img/gallery/kursi1-event1/kursi1-event1 (2).jpg",
                "assets/img/gallery/kursi1-event1/kursi1-event1 (3).jpg",
                "assets/img/gallery/kursi1-event1/kursi1-event1 (4).jpg"
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