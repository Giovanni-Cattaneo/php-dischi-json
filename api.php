<?php

// header('Content-type: database/json');

// echo file_get_contents('disc.json');

$discs = [
    [
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "year" => 1988,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
        "genre" => "Rock",
        "click" => false,
    ],
    [
        "title" => "Live at Wembley 86",
        "author" => "Queen",
        "year" => 1992,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
        "genre" => "Pop",
        "click" => false,
    ],
    [
        "title" => "Ten\"s Summoner\"s Tales",
        "author" => "Sting",
        "year" => 1993,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
        "genre" => "Pop",
        "click" => false,
    ],
    [
        "title" => "Steve Gadd band",
        "author" => "Steve Gadd Band",
        "year" => 2018,
        "poster" => "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
        "genre" => "Jazz",
        "click" => false,
    ],
    [
        "title" => "Brave new World",
        "author" => "Iron Maiden",
        "year" => 2000,
        "poster" => "https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg",
        "genre" => "Metal",
        "click" => false,
    ],
    [
        "title" => "One more car, one more rider",
        "author" => "Eric Clapton",
        "year" => 2002,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg",
        "genre" => "Rock",
        "click" => false,
    ]
];

$json_string = json_encode($discs);

header('Content-type: database/json');

echo $json_string;
