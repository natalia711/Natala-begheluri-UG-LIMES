<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$data = [
    [
        "id" => 1,
        "name" => "Giorgi",
        "lastname" => "Amashukeli",
        "country"  => "Georgia",
        "skills" => ["html", "css", "js"],
        "available" => true
    ],
    [
        "id" => 2,
        "name" => "Mariam",
        "lastname" => "Abashidze",
        "country"  => "Georgia",
        "skills" => ["html"],
        "available" => true
    ],
    [
        "id" => 3,
        "name" => "Andria",
        "lastname" => "Beridze",
        "country"  => "USA",
        "skills" => [],
        "available" => false
    ],
    [
        "id" => 4,
        "name" => "Nino",
        "lastname" => "Nozadze",
        "country"  => "Germany",
        "skills" => ["Js", "css"],
        "available" => false
    ]
];
?>
<table class='table'>
    <thead>
        <th>name</th>
        <th>lastname</th>
        <th>country</th>
        <th>skills</th>
        <th>available for position</th>
    </thead>
    <?php foreach($data as $key => $value){?>
    <tbody>
        <td><?php echo $value['name']?></td>
        <td><?php echo $value['lastname']?></td>
        <td><?php echo $value['country']?></td>
        <td></td>
        <td></td>
    </tbody>
    <?php } ?>
    <!-- if(is_array($value)) continue;  ?? -->
</body>
</html>