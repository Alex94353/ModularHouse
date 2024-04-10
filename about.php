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
            <?php
            $file_path = "parts/header.php";

            if (!include($file_path)) {
                echo "Failed to include $file_path";
            }
            ?>
            <main>
                <!-- include flexbox elements -->
                <div class="info-block flex-center flex-around">
                    <div class="info-block__item flex-center flex-column">
                        <h2>About us</h2>
                        <h3>
                            Modular Housing produce and assemble modular houses that are very high quality and they can
                            be used as
                            temporary
                            as well as permanent residence.
                        </h3>
                        <p>
                            An enterprise combining the joint expertise of a SK-based chartered architectural practice
                            and an
                            experienced Slovakian
                            manufacturer.
                        </p>
                        <p>
                            Modular Housing LTD :
                            Modular Housing is a bespoke garden room, modular building designer, and manufacturer.
                        </p>
                        <p>
                            Our high-quality, energy-saving products are designed with the end user in mind and can be
                            customized to
                            meet any
                            specific client’s requirements.
                        </p>
                        <p>
                            Our main aim is to provide our customers with a fast, cost-effective service. We are able to
                            achieve this
                            with the help
                            of the newest building technologies for manufacturing and assembly
                        </p>
                    </div>
                    <div class="info-block__item">
                        <img src="img/image 3.jpg" alt="facade of the house">
                    </div>
                </div>
                <!-- include grid elements -->
                <div class="text-block text-block--line gray">
                    <div class="text-block__item">
                        <img src="img/Vector.svg" alt="icon">
                        <p class="name-table">quality</p>
                        <p class="text text-table">
                            A quality flexible modular housing solutionset nd they can be used as temporary as well as
                            permanent
                            residence.
                        </p>
                    </div>
                    <div class="text-block__item">
                        <img src="img/Vector.svg" alt="icon">
                        <p class="name-table">design</p>
                        <p class="text text-table">
                            Low price and quick assembly.housing solutionset nd they can be used as temporary as well as
                            permanent
                            residence.
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
                            temporary as well as
                            permanent
                            residence.
                        </p>
                    </div>
                </div>
                <div class="faq flex-center flex-column">
                    <h2>FAQ</h2>
                    <!-- include accordion elements -->
                    <button class="accordion">Can I divide the space into the rooms I want?</button>
                    <div class="panel">
                        <p>
                            The insulation in a Trident Modular garden room is second to none. The room will be warm
                            inwinter and cool
                            in
                            summer –
                            available to use all year round.How much input can I have in the design of my building?You
                            tell us about
                            your
                            vision for
                            your new garden room, and we will work with you toget the design just right. External and
                            internal
                            finishes can
                            all be
                            amended to suityour budget and taste. The room will reflect your own style.
                        </p>
                    </div>

                    <button class="accordion">How long to install a room?</button>
                    <div class="panel">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed expedita nesciunt quod, facere
                            inventore
                            quisquam
                            quae accusamus totam quia itaque aut officia eius maiores ratione culpa accusantium
                            doloribus provident
                            ut!</p>
                    </div>

                    <button class="accordion">Can the garden rooms be used all year round?</button>
                    <div class="panel">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quod distinctio fugit
                            ipsam amet
                            iusto
                            enim, fuga ad id, nam sapiente dolorem accusantium labore illo. Tempore fuga dolores quod
                            vero?
                        </p>
                    </div>
                </div>
            </main>
            <?php
            $file_path = "parts/footer.php";

            if (!include($file_path)) {
                echo "Failed to include $file_path";
            }
            ?>
        </div>
    </div>
    <script src="js/accordion.js"></script>
    <script src="js/main.js"></script>
</body>

</html>