<!-- if your device screen is 1366 * 768 please zoom out to 67%. if your device screen is 1920 * 1080 please zoom to 100% for better looks -->
<?php
$menu = [
    [
        "name" => "coffe",
        "picture" => "Gallery_1.jpg"
    ],
    [
        "name" => "juice",
        "picture" => "Gallery_2.jpg"
    ],
    [
        "name" => "breakfast",
        "picture" => "Gallery_3.jpg"
    ],
    [
        "name" => "sandwich",
        "picture" => "Gallery_4.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <!-- css -->
    <link rel="stylesheet" href="index.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap');
    </style>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../batch2Dode/icons/logo.svg" alt="logo" width="80px" height="80px">
            </a>
            <div class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MOOD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- banner image -->
    <section class="Hero-banner banner-image">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12">
                    <h1 class="text-center text-white title">Life Begins After Coffe</h1>
                    <div class="button-center d-flex justify-content-center">
                        <a href="#menu">
                            <button type="button" class="btn btn-warning px-4 py-2">View More</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- content  -->
    <div class="container" id="menu">
        <div class=" row p-5 mt-5 pt-5">
            <div class="col-md-12">
                <div class="text-content text-center">
                    <h1>Life Begins After Coffe</h1>
                    <p>
                        coffe plunger hot sweet barista, ground acerbic coffe instant
                        crema cream in half and half. Spoon lingo variety, as, sippon,
                        riseeto, iced brewed, and acebic afogato grinder.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- looping -->
            <?php foreach ($menu as $menu) : ?>
                <div class="col-md-3">
                    <div style=" 
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;
                        height: 600px; 
                        background : url('../batch2Dode/picture/<?= $menu["picture"]; ?>');" 
                        class="d-flex justify-content-center align-items-center">
                        
                        <h2 class="text-white"><?= $menu["name"]; ?></h2>
                    </div>
                </div>

                <!-- import manual -->
                <!-- <div class="col-md-3">
                <div class="gallery-image-2 d-flex justify-content-center align-items-center">
                    <h2 class="text-white">Juice</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="gallery-image-3 d-flex justify-content-center align-items-center">
                    <h2 class="text-white">Breakfast</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="gallery-image-4 d-flex justify-content-center align-items-center">
                    <h2 class="text-white">Sandwich</h2>
                </div>
            </div> -->

            <?php endforeach; ?>
        </div>
    </div>

    <!-- content 2  -->
    <section class="content2">
        <div class="container py-5 my-5">
            <div class="row d-flex justify-content-center py-5 mt-5">
                <div class="col-md-8 py-5">
                    <div class="text-content-2 text-center">
                        <h1 style="font-size: 4rem;" class=" barlow-fs">
                            Extraction Instant That Variety
                        </h1>
                        <h1 style="font-size: 4rem;" class="barlow-fs">white robusta strong</>
                            <p class="pt-3 fs-3">
                                Coffee plunger pot sweet barista, grounds acerbic coffee
                                instant crema cream in half and half. Spoon lungo
                                variety, as, siphon, ristretto, iced brewed and acerbic
                                affogato grinder. Mazagran café au lait wings spoon,
                                percolator milk latte dark strong. Whipped, filter
                                latte, filter aromatic grounds doppio caramelization
                                half and half.
                            </p>
                            <div class="button-content2 pt-5">
                                <button type="button" class="btn btn-warning barlow-fs px-5 py-3 fs-4 text-white">
                                    CONTACT US
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- content 3 -->
    <section class="my-5 bg-secondary">
        <div class="container my-5">
            <div class="row">
                <h1 style="font-size: 4rem;" class="barlow-fs text-center mb-5">Health Benefits of Coffee</h1>
                <div class="col-md-4">
                    <div class="d-flex justify-content-center">
                        <img class="icon" src="./icons/battery-full.svg" alt="icon1" />
                    </div>
                    <p class="text-center fs-1">BOOST ENERGY LEVEL</p>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-center">
                        <img class="icon" src="./icons/sun.svg" alt="icon2" />
                    </div>
                    <p class="text-center fs-1">REDUCE DEPRESSION</p>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-center">
                        <img class="icon" src="./icons/weight.svg" alt="icon3" />
                    </div>
                    <p class="text-center fs-1">AID IN WEIGHT LOSS</p>
                </div>
            </div>
        </div>
    </section>

    <!-- content 4 -->
    <section class="py-5 mt-5">
        <div class="container py-5 my-5">
            <div class="row py-5 my-5">
                <div class="col-md-6">
                    <img src="./picture/blog_1.jpg " class="img-fluid" alt="gambar kopi" style="height: 85%; width: 90%;" />
                </div>
                <div class="col-md-6">
                    <div class="P-5">
                        <div class="content-text_3 p-5">
                            <p class="barlow-fs fs-2">BLOG</p>
                            <p class="fs-1 barlow-fs">
                                Qui espresso, grounds to go
                            </p>
                            <p class="fs-5 barlow-fs">
                                December 12, 2019 | Espresso
                            </p>
                            <p class="fs-3 barlow-fs">
                                Skinny caffeine aged variety filter saucer redeye,
                                sugar sit steamed eu extraction organic. Beans, crema
                                half and half fair trade carajillo in a variety
                                dripper doppio pumpkin spice cup lungo, doppio, est
                                trifecta breve and, rich, extraction robusta a eu
                                instant. Body sugar steamed, aftertaste,
                                decaffeinated coffee fair trade sit, white shop fair
                                trade galão, dark crema breve frappuccino iced strong
                                siphon trifecta in a at viennese.
                            </p>
                            <p class="fs-1 barlow-fs">READ MORE -></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #3e4551">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col">
                        <a>
                            <img src="../batch2Dode/icons/logo.svg" alt="logo" width="100px" height="100px">
                        </a>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col">
                        <h6 class="text-footer">2800 S White Mountain Rd | Show Low AZ 85901</h6>
                        <h6 class="text-footer">(928) 537-1425 | info@grinder-coffee.com</h6>
                        <!-- Facebook -->
                        <a class="btn" href="#!" role="button"><i class="fa-brands fa-facebook-f fa-lg"></i></a>
                        <!-- Instagram -->
                        <a class="btn btn-floating" href="#!" role="button"><i class="fa-brands fa-instagram fa-lg"></i></a>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col">
                        <h5 class="text-footer">NEWSLETTER</h5>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="YOUR EMAIL ADDRESS" aria-label="Search">
                            <button class="btn btn-warning" type="submit">Search</button>
                        </form>

                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

        </div>
        <!-- Grid container -->
    </footer>
    <!-- Footer -->
    <!-- End of .container -->

    <!-- JavaScript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script>
        const nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>


</body>

</html>