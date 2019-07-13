<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'asa';

/*PHP PRODUCTS TABLE OUTPUT*/

$products = [
    1 => [
        'name' => 'Produktas 1',
        'sku' => '000001',
        'price' => '100',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    2 => [
        'name' => 'Produktas 2',
        'sku' => '000002',
        'price' => '200',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    3 => [
        'name' => 'Produktas 3',
        'sku' => '000003',
        'price' => '300',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    4 => [
        'name' => 'Produktas 4',
        'sku' => '000004',
        'price' => '400',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    5 => [
        'name' => 'Produktas 5',
        'sku' => '000005',
        'price' => '500',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    6 => [
        'name' => 'Produktas 6',
        'sku' => '000006',
        'price' => '600',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
];
//echo "<pre>";
//print_r($products);

function renderProduct($product)
{
    $html = '';
    $html .= '<div class="product-wrapper">';//style= "float: left; width: 100px;"
    $html .= '<div class="image"><img src="' . $product['image'] . '" alt="asd"></div>';
    $html .= '<div class="name">' . $product['name'] . '</div>';
    $html .= '<div class="sku">' . $product['sku'] . '</div>';
    $html .= '<div class="price">' . $product['price'] . '</div>';
    $html .= '</div>';

    return $html;

}


function renderGrid($products)//funkcija per kuria eina duomenys is pirminio array
{
    $html = '';
    $html .= '<div class="grid-wrapper">';
    foreach ($products as $product) {
        $html .= renderProduct($product); //funkcija kurioje kurtas html elementai

    }
    $html .= '<div>';
    return $html;
}

echo renderGrid($products);
