<?php
function generate_menu(array $menu_items)
{
    $menu_html = '<ul class="menu flex-center">';
    $total_items = count($menu_items); 
    $counter = 0; 

    foreach ($menu_items as $item) {
        $counter++; 

        $menu_html .= '<li class="menu__elem';
        
        
        if ($counter === $total_items) {
            $menu_html .= ' button flex-center">'; 
            $menu_html .= '<a href="' . $item['url'] . '" class="nav-link">' . $item['label'] . '</a>';
        } else {
            $menu_html .= '">';
            $menu_html .= '<a href="' . $item['url'] . '" class="nav-link">' . $item['label'] . '</a>';
        }
        
        $menu_html .= '</li>';
    }
    $menu_html .= '</ul>';
    return $menu_html;
} 

function generate_accordion(array $accordion_items){
    $accordion_html = '';

    foreach($accordion_items as $item){
        $accordion_html .= '<button class="accordion">' . $item['question'] . '</button>';
        $accordion_html .= '<div class="panel">';
        $accordion_html .= '<p>' . $item['answer'] . '</p>';
        $accordion_html .= '</div>';
    }

    echo $accordion_html;
}

function validateMenuType(string $type): bool
{
    $menuTypes = [
        'header',
        'footer'
    ];
    return in_array($type, $menuTypes);
}

function getMenuData(string $type): array
{
    $menu = [];
    if (validateMenuType($type)) {
        if ($type === "header") {
            $menu = [
                'home' => [
                    'name' => 'Home',
                    'path' => 'page.php',
                ],
                'about' => [
                    'name' => 'About',
                    'path' => 'about.php',
                ],
                'gallery' => [
                    'name' => 'Gallery',
                    'path' => 'gallery.php',
                ],
                'contact' => [
                    'name' => 'Contact',
                    'path' => 'contact.php',
                ],
                'catalogue' => [
                    'name' => 'Catalogue',
                    'path' => 'catalogue.php',
                ],
            ];
        }
    }
    return $menu;
}

// function add_scripts()
// {
//     echo '<script src="js/menu.js"></script>';
//     $page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
//     switch ($page_name) {
//         case 'page':
//             echo '<script src="js/app.js"></script>';
//             break;
//         case 'about':
//             echo '<script src="js/accordion.js"></script>';
//             break;
//         case 'gallery':
//             echo '<script src="js/lightbox.js"></script>';
//             break;
//         case 'catalogue':
//             echo '<script src="js/validation.js"></script>';
//             break;
//     }
// }

function printMenu(array $menu)
{
    foreach ($menu as $menuName => $menuData) {
        echo '<li><a href="' . $menuData['path'] . '">' . $menuData['name'] . '</a></li>';
    }
}
?>