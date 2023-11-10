<?<?php

$db = [
    "countries" => [
        ["Nom" => "", "Id" => 0],
        ["Nom" => "Gazeuse", "Id" => 1],
        ["Nom" => "Telluriques", "Id" => 2]
    ],
    "planétes" => [
        [
            "Nom" => "MERCURE",
            "Distance" => 61,
            "Caractéristiques" => 2,
            "Nature" => "Atmosphère mince",
            "Status" => false
        ],
        [
            "Nom" => "VENUS",
            "Distance" => 73,
            "Caractéristiques" => 2,
            "Nature" => "Taille similaire à la terre",
            "Status" => false
        ],
        [
            "Nom" => "TERRE",
            "Distance" => 29,
            "Caractéristiques" => 2,
            "Nature" => "Atmosphère respirable,plusieurs forme de vie ",
            "Status" => true
        ],
        [
            "Nom" => "MARS",
            "Distance" => 78,
            "Caractéristiques"=> 2,
            "Nature" => "Planète rouge",
            "Status" => true
        ],
        [
            "Nom" => "JUPITER",
            "Distance" => 43,
            "Caractéristiques" => 1,
            "Nature" => "La plus grande planète, plusieurs lunes",
            "Status" => false
        ],
        [
            "Nom" => "SATURNE",
            "Distance" => 51,
            "Caractéristiques" => 1,
            "Nature" => "Planètes avec anneau",
            "Status" => false
        ],
        [
            "Nom" => "URANUS",
            "Distance" => 59,
            "Caractéristiques": 1,
            "Nature" => "Planète géante",
            "Status" => true
        ],
        [
            "Nom" => "NEPTUNE",
            "Distance" => 58,
            "Caractéristiques" => 1,
            "Nature" => "Ressemblance à la terre",
            "Status" => true
        ],
        [
            "Nom" => "PLUTON",
            "Distance" => 62,
            "Caractéristiques" => 1,
            "Nature" => "Planète naine",
            "Status" => true
        ],
        [
            "Nom" => "LUNE",
            "Distance" => 39,
            "Nature" => "Sattélitte naturelle de la terre",
            "Status" => true
        ],
        [
            "Nom" => "JB 5430",
            "Distance" => 28,
            "Caractéristiques" => 1,
            "Nature" => "Plusieurs anneaux",
            "Status" => false
        ],
        
        // Ajoutez les autres planétes ici...
    ]
];

function loadData($filter) {
    global $db;
    return array_filter($db["planétes"], function($planéte) use ($filter) {
        return (empty($filter["Nom"]) || strpos($planéte["Nom"], $filter["Nom"]) !== false)
            && (!isset($filter["Distance"]) || $planéte["Distance"] === $filter["Distance"])
            && (empty($filter["Nature"]) || strpos($planéte["Nature"], $filter["Nature"]) !== false)
            && (empty($filter["Caractéristiques"]) || $planéte["Caractéristiques"] === $filter["Caractéristiques"])
            && (!isset($filter["Status"]) || $planéte["Status"] === $filter["Status"]);
    });
}

function insertItem($insertingplanéte) {
    global $db;
    $db["planétes"][] = $insertingplanéte;
}

function updateItem($updatingplanéte) {
    // La fonction de mise à jour des planétes
}

function deleteItem($deletingplanéte) {
    global $db;
    $planéteIndex = array_search($deletingplanéte, $db["planétes"]);
    if ($planéteIndex !== false) {
        array_splice($db["planétes"], $planéteIndex, 1);
    }
}

// Exemple d'utilisation des fonctions

// Charger tous les planétes
$allplanétes = loadData([]);
var_dump($allplanétes);

// Charger les planétes avec le filtre "Nature" égal à "Atmosphère mince"
$filteredplanétes = loadData(["Nature" => "Atmosphère mince"]);
var_dump($filteredplanétes);

// Insérer un nouveau planéte
$newplanéte = [
    "Nom" => "MARS",
    "Distance" => 78,
    "Caractéristiques" => 2,
    "Nature" => "Planète rouge",
    "Status" => true
];
insertItem($newplanéte);
var_dump($db["planétes"]);

// Supprimer un planéte existant
$planéteToDelete = $db["planétes"][0];
deleteItem($planéteToDelete);
var_dump($db["planétes"]);

?>


