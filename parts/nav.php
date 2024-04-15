<?php
include_once "functions.php";

$menu = getMenuData("header");
?>
<?php if (true) { ?>
    <header class="header flex-center">
        <nav class="header__container flex-center">
            <div class="flex-center">
                <img src="img/logo.svg" alt="logo">
                <span class="bold">Modular<br> Housing</span>
            </div>
            <?php
            $menu_items = array(
                array('url' => 'page.php', 'label' => 'Home'),
                array('url' => 'about.php', 'label' => 'About us'),
                array('url' => 'gallery.php', 'label' => 'Gallery'),
                array('url' => 'contact.php', 'label' => 'Contact'),
                array('url' => 'catalogue.php', 'label' => '<span class="bold">Order</span><br> Catalogue')
            );


            $menu = generate_menu($menu_items);
            echo $menu;
            ?>
            <!-- hamburger elements -->
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
<?php } ?>