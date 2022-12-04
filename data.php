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
$email = "sewakursijabodetabek@gmail.com";

// products
$category = isset($_GET['category']) ? $_GET['category'] : 'kursi';
$products = [
    "kursi" => [
        [
            "id" => 1,
            "heading" => "Kursi Event 1",
            "subheading" => "Kursi antik kayu dengan ukuran klasik",
            "image" => "assets/img/product/kursi/kursi1-400x400.png",
        ]
    ],
];