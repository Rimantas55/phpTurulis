<?php

/*HTML PRICES*/

$prices = [
    'price' => [
        'car' => 10,
        'doll' => 15,
        'plain' => 8,
        'cards' => 63,
        'mc' => 100,
        'food' => 213,
        //'pvm' => 1.21,
    ],
];

//bandziau kazka bet nesugalvojau kaip funkcija ikelti i visa cikla
function countPvm($item)
{
    return $item * 1.21;
}

function outoutItems($item)
{
    foreach ($item as $key => $value) {

        foreach ($value as $key1 => $value1) {
            print $key1 . " "; //jei padarau return gaunasi kad output tik car vienas elementas
        }
    }
}

//print outoutItems($prices);


function createHtml($item)
{
    $html = '';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['car'] . '</td>';
    $html .= '<td>' . countPvm($item['car']) . " eur" . '</td>';//$item['car'] * $items['pvm']
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['doll'] . '</td>';
    $html .= '<td>' . countPvm($item['doll']) . " eur" . '</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['plain'] . '</td>';
    $html .= '<td>' . countPvm($item['plain']) . " eur" . '</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['cards'] . '</td>';
    $html .= '<td>' . countPvm($item['cards']) . " eur" . '</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['mc'] . '</td>';
    $html .= '<td>' . countPvm($item['mc']) . " eur" . '</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['food'] . '</td>';
    $html .= '<td>' . countPvm($item['food']) . " eur" . '</td>';
    $html .= '</tr>';

    return $html;
}

function multiplyItems($prices)
{
    $html = '';
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td>Item</td>';
    $html .= '<td>Price no PVM</td>';
    $html .= '<td>Price with 21% PVM</td>';


    foreach ($prices as $key => $item) {
        $html .= createHtml($item, $key);
    }


    $html .= '</tr>';
    $html .= '</table>';
    return $html;
}

echo multiplyItems($prices);
//menu pilnas atvaizdavimas su css