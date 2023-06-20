<?php
// Multi Dimensional Array
$programmingLang = [
    'php' => [
        'creator' => 'GoatX',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 7.33, 'releaseDate' => 'Dec 3, 2021'],
            ['version' => 8.12, 'releaseDate' => 'Dec 9, 2022']
        ]
    ],

    'python' => [
        'creator' => '',
        'extension' => '',
        'website' => '',
        'isOpenSource' => FALSE,
        'versions' => [
            ['version' => 3.33, 'releaseDate' => 'Dec 3, 2021'],
            ['version' => 4.12, 'releaseDate' => 'Dec 9, 2022']
        ]
    ],

    'go' => [
        'creator' => '',
        'extension' => '',
        'website' => '',
        'isOpenSource' => True,
        'versions' => [
            ['version' => 1.33, 'releaseDate' => 'Dec 3, 2021'],
            ['version' => 2.12, 'releaseDate' => 'Dec 9, 2022']
        ]
    ],

   'rProgramming' => [
       'creator' => '',
       'extension' => '',
       'website' => '',
       'isOpenSource' => True,
       'versions' => [
           ['version' => 8, 'releaseDate' => 'Nov 22, 2022'],
           ['version' =>9, 'releaseDate' => 'Dec 13, 2023']
       ]
   ]
];

echo "<pre>";
print_r($programmingLang);
echo "</pre>";

// to access 'website' data of php element in array $programmingLang
echo $programmingLang['php']['website'];
echo "<br>";
echo $programmingLang['php'] ['versions'][0]['releaseDate'];
echo $programmingLang['php'] ['versions'][3]['releaseDate'];

