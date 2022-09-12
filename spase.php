<?php include 'layout/header.php';
session_start();
include "dbconnect.php";
$prop = $_GET["property"];
$query = "SELECT * FROM property_list WHERE property_id = '" . $prop . "'";

$result = mysqli_query($koneksi, $query);
$property_id = '';
$property_tittle = '';
$property_desc = '';
$property_price = '';
$property_city = '';
$property_type = '';
$property_status = '';
$land_size = '';
$bedroom = '';
$bathroom = '';
$building_size = '';
$facility = '';
$image_link = '';
$agent = '';
$youtube_link = '';
$d_link = '';

while ($row = mysqli_fetch_array($result)) {
    $property_id = $row['property_id'];
    $property_tittle = $row['property_tittle'];
    $property_desc = $row['property_desc'];
    $property_price = $row['property_price'];
    $property_price = $row['property_price'];
    $property_city = $row['property_city'];
    $property_id = $row['property_id'];
    $property_type = $row['property_type'];
    $property_status = $row['property_status'];
    $property_price = $row['property_price'];
    $land_size = $row['land_size'];
    $building_size = $row['building_size'];
    $facility = $row['facility'];
    $image_link = $row['images_link'];
    $agent = $row['agent'];
    $bedroom = $row['bedroom'];
    $bathroom = $row['bathroom'];
    $youtube_link = $row['youtube_link'];
    $d_link = $row['3d_link'];

    $facility = explode(',', $facility);
    $image_link = explode(',', $image_link);
}
?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .mySwiper2 {
        height: 100%;
        width: 100%;
    }

    .mySwiper {
        height: 100%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<?php

use Ajaxray\PHPWatermark\Watermark;

include 'vendor/autoload.php';
?>
<meta name="description" content="<?php echo mb_strimwidth($property_desc, 0, 157, "..."); ?>">
<title><?php echo $property_tittle; ?> | BVR Property</title>
</head>

<body class="bg-gray-200 text-black">
    <?php include 'layout/navbar.php'; ?>
    <div class="mx-auto w-10/12 pt-10">
        <?php include 'layout/search.php'; ?>
        <!-- Swiper JS  -->
        <div class="mb-4" style="height:80vh;">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mt-5 swiper mySwiper2">
                <div class=" swiper-wrapper">
                    <?php
                    foreach ($image_link as $link) {
                        echo  '<div class="swiper-slide">';
                        echo  '<img src="' . $link . '" />';
                        echo  '</div>';
                    }
                    ?>
                </div>
                 <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="h-32 lg:h-40">
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper gap-7">
                    <?php
                    foreach ($image_link as $link) {
                        echo  '<div class="swiper-slide">';
                        echo  '<img src="' . $link . '" />';
                        echo  '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Property -->
        <div class="flex my-3">
            <p class="flex-none pr-6 mb-5 font-bold">PROPERTY DETAIL</p>
            <!-- Line -->
            <svg height="3" class="w-full my-3">
                <line x1="0" y1="0" x2="30000" y2="0" style="stroke:black;stroke-width:3" />
            </svg>
        </div>
        <div class="grid grid-cols-7 gap-5">
            <!-- Property Desc -->
            <div class="col-span-7 lg:col-span-4">
                <div class="">
                    <p class="font-bold mb-3">PROPERTY DESCRIPTION</p>

                    <div class="lg:pr-10">
                        <?php
                        $text = $property_desc;
                        $text = str_replace("\r\n", "\n", $text);

                        // $paragraphs = preg_split("/[\n]{3,}/", $text);
                        // foreach ($paragraphs as $key => $p) {
                        //     $paragraphs[$key] = "<p>" . str_replace("\n", "<br />", $paragraphs[$key]) . "</p>";
                        // }

                        // $text = implode("", $paragraphs);

                        echo $text;
                        ?>
                    </div>
                </div>

            </div>
            <!-- Property Details -->
            <div class="col-span-7 lg:col-span-3 w-full">
                <div>
                    <p class="font-bold mb-3">PROPERTY DETAILS</p>
                    <p class="text-justify"><?php echo $property_tittle; ?></p>
                    <div class="py-1 px-2">
                        <div class="flex w-full">
                            <p class="w-full">Property ID :</p>
                            <p class="w-full font-semibold flex justify-end"><?php echo $property_id; ?></p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Area :</p>
                            <p class="w-full font-semibold flex justify-end"><?php echo $property_city; ?></p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Property Type :</p>
                            <p class="w-full font-semibold flex justify-end"> <?php echo $property_type; ?></p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Building Size :</p>
                            <p class="w-full font-semibold text-right"><?php echo $building_size; ?> Sqm</p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Land Size :</p>
                            <p class="w-full font-semibold flex justify-end"><?php echo $land_size; ?> Sqm</p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Price :</p>
                            <div class="flex justify-end">
                                <p class="matauang pt-4 text-right font-bold">IDR</p>
                                <p id="propdetail" class="p-4 text-right font-bold"><?php echo (number_format($property_price)); ?></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Property Facility -->
            <div class="col-span-7 lg:col-span-4">
                <div class="">
                    <p class="font-bold mb-3">PROPERTY FACILITY</p>
                    <div class="px-3 py-2 grid grid-cols-8 gap-4">
                        <?php
                        //create a key-value pair so you don't have to have an IF statement for each condition
                        $facility_map = [
                            'air_conditioner' => 'fan',
                            'cable_tv' => 'tv',
                            'dining_area' => 'utensils',
                            'electricity' => 'plug',
                            'garage' => 'warehouse',
                            'gazebo' => 'home',
                            'internet' => 'globe',
                            'kitchen' => 'hat-chef',
                            'level' => 'level-up-alt',
                            'pool' => 'swimmer',
                            'security' => 'shield',
                            'storage' => 'box',
                            'washer_or_laundry' => 'washer',
                            'water_resource' => 'water',
                            'wi-fi' => 'wifi',
                            'maid_room' => 'person-booth',
                            'suitable_for_events' => 'flag',
                            'heating' => 'hotjar',
                            'hot_tub' => 'hot-tub'
                        ];

                        foreach ($facility as $fac) {

                            //trim whitespae at the beginning and end, lowercase everything, change spaced to underscores. Easier to look up in array
                            $fac_cleaned = str_replace(' ', '_', trim(strtolower($fac)));

                            //check if key in map exists? If not, print and move to next key
                            if (!array_key_exists($fac_cleaned, $facility_map)) {
                                // echo "Unhandled Key ({$fac_cleaned})<br>";
                                continue;
                            }

                            //grab the value from the $facility_map array
                            $icon = $facility_map[$fac_cleaned];

                        ?>
                            <div class="col-span-4">
                                <div class="flex w-full">
                                    <div class="w-8 text-bvr20"><i class="far fa-<?= $icon ?>"></i></div>
                                    <p><?= $fac ?></p>
                                </div>
                            </div>
                        <?php
                        }

                        ?>

                    </div>
                </div>

            </div>
            <!-- Property Contact -->
            <div class="col-span-7 lg:col-span-3 w-full">
                <div>
                    <p class="font-bold mb-2">PROPERTY CONTACT</p>
                    <p class=""><strong>SALES AGENT:</strong> <?= $agent ?></p>
                    <div class="mt-1 grid grid-cols-5 gap-2">
                        <!-- Share Logo -->
                        <a href="https://www.facebook.com/bali.indonesia.villa.sales/" target="_blank">
                            <div class="col-span-1 h-10 bg-white border-2 border-bvr20">
                                <div class="w-max mx-auto mt-1 h-4">
                                    <i class=" fab fa-facebook-f"></i>
                                </div>
                            </div>
                        </a>
                        <a href="http://www.instagram.com/bvr_property" target="_blank">
                            <div class="col-span-1 h-10 bg-white border-2 border-bvr20">
                                <div class="w-max mx-auto mt-1 h-4">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </div>
                        </a>
                        <a href="/pdfPrint.php?propid=<?=$prop?>" target="_blank">
                            <div class="col-span-1 h-10 bg-white border-2 border-bvr20">
                                <div class="w-max mx-auto mt-1 h-4">
                                    <i class="far fa-file-pdf"></i>
                                </div>
                            </div>
                        </a>
                        <a href="mailto:info@bvrproperty.com">
                            <div class="col-span-1 h-10 bg-white border-2 border-bvr20">
                                <div class="w-max mx-auto mt-1 h-4">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                        </a>
                        <a href="https://www.linkedin.com/company/bvr-property/?originalSubdomain=id" target="_blank">
                            <div class="col-span-1 h-10 bg-white border-2 border-bvr20">
                                <div class="w-max mx-auto mt-1 h-4">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <div class="col-span-1 w-full px-2 py-2 bg-white border-2 border-bvr20">
                            <a href="https://wa.me/628113976689?text=I'm%20interested%20in%20your%20property%20" target="_blank">
                                <div class="w-max m-auto flex">

                                    <i class="px-1 mt-1.5 fab fa-whatsapp fa-lg"></i>
                                    <p class="px-1">Whatsapp</p>
                                </div>
                            </a>
                        </div>
                        <div id="virtual" class="col-span-1 w-full px-2 py-2 bg-white border-2 border-bvr20" target="_blank">
                            <input id="virtualval" type="text" value="<?= $d_link ?>" hidden>
                            <a href="<?= $d_link ?>">
                                <div class="w-max m-auto flex">
                                    <i class="px-1 mt-1.5 fas fa-vr-cardboard fa-lg"></i>
                                    <p class="px-1">Virtual Tour</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Video -->
                    <div id="youtube" class="mt-4">
                        <input id="youtubeval" type="text" value="<?= $youtube_link ?>" hidden>
                        <p class="font-bold mb-4">Property Video</p>
                        <video class="w-full h-auto" controls>
                            <!-- <source src="public/video/properti.mp4#t=0.1" type="video/mp4">
                            Your browser does not support the video tag. -->


                            <iframe width="640" height="360" src="https://www.youtube.com/embed/C_a6ejVvi9c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <!-- PROPERTY LOCATION-->
        <div class="my-8 mb-12 overflow-hidden">
            <div class="flex my-3">
                <p class="flex-none pr-6 font-bold">PROPERTY LOCATION</p>
                <!-- Line -->
                <svg height="3" class="w-full my-3">
                    <line x1="0" y1="0" x2="30000" y2="0" style="stroke:black;stroke-width:3" />
                </svg>
            </div>
            <div>
                <!-- <img src="public/images/gmaps.png" class="w-full h-52 object-cover"> -->
                <div class="mapouter lg:block md:none ">
                    <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" <?php echo 'src="https://maps.google.com/maps?q=' . $property_city . '&t=&z=13&ie=UTF8&iwloc=&output=embed"' ?> frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 282px;
                                width: 1050px;
                            }
                        </style><a href="https://www.embedgooglemap.net"></a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 282px;
                                width: 1050px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
        <!-- NEARBY LOCATION -->
        <div class="my-8 mb-12">
            <div class="flex my-3">
                <p class="flex-none pr-6 font-bold">NEARBY PROPERTY</p>
                <!-- Line -->
                <svg height="3" class="w-full my-3">
                    <line x1="0" y1="0" x2="30000" y2="0" style="stroke:black;stroke-width:3" />
                </svg>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 my-10">
                <!-- Hasil 1 -->
                <?php
                $query1 = "SELECT * FROM property_list WHERE property_live = 'on' AND property_city LIKE '%" . $property_city . "%' LIMIT 3";
                $result1 = mysqli_query($koneksi, $query1);
                $angka = 0;
                while ($row1 = mysqli_fetch_array($result1)) {
                    $image_link2 = '';
                    $image_link1 = '';
                    $image_link1 = explode(',', $row1['images_link']);
                    foreach ($image_link1 as $link1) {
                        $image_link2 = $link1;
                        break;
                    }
                ?>
                    <div class="bg-white filter drop-shadow-lg border-2 hover:border-bvr20 col-span-1">
                        <a href="page-detail?property=<?= $row1['property_id'] ?>" class="">
                            <div class="p-3">
                                <p class="font-semibold"><?= mb_strimwidth($row1['property_tittle'], 0, 30, "..."); ?></p>
                                <p class="text-red-600"> <?= $row1['property_id'];  ?></p>
                            </div>
                            <img class="object-cover h-56 w-full" src="<?= $image_link2; ?>">
                            <div class="ml-auto -mt-48 w-max">
                                <!-- <p class="relative py-1 px-2 text-sm bg-bvr20 text-white">Good Deal</p> -->
                            </div>
                            <div class="-mt-3"></div>
                            <div class="px-4 py-3 grid grid-cols-2 gap-3 mt-48">
                                <div class="flex">
                                    <div class="w-8">
                                        <i class="fas fa-map-marked-alt object-contain w-full h-full pr-2"></i>
                                    </div>
                                    <p class="text-sm h-full my-auto"> <?= $row1['property_city']; ?> </p>
                                </div>
                                <div class="flex">
                                    <i class="pl-1.5 pt-1 fas fa-expand-arrows-alt w-8 pr-2"></i>
                                    <p class="text-sm"><?= $row1['land_size'];  ?> sqm</p>
                                </div>
                                <div class="flex">
                                    <i class="fas fa-home pr-2 w-8"></i>
                                    <p class="text-sm"><?= $row1['property_status'];  ?></p>
                                </div>
                                <div class="flex">
                                    <i <?php if($row1["property_type"] != "Land"){ echo 'class="fas fa-bed pr-2 w-8"'; } ?>></i>
                                    <p class="text-sm"><?= $row1['bedroom'];  ?> <?php if($row1["property_type"] != "Land"){ echo 'Bedroom';} ?></p>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <p class="matauang pt-4 text-right font-bold">IDR</p>
                                <p id="property<?php echo $angka; ?>" class="currencyprop p-4 text-right font-bold"><?php echo (number_format($row1['property_price'])); ?></p>
                            </div>
                        </a>
                    </div>
                <?php
                $angka = $angka + 1;
                }
                ?>

            </div>

        </div>

    </div>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            keyboard: {
                enabled: true,
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>

    <script>
        $(document).ready(function() {
            checkvirtual = $("#virtualval").val();
            if (checkvirtual == '') {
                $("#virtual").addClass("hidden");
            }
            checkyoutube = $("#youtubeval").val();
            if (checkyoutube == '') {
                $("#youtube").addClass("hidden");
            }
            $(".js-select2-multi").select2({
                closeOnSelect: false
            });

            $("#USD").on('click', function() {

                currency = 'USD';
                rubah(currency);
            });

            $("#IDR").on('click', function() {

                currency = 'IDR';
                rubah(currency);
            });

            $("#EUR").on('click', function() {

                currency = 'EUR';
                rubah(currency);
            });

            $("#GBP").on('click', function() {

                currency = 'GBP';
                rubah(currency);
            });

            $("#JPY").on('click', function() {

                currency = 'JPY';
                rubah(currency);
            });

            $("#CHF").on('click', function() {

                currency = 'CHF';
                rubah(currency);
            });

            var idr = [];
            var idrsingle = 0;

            function rubah(curr) {
                var test = [];
                $.ajax({
                    url: 'https://free.currconv.com/api/v7/convert?q=IDR_' + curr + '&compact=ultra&apiKey=1504311b1bcc43b8f45c',
                    method: 'GET',
                    dataType: 'jsonp',
                    success: function(json) {
                        // access the conversion result in json.result
                        if (curr == "IDR") {
                            rate = json.IDR_IDR;
                        }
                        if (curr == "USD") {
                            rate = json.IDR_USD;
                        }
                        if (curr == "EUR") {
                            rate = json.IDR_EUR;
                        }
                        if (curr == "GBP") {
                            rate = json.IDR_GBP;
                        }
                        if (curr == "JPY") {
                            rate = json.IDR_JPY;
                        }
                        if (curr == "CHF") {
                            rate = json.IDR_CHF;
                        }
                        if(idrsingle == 0){
                            arr1 = $("#propdetail").text().split(",").join("");
                            arr1 = parseInt(arr1);
                            idrsingle = arr1;
                            resultnya = arr1 * rate;
                            resultnya = resultnya.toFixed(2);
                            resultnya = addCommas(resultnya);
                            $("#propdetail").text(resultnya);
                        } else {
                            resultnya = idrsingle * rate;
                            resultnya = resultnya.toFixed(2);
                            resultnya = addCommas(resultnya);
                            $("#propdetail").text(resultnya);
                        }
                        if (idr.length == 0) {
                            $(".currencyprop").each(function() {
                                arr = $(this).text().split(",").join("");
                                arr = parseInt(arr);
                                idr.push(arr);
                                arrayres = arr * rate;
                                test.push(arrayres);
                            });
                        } else {
                            $.each(idr, function(a, uang) {
                                arrayres = uang * rate;
                                test.push(arrayres);
                            });
                        }
                        $.each(test, function(i, price) {
                            price = price.toFixed(2);
                            price = addCommas(price);
                            $("#property" + i).text(price);
                        });
                        $(".matauang").text(curr);
                        $("#currencynav").text(curr);
                    }
                });
            }

            function addCommas(nStr) {
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }
        });
    </script>
    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>