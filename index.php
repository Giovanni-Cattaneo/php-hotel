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

// foreach ($hotels as $key => $hotel) {
//     echo "<p>$hotel[name]</p>";
//     echo "<p>$hotel[description]</p>";
//     echo "<p>Voto: $hotel[vote]/5</p>";
//     echo "<p>Distanza dal centro: $hotel[distance_to_center]km</p>";
//     echo "<br>";
// }

var_dump($_GET);

$filterName = $_GET["name"];

$filterHotels = [];

//var_dump($filteredName);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form class="text-center mt-5" action="" method="get">
        <input type="text" name="name" placeholder="Cerca un hotel">
        <input type="submit" value="Cerca">
    </form>

    <div class="container d-flex mt-5 justify-content-center ">
        <table class="w-75 mx-auto border">
            <thead class="border-bottom">
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Valutazione</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>
            <tbody class="w-100 ">
                <?php foreach ($hotels as $hotel) { ?>
                    <tr class="border">
                        <td><?php echo $hotel['name']; ?></td>
                        <td><?php echo $hotel['description']; ?></td>
                        <td>Voto: <?php echo $hotel['vote']; ?>/5</td>
                        <td>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?>km</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    </div>

</body>

</html>