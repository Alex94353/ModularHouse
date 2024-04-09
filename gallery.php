<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Modular Housing produce and assemble modular houses that are very high quality and they can be used as temporary as well as permanent residence.">
    <meta name="keywords" content="house, compact, cheap, low, price, summerhouse, household">
    <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Modular Housing</title>
</head>

<body>
    <div class="wrapper">
        <div class="page">
            <header class="header flex-center">
                <nav class="header__container flex-center">
                    <div class="flex-center">
                        <img src="img/logo.svg" alt="logo">
                        <span class="bold">Modular<br> Housing</span>
                    </div>
                    <ul class="menu flex-center">
                        <li class="menu__elem">
                            <a href="page.html" class="nav-link">Home</a>
                        </li>
                        <li class="menu__elem">
                            <a href="about.html" class="nav-link">About us</a>
                        </li>
                        <li class="menu__elem">
                            <a href="gallery.html" class="nav-link">Gallery</a>
                        </li>
                        <li class="menu__elem">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                        <li class="menu__elem button flex-center">
                            <a href="catalogue.html" class="nav-link"><span class="bold">Order</span><br> Catalogue
                            </a>
                        </li>
                    </ul>
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </nav>
            </header>
            <main>

                <!-- Images used to open the lightbox -->
                <div class="gallery grid">
                    <div class="column">
                        <img src="img/pic1.jpg" alt="Garden room with swimming pool" loading="lazy"
                            onclick="openModal();currentSlide(1)" class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic2.jpg" alt="House with a living room and a loft" loading="lazy"
                            onclick="openModal();currentSlide(2)" class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic3.jpg" alt="Two-story house with a living room" loading="lazy"
                            onclick="openModal();currentSlide(3)" class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic4.jpg" alt="Two-storey wooden house" loading="lazy"
                            onclick="openModal();currentSlide(4)" class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic5.jpg" alt="Summer house" loading="lazy" onclick="openModal();currentSlide(5)"
                            class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic6.jpg" alt="Loft House" loading="lazy" onclick="openModal();currentSlide(6)"
                            class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic7.jpg" alt="Garden room" loading="lazy" onclick="openModal();currentSlide(7)"
                            class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic8.jpg" alt="Living room" loading="lazy" onclick="openModal();currentSlide(8)"
                            class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic9.jpg" alt="Kitchen" loading="lazy" onclick="openModal();currentSlide(9)"
                            class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic10.jpg" alt="Living room with staircase" loading="lazy"
                            onclick="openModal();currentSlide(10)" class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic11.jpg" alt="Living room plus" loading="lazy"
                            onclick="openModal();currentSlide(11)" class="hover-shadow" />
                    </div>
                    <div class="column">
                        <img src="img/pic12.jpg" alt="Lounge" loading="lazy" onclick="openModal();currentSlide(12)"
                            class="hover-shadow" />
                    </div>
                </div>

                <!-- The Modal/Lightbox -->
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">
                        <div class="Slides">
                            <div class="numbertext">1 / 12</div>
                            <img src="img/pic1.jpg" alt="Garden room with swimming pool" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">2 / 12</div>
                            <img src="img/pic2.jpg" alt="House with a living room and a loft" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">3 / 12</div>
                            <img src="img/pic3.jpg" alt="Two-story house with a living room" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">4 / 12</div>
                            <img src="img/pic4.jpg" alt="Two-storey wooden house" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">5 / 12</div>
                            <img src="img/pic5.jpg" alt="Summer house" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">6 / 12</div>
                            <img src="img/pic6.jpg" alt="Loft House" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">7 / 12</div>
                            <img src="img/pic7.jpg" alt="Garden room" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">8 / 12</div>
                            <img src="img/pic8.jpg" alt="Living room" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">9 / 12</div>
                            <img src="img/pic9.jpg" alt="Kitchen" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">10 / 12</div>
                            <img src="img/pic10.jpg" alt="Living room with staircase" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">11 / 12</div>
                            <img src="img/pic11.jpg" alt="Living room plus" loading="lazy" />
                        </div>

                        <div class="Slides">
                            <div class="numbertext">12 / 12</div>
                            <img src="img/pic12.jpg" alt="Lounge" loading="lazy" />
                        </div>

                        <!-- Next/previous controls -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <!-- Caption text -->
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                        <!-- small image controls -->

                        <div class="grid">
                            <div class="column">
                                <img class="demo" src="img/pic1.jpg" loading="lazy" onclick="currentSlide(1)"
                                    alt="Garden room with swimming pool">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic2.jpg" loading="lazy" onclick="currentSlide(2)"
                                    alt="House with a living room and a loft">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic3.jpg" loading="lazy" onclick="currentSlide(3)"
                                    alt="Two-story house with a living room">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic4.jpg" loading="lazy" onclick="currentSlide(4)"
                                    alt="Two-storey wooden house">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic5.jpg" loading="lazy" onclick="currentSlide(5)"
                                    alt="Summer house">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic6.jpg" loading="lazy" onclick="currentSlide(6)"
                                    alt="Loft House">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic7.jpg" loading="lazy" onclick="currentSlide(7)"
                                    alt="Garden room">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic8.jpg" loading="lazy" onclick="currentSlide(8)"
                                    alt="Living room">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic9.jpg" loading="lazy" onclick="currentSlide(9)"
                                    alt="Kitchen">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic10.jpg" loading="lazy" onclick="currentSlide(10)"
                                    alt="Living room with staircase">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic11.jpg" loading="lazy" onclick="currentSlide(11)"
                                    alt="Living room plus">
                            </div>

                            <div class="column">
                                <img class="demo" src="img/pic12.jpg" loading="lazy" onclick="currentSlide(12)"
                                    alt="Lounge">
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="flex-center flex-around">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2">
                                    <img src="img/icon.svg" alt="logo">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/Placeholder.svg" alt="placeholder">
                                </td>
                                <td><a href="contact.html">Akademická 1, 949 91 Nitra-Chrenová</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/phone.svg" alt="phone number">
                                </td>
                                <td><a href="tel:+421-950-000-000">+421-950-000-000</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/Mail.svg" alt="email">
                                </td>
                                <td><a href="mailto:send@gmail.com">send@gmail.com</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="footer-down flex-center flex-around">
                    <div class="flex-center gap">
                        <div><span>© Modular Housing 2023</span></div>
                        <div><a href="https://www.termsfeed.com/blog/sample-terms-and-conditions-template">Privacy
                                Policy</a></div>
                    </div>
                    <div class="flex-center gap">
                        <div>
                            <a href="https://www.facebook.com/">
                                <img src="img/fb.svg" alt="social network">
                            </a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/">
                                <img src="img/inst.svg" alt="social network">
                            </a>
                        </div>
                        <div>
                            <a href="https://www.youtube.com/">
                                <img src="img/youtube.svg" alt="social network">
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/lightbox.js"></script>
    <script src="js/main.js"></script>
</body>

</html>