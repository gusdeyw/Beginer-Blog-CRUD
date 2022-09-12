<?php include 'layout/header.php';
?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<?php

use Ajaxray\PHPWatermark\Watermark;

include 'vendor/autoload.php';
?>
<meta name="keywords" content="property blog">
<meta name="description" content="Search our new weekly blogpost, newsletter, and more updates about property in bali.">
<title>Blog</title>
</head>

<body class="bg-gray-200 text-black">
    <?php include 'layout/navbar.php'; ?>
    <div class="mx-auto w-10/12 pt-10">
        <?php include 'layout/search.php'; ?>   
        <!-- Swiper JS  -->
        <!-- Property -->
        <div class="flex my-3">
            <p class="flex-none pr-6 mb-5 font-bold">Blog</p>
            <!-- Line -->
            <svg height="3" class="w-full my-3">
                <line x1="0" y1="0" x2="30000" y2="0" style="stroke:black;stroke-width:3" />
            </svg>
        </div>
        <!-- Blog -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/bvr-appraisal">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://appraisal.bvrgroupasia.com/wp-content/uploads/2022/08/samson-ZGjbiukp_-A-unsplash.jpg"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/bvr-appraisal">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">BVR Appraisal</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">BVR Group Asia was established in 2019 to provide an independent assessment and advisory services ...</p>
                        <a class="text-white  font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/bvr-appraisal" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/10-best-states-in-usa">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://img.wallpapic.com/i8810-639-513/medium/usa-cityscape-city-nature-wallpaper.jpg"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/10-best-states-in-usa">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Explore the 10 Best States</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">America's best states – coming from all over the country – include the ...</p>
                        <a class="text-white  font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/10-best-states-in-usa" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/best-tourist-attractions-in-ubud">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('http://www.bvrproperty.com/wp-content/uploads/2019/05/@jenifersuryaa-300x300.jpg"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/best-tourist-attractions-in-ubud">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">The Best Sunset Locations in Bali</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Bali is very popular in the world of tourism, many foreign guests come ...</p>
                        <a class="text-white  font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="best-tourist-attractions-in-ubud" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/best-tourist-attractions-in-ubud">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('http://www.bvrproperty.com/wp-content/uploads/2022/05/blogpost-9.jpg"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/best-tourist-attractions-in-ubud">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Best Tourist Attractions in Bali</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">The best things to do in Ubud include exploring ancient temples, majestic royal palaces, and green hillsides and rice terraces.</p>
                        <a class="text-white  font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/best-tourist-attractions-in-ubud" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/buying-property-in-bali">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/wp-content/uploads/2022/04/blog12-1024x565.jpg"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/buying-property-in-bali">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Buying property in Bali</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">While promising markets and relaxed regulations are good news for foreigners who are considering buying or leasing a property in Bali Indonesia.</p>
                        <a class="text-white  font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/buying-property-in-bali" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/8-top-rated-schools-in-bali">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/wp-content/uploads/2022/04/blog11-1024x640.jpg"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/8-top-rated-schools-in-bali">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">8 Top Rated Schools in Bali</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">The language of instruction for all subjects is English, except for Indonesian Studies, which will be conducted in the Indonesian language.</p>
                        <a class="text-white  font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/8-top-rated-schools-in-bali" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/most-popular-areas-in-bali">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/wp-content/uploads/2022/04/blog10.jpg"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/most-popular-areas-in-bali">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Most Popular areas in Bali</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Many commercial villas are built in the area making it easy for tourist to walk out their front door and find a plethora of new and exciting things to explore.</p>
                        <a class="text-white  font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/most-popular-areas-in-bali" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/top-10-cities-to-visit-in-europe">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/wp-content/uploads/2022/01/london.png');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/top-10-cities-to-visit-in-europe">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Top 10 Cities to visit in Europe</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Filled with historic and exciting cities, Europe is a popular destination for tour holidays. The best cities to visit in Europe combine magical architecture, historic sights and a lively cultural.</p>
                        <a class="text-white  font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/top-10-cities-to-visit-in-europe" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto h-full">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/top-10-things-to-do-in-germany">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog2german.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/top-10-things-to-do-in-germany">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Top 10 Things to do in Germany</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Each part of Germany is different, and there are thousands of memorable places to visit. Are you interested in breath-taking natural attractions.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/top-10-things-to-do-in-germany" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/top-10-destinations-in-australia">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog3australia.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/top-10-destinations-in-australia">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Top 10 Destinations in Australia</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">The wilderness of Kangaroo Island, the dense rainforest of the Daintree, the wineries of Margaret River and the beaches of the Gold Coast are some of Australia’s biggest tourist drawcards.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/top-10-destinations-in-australia" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/top-best-places-to-visit-in-new-zealand">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog4.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/top-best-places-to-visit-in-new-zealand">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Top Best Places to Visit in New Zealand</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">New Zealand comprised of two main islands, North Island and South Island. New Zealand is an incredible destination to discover.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/top-best-places-to-visit-in-new-zealand" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/must-see-in-singapore">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog5.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/must-see-in-singapore">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Must see in Singapore</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Singapore is one of the great cities of the world, with its blend of Asian and European cultures. Founded as a British trading colony in 1819, since independence it has become one of the world’s most prosperous city states.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/must-see-in-singapore" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/turkey-blog">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog6turkey.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/turkey-blog">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Turkey</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Renowned as one of the most beautiful buildings in the world, the spellbinding Byzantine glory of the Hagia Sophia Mosque (Aya Sofya).</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/turkey-blog" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/8-restaurant-terbaik-di-canggu">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog6turkey.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/8-restaurant-terbaik-di-canggu">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">8 Restaurant Terbaik di Canggu, Bali</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Canggu dikenal karena memiliki pantai dengan ombak yang bagus untuk berselancar, café dan restoran dengan makanan yang lezat dengan pemandangan sunset.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/8-restaurant-terbaik-di-canggu" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/keuntungan-digital-marketing-dalam-industri-hospitality">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blogindo2.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/keuntungan-digital-marketing-dalam-industri-hospitality">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Keuntungan Digital Marketing dalam Industri Hospitality</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Daya tarik di digital marketing yaitu tampilan pada toko (market store) yang dapat dibuat sekreatif mungkin dan desainnya tidak terbatas.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/keuntungan-digital-marketing-dalam-industri-hospitality" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/uk-tour">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog7.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/uk-tour">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">UK Tour</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Consisting of England, Scotland, Wales, and Northern Ireland, the United Kingdom (UK) has long been one of Europe's most popular tourist destinations.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/uk-tour" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/something-special-about-netherlands">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog8.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/something-special-about-netherlands">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Something special about Netherlands</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Welcome to the Netherlands. Offbeat and open-minded. A country full of beautiful nature, vibrant cities and cozy villages.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/something-special-about-netherlands" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/best-places-in-dubai">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog9.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/best-places-in-dubai">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Best Places in Dubai</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Glitzy Dubai is the United Arab Emirates' holiday hot spot.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/best-places-in-dubai" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/balinese-traditions-that-will-surprise-you">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog14.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/balinese-traditions-that-will-surprise-you">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">8 Balinese Traditions That Will Surprise You</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">Globalization has profoundly changed Bali in recent decades. Balinese women have covered themselves while some lived topless until the 1980s.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/balinese-traditions-that-will-surprise-you" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/what-is-appraisal">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog15.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/what-is-appraisal">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">What is Appraisal?</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">The real estate market in Bali is not stable, it goes through periods of ups and downs due to several factors such as environmental crises.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/what-is-appraisal" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>

            <div class="max-w-lg mx-auto">
                <div class="bg-white shadow-m max-w-sm mb-5 min-h-full">
                    <a href="https://bvrproperty.com/best-travel-destinations">
                        <div class="bg-center bg-cover block w-full h-52" style="background-image: url('https://www.bvrproperty.com/public/images/blog16.jpg');"></div>
                    </a>
                    <div class="p-3">
                        <a href="https://bvrproperty.com/best-travel-destinations">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">10 Best Travel Destinations</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3">With a world full of fascinating destinations, choosing the perfect vacation spot can present a challenge.</p>
                        <a class="text-white     font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="https://bvrproperty.com/best-travel-destinations" style="background-color: #ef3700;">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
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
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".js-select2-multi").select2({
                closeOnSelect: false
            });

            checkvirtual = $("#dlinkslider").val();
            if (checkvirtual != '') {
                $("#dlinkslidershow").removeClass("hidden");
            }
            checkyoutube = $("#youtubeval").val();
            if (checkyoutube == '') {
                $("#youtube").addClass("hidden");
            }

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
                        console.log(idr.length);
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
                        console.log(idr.length);
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