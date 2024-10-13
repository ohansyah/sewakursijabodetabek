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

// Limit load product each category
$limitPerCategory = 6;

// products
$category = isset($_GET['category']) ? $_GET['category'] : 'kursi';
$products = [
    "kursi" => [
        [
            "id" => 1,
            "heading" => "Kursi Arm Chair",
            "subheading" => "Rp.175.000 / pcs",
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
            "subheading" => "Rp.45.000 / pcs",
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
            "subheading" => "Rp.75.000 / pcs",
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
            "subheading" => "Rp.75.000 / pcs",
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
            "subheading" => "Rp.450.000 / pcs",
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
        ], [
            "id" => 6,
            "heading" => "Kursi Tiffany Akrilik",
            "subheading" => "Rp.60.000 / pcs",
            "image" => "assets/img/product/kursi/kursi-tiffany-akrilik-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi-tiffany-akrilik-400x400.png",
                "assets/img/gallery/kursi-tiffany-akrilik/kursi-tiffany-akrilik1.jpg",
                "assets/img/gallery/kursi-tiffany-akrilik/kursi-tiffany-akrilik2.jpg",
                "assets/img/gallery/kursi-tiffany-akrilik/kursi-tiffany-akrilik3.jpg",
                "assets/img/gallery/kursi-tiffany-akrilik/kursi-tiffany-akrilik4.jpg",
            ],
        ], [
            "id" => 7,
            "heading" => "Kursi Tiffany Putih",
            "subheading" => "Rp.35.000 / pcs",
            "image" => "assets/img/product/kursi/kursi-tiffany-putih-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi-tiffany-putih-400x400.png",
                "assets/img/gallery/kursi-tiffany-putih/kursi-tiffany-putih1.jpg",
                "assets/img/gallery/kursi-tiffany-putih/kursi-tiffany-putih2.jpg",
                "assets/img/gallery/kursi-tiffany-putih/kursi-tiffany-putih3.jpg",
                "assets/img/gallery/kursi-tiffany-putih/kursi-tiffany-putih4.jpg",
            ],
        ], [
            "id" => 8,
            "heading" => "Kursi Tiffany Gold",
            "subheading" => "Rp.35.000 / pcs",
            "image" => "assets/img/product/kursi/kursi-tiffany-gold-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi-tiffany-gold-400x400.png",
                "assets/img/gallery/kursi-tiffany-gold/kursi-tiffany-gold1.jpg",
                "assets/img/gallery/kursi-tiffany-gold/kursi-tiffany-gold2.jpg",
                "assets/img/gallery/kursi-tiffany-gold/kursi-tiffany-gold3.jpg",
                "assets/img/gallery/kursi-tiffany-gold/kursi-tiffany-gold4.jpg",
            ],
        ], [
            "id" => 9,
            "heading" => "Kursi Futura Polos",
            "subheading" => "Rp.10.000 / pcs",
            "image" => "assets/img/product/kursi/Futura-polos-400x400.jpg",
            "images" => [
                "assets/img/product/kursi/Futura-polos-400x400.jpg",
                "assets/img/gallery/kursi-futura/Futura1.jpg",
            ],
        ], [
            "id" => 10,
            "heading" => "Kursi Futura Cover",
            "subheading" => "Rp.15.000 / pcs",
            "image" => "assets/img/product/kursi/Futura-cover-400x400.png",
            "images" => [
                "assets/img/product/kursi/Futura-cover-400x400.png",
                "assets/img/gallery/kursi-futura/Futura2.png",
            ],
        ], [
            "id" => 11,
            "heading" => "Kursi Futura Cover Dan Pita",
            "subheading" => "Rp.17.500 / pcs",
            "image" => "assets/img/product/kursi/Futura-cover-dan-pita-400x400.png",
            "images" => [
                "assets/img/product/kursi/Futura-cover-dan-pita-400x400.png",
            ],
        ], [
            "id" => 12,
            "heading" => "Kursi Bakso Hitam",
            "subheading" => "Rp.25.000 / pcs",
            "image" => "assets/img/product/kursi/kursi-bakso-hitam-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi-bakso-hitam-400x400.png",
            ],
        ], [
            "id" => 13,
            "heading" => "Kursi Bakso Putih",
            "subheading" => "Rp.25.000 / pcs",
            "image" => "assets/img/product/kursi/kursi-bakso-putih-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi-bakso-putih-400x400.png",
            ],
        ], [
            "id" => 14,
            "heading" => "Kursi Crosback",
            "subheading" => "Rp.40.000 / pcs",
            "image" => "assets/img/product/kursi/kursi-crosback-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi-crosback-400x400.png",
            ],
        ], [
            "id" => 15,
            "heading" => "Kursi Kuliah",
            "subheading" => "Rp.25.000 / pcs",
            "image" => "assets/img/product/kursi/kursi-kuliah-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi-kuliah-400x400.png",
            ],
        ], [
            "id" => 16,
            "heading" => "Kursi Betawi",
            "subheading" => "Rp.125.000 / pcs",
            "image" => "assets/img/product/kursi/kursi-betawi-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi-betawi-400x400.png",
            ],
        ], [
            "id" => 17,
            "heading" => "Kursi Puff Kayu",
            "subheading" => "Rp.75.000 / pcs",
            "image" => "assets/img/product/kursi/kursi-puff-kayu-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi-puff-kayu-400x400.png",
            ],
        ], [
            "id" => 18,
            "heading" => "Kursi Barstool Sandaran",
            "subheading" => "Rp.125.000 / pcs",
            "image" => "assets/img/product/kursi/kursi-barstool-sandaran-400x400.png",
            "images" => [
                "assets/img/product/kursi/kursi-barstool-sandaran-400x400.png",
            ],
        ],  [
            "id" => 19,
            "heading" => "Set Kursi Anak",
            "subheading" => "Rp.150.000 / pcs",
            "image" => "assets/img/product/kursi/set-kursi-anak-400x400.png",
            "images" => [
                "assets/img/product/kursi/set-kursi-anak-400x400.png",
            ],
        ], [
            "id" => 20,
            "heading" => "Kursi Barstool Ceri/Corn",
            "subheading" => "Rp.150.000 / pcs",
            "image" => "assets/img/product/kursi/barstool-ceri-400x400.png",
            "images" => [
                "assets/img/product/kursi/barstool-ceri-400x400.png",
            ],
        ],
    ],
    "sofa" => [
        [
            "id" => 1,
            "heading" => "Sofa Single Putih",
            "subheading" => "Rp.150.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-single1-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-single1-400x400.png",
                "assets/img/gallery/sofa-single-event/sofa-single-1.jpg",
                "assets/img/gallery/sofa-single-event/sofa-single-2.jpg",
                "assets/img/gallery/sofa-single-event/sofa-single-3.jpg",
                "assets/img/gallery/sofa-single-event/sofa-single-4.jpg",
            ],
        ],  [
            "id" => 2,
            "heading" => "Sofa Single Hitam",
            "subheading" => "Rp.150.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-single-hitam-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-single-hitam-400x400.png",
                "assets/img/gallery/sofa-single-hitam-event/sofa-single-hitam-event1.jpg",
                "assets/img/gallery/sofa-single-hitam-event/sofa-single-hitam-event2.jpg",
                "assets/img/gallery/sofa-single-hitam-event/sofa-single-hitam-event3.jpg",
                "assets/img/gallery/sofa-single-hitam-event/sofa-single-hitam-event4.jpg",
                "assets/img/gallery/sofa-single-hitam-event/sofa-single-hitam-event5.jpg",
                "assets/img/gallery/sofa-single-hitam-event/sofa-single-hitam-event6.jpg",
            ],
        ],  [
            "id" => 3,
            "heading" => "Sofa Double Putih",
            "subheading" => "Rp.300.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-double-putih-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-double-putih-400x400.png",
                "assets/img/gallery/sofa-double-putih-event/sofa-double-putih-event1.jpg",
                "assets/img/gallery/sofa-double-putih-event/sofa-double-putih-event2.jpg",
                "assets/img/gallery/sofa-double-putih-event/sofa-double-putih-event3.jpg",
                "assets/img/gallery/sofa-double-putih-event/sofa-double-putih-event4.jpg",
                "assets/img/gallery/sofa-double-putih-event/sofa-double-putih-event5.jpg",
            ],
        ],  [
            "id" => 4,
            "heading" => "Sofa Double Hitam",
            "subheading" => "Rp.300.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-double-hitam-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-double-hitam-400x400.png",
                "assets/img/gallery/sofa-double-hitam-event/sofa-double-hitam-event1.jpg",
                "assets/img/gallery/sofa-double-hitam-event/sofa-double-hitam-event2.jpg",
                "assets/img/gallery/sofa-double-hitam-event/sofa-double-hitam-event3.jpg",
                "assets/img/gallery/sofa-double-hitam-event/sofa-double-hitam-event4.jpg",
            ],
        ],  [
            "id" => 5,
            "heading" => "Sofa Puff Putih / Hitam / Warna",
            "subheading" => "Rp.75.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-puff-hitam-putih-warna-event-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-puff-hitam-putih-warna-event-400x400.png",
                "assets/img/gallery/sofa-puff-hitam-putih-warna-event/sofa-puff-hitam-putih-warna-event1.jpg",
                "assets/img/gallery/sofa-puff-hitam-putih-warna-event/sofa-puff-hitam-putih-warna-event2.jpg",
                "assets/img/gallery/sofa-puff-hitam-putih-warna-event/sofa-puff-hitam-putih-warna-event3.jpg",
                "assets/img/gallery/sofa-puff-hitam-putih-warna-event/sofa-puff-hitam-putih-warna-event4.jpg",
                "assets/img/gallery/sofa-puff-hitam-putih-warna-event/sofa-puff-hitam-putih-warna-event5.jpg",
                "assets/img/gallery/sofa-puff-hitam-putih-warna-event/sofa-puff-hitam-putih-warna-event6.jpg",
                "assets/img/gallery/sofa-puff-hitam-putih-warna-event/sofa-puff-hitam-putih-warna-event7.jpg",
            ],
        ],  [
            "id" => 6,
            "heading" => "Sofa Oval Putih",
            "subheading" => "Rp.175.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-oval-putih-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-oval-putih-400x400.png",
                "assets/img/gallery/sofa-oval-putih-event/sofa-oval-putih-event1.jpg",
                "assets/img/gallery/sofa-oval-putih-event/sofa-oval-putih-event2.jpg",
                "assets/img/gallery/sofa-oval-putih-event/sofa-oval-putih-event3.jpg",
                "assets/img/gallery/sofa-oval-putih-event/sofa-oval-putih-event4.jpg",
                "assets/img/gallery/sofa-oval-putih-event/sofa-oval-putih-event5.jpg",
            ],
        ], [
            "id" => 7,
            "heading" => "Sofa Oval Hitam",
            "subheading" => "Rp.175.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-oval-hitam-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-oval-hitam-400x400.png",
                "assets/img/gallery/sofa-oval-hitam-event/sofa-oval-hitam-event1.png",
                "assets/img/gallery/sofa-oval-hitam-event/sofa-oval-hitam-event2.png",
                "assets/img/gallery/sofa-oval-hitam-event/sofa-oval-hitam-event3.png",
                "assets/img/gallery/sofa-oval-hitam-event/sofa-oval-hitam-event4.png",
                "assets/img/gallery/sofa-oval-hitam-event/sofa-oval-hitam-event5.png",
            ],
        ], [
            "id" => 8,
            "heading" => "Sofa Puff Bulat",
            "subheading" => "Rp.75.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-puff-bulat-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-puff-bulat-400x400.png",
                "assets/img/gallery/sofa-puff-bulat-event/sofa-puff-bulat-event1.jpg",
                "assets/img/gallery/sofa-puff-bulat-event/sofa-puff-bulat-event2.jpg",
                "assets/img/gallery/sofa-puff-bulat-event/sofa-puff-bulat-event3.jpg",
                "assets/img/gallery/sofa-puff-bulat-event/sofa-puff-bulat-event4.jpg",
                "assets/img/gallery/sofa-puff-bulat-event/sofa-puff-bulat-event5.jpg",
                "assets/img/gallery/sofa-puff-bulat-event/sofa-puff-bulat-event6.jpg",
                "assets/img/gallery/sofa-puff-bulat-event/sofa-puff-bulat-event7.jpg",
            ],
        ], [
            "id" => 9,
            "heading" => "Sofa Puff Bulat",
            "subheading" => "Rp.175.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-scandinavian-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-scandinavian-400x400.png",
                "assets/img/gallery/sofa-scandinavian-event/sofa-scandinavian-event1.jpg",
                "assets/img/gallery/sofa-scandinavian-event/sofa-scandinavian-event2.jpg",
                "assets/img/gallery/sofa-scandinavian-event/sofa-scandinavian-event3.jpg",
                "assets/img/gallery/sofa-scandinavian-event/sofa-scandinavian-event4.jpg",
                "assets/img/gallery/sofa-scandinavian-event/sofa-scandinavian-event5.jpg",
            ],
        ], [
            "id" => 10,
            "heading" => "Sofa Queen",
            "subheading" => "Rp.175.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-queen-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-queen-400x400.png",
                "assets/img/gallery/sofa-queen-event/sofa-queen-event1.jpg",
                "assets/img/gallery/sofa-queen-event/sofa-queen-event2.jpg",
                "assets/img/gallery/sofa-queen-event/sofa-queen-event3.jpg",
                "assets/img/gallery/sofa-queen-event/sofa-queen-event4.jpg",
                "assets/img/gallery/sofa-queen-event/sofa-queen-event5.jpg",
                "assets/img/gallery/sofa-queen-event/sofa-queen-event6.jpg",
            ],
        ],[
            "id" => 11,
            "heading" => "Sofa Dapos",
            "subheading" => "Rp.175.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-dapos-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-dapos-400x400.png",
            ],
        ],[
            "id" => 12,
            "heading" => "Sofa Puff Panjang",
            "subheading" => "Rp.125.000 / pcs",
            "image" => "assets/img/product/sofa/Puff-panjang-400x400.png",
            "images" => [
                "assets/img/product/sofa/Puff-panjang-400x400.png",
            ],
        ],[
            "id" => 13,
            "heading" => "Sofa Cafe",
            "subheading" => "Rp.150.000 / pcs",
            "image" => "assets/img/product/sofa/Sofa-Cafe-400x400.png",
            "images" => [
                "assets/img/product/sofa/Sofa-Cafe-400x400.png",
            ],
        ],[
            "id" => 14,
            "heading" => "Sofa Lesehan",
            "subheading" => "Rp.150.000 / pcs",
            "image" => "assets/img/product/sofa/Sofa-lesehan-400x400.png",
            "images" => [
                "assets/img/product/sofa/Sofa-lesehan-400x400.png",
            ],
        ],[
            "id" => 15,
            "heading" => "Sofa Scandiv Crucut",
            "subheading" => "Rp.175.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-scandiv-crucut-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-scandiv-crucut-400x400.png",
                "assets/img/gallery/sofa-scandiv-crucut/scandiv-crucut1.png",
            ],
        ],[
            "id" => 16,
            "heading" => "Sofa Scandiv",
            "subheading" => "Rp.175.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-scandif-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-scandif-400x400.png",
            ],
        ],[
            "id" => 17,
            "heading" => "Sofa Dealing Putar",
            "subheading" => "Rp.175.000 / pcs",
            "image" => "assets/img/product/sofa/sofa-dealing-putar-400x400.png",
            "images" => [
                "assets/img/product/sofa/sofa-dealing-putar-400x400.png",
            ],
        ],
    ],
    
    "meja" => [
        [
            "id" => 1,
            "heading" => "Meja Sofa Putih",
            "subheading" => "Rp.100.000 / pcs",
            "image" => "assets/img/product/meja/meja-sofa-putih-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-sofa-putih-400x400.png",
                "assets/img/gallery/meja-sofa-putih-event/meja-sofa-putih-event1.jpg",
                "assets/img/gallery/meja-sofa-putih-event/meja-sofa-putih-event2.jpg",
                "assets/img/gallery/meja-sofa-putih-event/meja-sofa-putih-event3.jpg",
                "assets/img/gallery/meja-sofa-putih-event/meja-sofa-putih-event4.jpg",
            ],
        ],  [
            "id" => 2,
            "heading" => "Meja Sofa Hitam",
            "subheading" => "Rp.100.000 / pcs",
            "image" => "assets/img/product/meja/meja-sofa-hitam-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-sofa-hitam-400x400.png",
                "assets/img/gallery/meja-sofa-hitam-event/meja-sofa-hitam-event2.jpg",
                "assets/img/gallery/meja-sofa-hitam-event/meja-sofa-hitam-event3.jpg",
                "assets/img/gallery/meja-sofa-hitam-event/meja-sofa-hitam-event4.jpg",
                "assets/img/gallery/meja-sofa-hitam-event/meja-sofa-hitam-event5.jpg",
                "assets/img/gallery/meja-sofa-hitam-event/meja-sofa-hitam-event6.jpg",
            ],
        ],  [
            "id" => 3,
            "heading" => "Meja Milenial Hitam",
            "subheading" => "Rp.100.000 / pcs",
            "image" => "assets/img/product/meja/meja-milineal-hitam-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-milineal-hitam-400x400.png",
            ],
        ],  [
            "id" => 4,
            "heading" => "Meja Taman",
            "subheading" => "Rp.450.000 / pcs",
            "image" => "assets/img/product/meja/meja-taman-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-taman-400x400.png",
            ],
        ],  [
            "id" => 5,
            "heading" => "Meja Cafe",
            "subheading" => "Rp.90.000 / pcs",
            "image" => "assets/img/product/meja/meja-cafe-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-cafe-400x400.png",
            ],
        ],  [
            "id" => 6,
            "heading" => "Meja Betawi",
            "subheading" => "Rp.90.000 / pcs",
            "image" => "assets/img/product/meja/meja-betawi-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-betawi-400x400.png",
            ],
        ],  [
            "id" => 7,
            "heading" => "Meja Sudut Amchair",
            "subheading" => "Rp.60.000 / pcs",
            "image" => "assets/img/product/meja/meja-amchair-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-amchair-400x400.png",
            ],
        ],  [
            "id" => 8,
            "heading" => "Meja Amchair",
            "subheading" => "Rp.75.000 / pcs",
            "image" => "assets/img/product/meja/meja-amchair-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-amchair-400x400.png",
            ],
        ],  [
            "id" => 9,
            "heading" => "Meja Milenial Kaki Pendek",
            "subheading" => "Rp.65.000 / pcs",
            "image" => "assets/img/product/meja/meja-melenial-kaki-pendek-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-melenial-kaki-pendek-400x400.png",
            ],
        ],  [
            "id" => 10,
            "heading" => "Meja Milenial Putih",
            "subheading" => "Rp.100.000 / pcs",
            "image" => "assets/img/product/meja/meja-milineal-putih-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-milineal-putih-400x400.png",
            ],
        ],  [
            "id" => 11,
            "heading" => "Meja Dealing",
            "subheading" => "Rp.125.000 / pcs",
            "image" => "assets/img/product/meja/meja-dealing-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-dealing-400x400.png",
                "assets/img/gallery/meja-dealing/meja-dealing1.png",
                "assets/img/gallery/meja-dealing/meja-dealing2.png",
            ],
        ],  [
            "id" => 12,
            "heading" => "Meja Roundtable 120cm",
            "subheading" => "Rp.95.000 / pcs",
            "image" => "assets/img/product/meja/meja-roundtable-120cm-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-roundtable-120cm-400x400.png",
            ],
        ],  [
            "id" => 13,
            "heading" => "Meja Bar",
            "subheading" => "Rp.100.000 / pcs",
            "image" => "assets/img/product/meja/meja-bar-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-bar-400x400.png",
            ],
        ],  [
            "id" => 14,
            "heading" => "Meja Skirting",
            "subheading" => "Rp.75.000 / pcs",
            "image" => "assets/img/product/meja/meja-skirting-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-skirting-400x400.png",
            ],
        ],  [
            "id" => 15,
            "heading" => "Meja Cafe Kotak",
            "subheading" => "Rp.125.000 / pcs",
            "image" => "assets/img/product/meja/meja-cafe-kotak-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-cafe-kotak-400x400.png",
            ],
        ],  [
            "id" => 16,
            "heading" => "Meja IBM",
            "subheading" => "Rp.125.000 / pcs",
            "image" => "assets/img/product/meja/meja-ibm-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-ibm-400x400.png",
                "assets/img/gallery/meja-ibm/meja-ibm1.png",
            ],
        ],  [
            "id" => 17,
            "heading" => "Meja Roundtable 160cm",
            "subheading" => "Rp.150.000 / pcs",
            "image" => "assets/img/product/meja/meja-roundtable-160cm-400x400.png",
            "images" => [
                "assets/img/product/meja/meja-roundtable-160cm-400x400.png",
                "assets/img/gallery/meja-roundtable-160cm/meja-roundtable-160cm1.png",
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
