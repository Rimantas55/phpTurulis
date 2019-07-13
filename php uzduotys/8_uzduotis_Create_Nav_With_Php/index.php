<?php

/*CREATE NAV MENU*/

$menuItems = [
    1 => [
        'label' => 'Home',
        'url' => 'www.delfi.lt',
    ],
    2 => [
        'label' => 'About',
        'url' => 'www.litas.lt'
    ],
    3 => [
        'label' => 'Contacts',
        'url' => 'www.maxima.lt',
    ],

];

function createNav($item)
{
    $html = '';

    $html .= '<a href="' . $item['url'] . '" style="text-decoration: none; font-size:15pt; color:white;">' . $item['label'] . '</a>';

    return $html;
}

function sendItems($menuItems)
{
    $html = '';
    $html .= '<div class="nav" style="max-width: 800px; margin: auto; display: flex; justify-content: space-evenly; align-items: center; border: 2px solid yellow; background-color: orange; padding: 15px;  ">';

    foreach ($menuItems as $item) {
        $html .= createNav($item);
    }

    $html .= '</div>'; //end of nav wrapper
    return $html;
}

echo sendItems($menuItems);
