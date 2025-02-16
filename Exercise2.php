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
    $cities = [
        "Tokyo",
        "Mexico City",
        "New York City",
        "Mumbai",
        "Seoul",
        "Shanghai",
        "Lagos",
        "Buenos Aires",
        "Cairo",
        "London"
    ];


    function printCities($cities)
    {
        foreach ($cities as $city) {
            echo "$city ,";
        }
    }

    function sortAndPrint($cities)
    {
        sort($cities);

        echo "<ul>";
        foreach ($cities as $city) {
            echo "<li>$city</li>";
        }
        echo "</ul>";
    }

    function addCities(&$cities){
        $add = [
            "Los Angeles",
            "Calcutta",
            "Osaka",
            "Beijing"
        ];
        
        $cities = array_merge($add, $cities);
    }

    echo "<h1>PHP Exercise 2</h1>";

    echo "<h4>Largest cities: </h4>";
    printCities($cities);

    echo "<h4>Sorted cities: </h4>";
    sortAndPrint($cities);
    
    echo "<h4>New sorted cities: </h4>";
    addCities($cities);
    sortAndPrint($cities);

    ?>
</body>

</html>