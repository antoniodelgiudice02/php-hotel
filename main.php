<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$parking_filter = isset($_GET['parking-filter']) ? true : false;
var_dump($parking_filter);

if ($parking_filter) {

    $hotels = array_filter($hotels, fn($hotel) => $hotel['parking']);

}

$vote_filter = $_GET['vote-filter'];
var_dump($vote_filter);

if (!empty($vote_filter)) {

    $hotels = array_filter($hotels, fn($hotel) => $hotel['vote'] >= $vote_filter);
    
}






// if (f) { //se si cerca un hotel col parcheggio


// }





// $parking = '';

// foreach ($hotels as $hotel) {
//     if ($hotel['parking']) {
//         $parking = 'si';
//     } else {
//         $parking = 'no';
//     }
// }

?>