<?php

$articles = [
    [
        "id" => 1,
        "title" => "Introduction a HTML et CSS",
        "category_id" => 1,
    ],
    [
        "id" => 2,
        "title" => "Les bases de JavaScript",
        "category_id" => 1
    ],
    [
        "id" => 3,
        "title" => "Principes du UI Design",
        "category_id" => 2,

    ],
    [
        "id" => 4,
        "title" => "Introduction à Kali Linux",
        "category_id" => 3,
    ],
    [
        "id" => 5,
        "title" => "Comprendre les réseaux TCP/IP",
        "category_id" => 4,
    ],
    [
        "id" => 6,
        "title" => "Découvrir l'intelligence artificielle",
        "category_id" => 5,
    ],
];

$categories=[
    [
        "id" => 1,
        "libelle" => "Développement Web",
    ],
    [
        "id" => 2,
        "libelle" => "Design UI/UX",
    ],
    [
        "id" => 3,
        "libelle" => "Cybersécurité",
    ],
    [
        "id" => 4,
        "libelle" => "Réseaux Informatiques",
    ],
    [
        "id" => 5,
        "libelle" => "Intelligence Artificielle",
    ],  
];
require("index-template.php")

?>