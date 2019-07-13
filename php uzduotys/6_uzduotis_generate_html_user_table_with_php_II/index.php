<?php

$users = [
    1 => [
        'name' => 'Antanas',
        'surname' => 'Bogdanavicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2020 01 01',
    ],
    2 => [
        'name' => 'Kestas',
        'surname' => 'Kestavicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2222 01 01',
    ],
    3 => [
        'name' => 'Zigmas',
        'surname' => 'Zigmuntavicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2017 01 01',
    ],
    4 => [
        'name' => 'Juozas',
        'surname' => 'Juozapevicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2020 01 01',
    ],
];

function renderListItem($user)
{
    $html = '';

    $html .= '<tr style="font-weight: bold; text-align: center; border:2px solid yellow;">';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['name'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['surname'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['email'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['phone'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['bday'] . '</td>';
    $html .= '</tr style="text-align: center; border:2px solid yellow;">';

    return $html;
}


function userOutput($users)
{
    $html = '';
    $html .= '<table style="max-width:100%; border:1px solid yellow; border-collapse: collapse;">';

    $html .= '<tr style="font-weight: bold; text-align: center; border:2px solid yellow;">';//
    $html .= '<td style="text-align: center; border:1px solid yellow;">Name</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Surname</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Email</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Phone</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Bday</td>';

    foreach ($users as $user) {
        $html .= renderListItem($user);
    }
    $html .= '</tr>'; //close header tr row
    $html .= '</table>'; //close table
    return $html;
}

echo userOutput($users);
