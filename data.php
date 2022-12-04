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
$selected = isset($_GET['category']) ? $_GET['category'] : 'kursi';
$products = [
    "kursi" => [
        [
            "heading" => "Kursi Event 1",
            "subheading" => "Kursi Event 1",
            "image" => "assets/img/product/kursi/kursi1-400x400.png",
        ],
        [
            "heading" => "Kursi Event 2",
            "subheading" => "Kursi Event 2",
            "image" => "assets/img/product/kursi/kursi1-400x400.png",
        ],
        [
            "heading" => "Kursi Event 3",
            "subheading" => "Kursi Event 3",
            "image" => "assets/img/product/kursi/kursi1-400x400.png",
        ],
        [
            "heading" => "Kursi Event 4",
            "subheading" => "Kursi Event 4",
            "image" => "assets/img/product/kursi/kursi1-400x400.png",
        ]
    ],
];