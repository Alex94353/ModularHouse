<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modular Housing produce and assemble modular houses that are very high quality and they can be used as temporary as well as permanent residence.">
    <meta name="keywords" content="house, compact, cheap, low, price, summerhouse, household">
    <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Modular Housing</title>
</head>

<body>
    <div class="wrapper">
        <div class="page">
            <!-- header menu -->
            <?php
            $file_path = "parts/header.php";

            if (!include($file_path)) {
                echo "Failed to include $file_path";
            }
            ?>
            <main>
                <!-- slider automatic elements -->
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="img/image 4.jpg" alt="home" />
                        <div class="sign-image">
                            <h2 class="cap-text">A place that is more than an office – a place where you can create
                                work-life balance</h2>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <img src="img/pexels-josh-hild-2692254.jpg" alt="home" />
                        <div class="sign-image">
                            <h2 class="cap-text">A place that is more than an office – a place where you can create
                                work-life balance</h2>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <img src="img/pexels-michael-block-3225527.jpg" alt="home" />
                        <div class="sign-image">
                            <h2 class="cap-text">A place that is more than an office – a place where you can create
                                work-life balance</h2>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <img src="img/pexels-mariam-antadze-14518600.jpg" alt="home" />
                        <div class="sign-image">
                            <h2 class="cap-text">A place that is more than an office – a place where you can create
                                work-life balance</h2>
                        </div>
                    </div>
                </div>
                <!-- text elements include grid and flexbox containers -->
                <div class="content flex-center flex-around">
                    <div class="text-block">
                        <div class="text-block__item-big">
                            <h1>
                                Modular Housing produce and assemble modular houses that are very high quality and they
                                can be used as
                                temporary
                                as well as permanent residence.
                            </h1>
                        </div>
                        <div class="text-block__item">
                            <img src="img/Vector.svg" alt="icon">
                            <p class="name-table">quality</p>
                            <p class="text text-table">
                                A quality flexible modular housing solution set nd they can be used as temporary as well
                                as permanent residence.
                            </p>
                        </div>
                        <div class="text-block__item">
                            <img src="img/Vector.svg" alt="icon">
                            <p class="name-table">design</p>
                            <p class="text text-table">
                                Low price and quick assembly.housing solution set nd they can be used as temporary as
                                well as permanent residence.
                            </p>
                        </div>
                        <div class="text-block__item">
                            <img src="img/Vector.svg" alt="icon">
                            <p class="name-table">price</p>
                            <p class="text text-table">
                                Bespoke, contemporary design capabilities with customization.
                                nd they can be used as temporary as well as permanent
                                residence.
                            </p>
                        </div>
                        <div class="text-block__item">
                            <img src="img/Vector.svg" alt="icon">
                            <p class="name-table">choice</p>
                            <p class="text text-table">
                                Bespoke, contemporary design capabilities with customization. nd they can be used as
                                temporary as well as permanent
                                residence.
                            </p>
                        </div>
                    </div>
                    <div class="container lim-wid">
                        <img src="img/image2.jpg" alt="home">
                    </div>
                </div>
            </main>
            <!-- footer include flex containers and table -->
            <?php
            $file_path = "parts/footer.php";

            if (!include($file_path)) {
                echo "Failed to include $file_path";
            }
            ?>
        </div>
    </div>
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>
</body>

</html>