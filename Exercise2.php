<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Exercise 2</title>
    <link rel="stylesheet" href="Exercise2.css">
</head>

<body>
    <?php
    $cities = ["Tokyo",
    "Mexico City", 
    "New York City", 
    "Mumbai", 
    "Seoul", 
    "Shanghai", 
    "Lagos", 
    "Buenos Aires", 
    "Cairo", 
    "London"];

    $add = [ "Los Angeles", 
    "Calcutta", 
    "Osaka", 
    "Beijing"];

    echo "<h1>PHP Exercise 2</h1>";

    echo "<h4>Largest cities: </h4>";
    foreach ($cities as $city){
        echo "$city ,";
    }

    sort($cities);

    echo "<h4>Sorted cities: </h4>";
    echo "<ul>";
    foreach ($cities as $city){
        echo "<li>$city</li>";
    }
    echo "</ul>";

    foreach ($add as $new){
        $cities[] = $new;
    }

    sort($cities);

    echo "<h4>New sorted cities: </h4>";
    echo "<ul>";
    foreach ($cities as $city){
        echo "<li>$city</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>