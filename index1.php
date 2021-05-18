<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
 punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
 Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60  -->

<?php

// NBA Sat 15/5/21
    $arrayCalendar = [
        [
            'home' => 'Wizards',
            'visitingTeam' => 'Cavaliers',
            'home_point' => 120,
            'visitingTeam_point' => 105,
        ],
        [
            'home' => 'Pistons',
            'visitingTeam' => 'Nuggets',
            'home_point' => 91,
            'visitingTeam_point' => 104,
        ],
        [
            'home' => 'Thander',
            'visitingTeam' => 'Jazz',
            'home_point' => 93,
            'visitingTeam_point' => 109,
        ],
        [
            'home' => 'Sixers',
            'visitingTeam' => 'Magic',
            'home_point' => 122,
            'visitingTeam_point' => 97,
        ],
        [
            'home' => 'Maveriks',
            'visitingTeam' => 'Raptors',
            'home_point' => 114,
            'visitingTeam_point' => 110,
        ],
        [
            'home' => 'Rockets',
            'visitingTeam' => 'Clippers',
            'home_point' => 122,
            'visitingTeam_point' => 115,
        ],
        [
            'home' => 'Grizzlies',
            'visitingTeam' => 'Kings',
            'home_point' => 107,
            'visitingTeam_point' => 106,
        ],
        [
            'home' => 'Warriors',
            'visitingTeam' => 'Pelicans',
            'home_point' => 125,
            'visitingTeam_point' => 122,
        ],
        [
            'home' => 'Nets',
            'visitingTeam' => 'Bulls',
            'home_point' => 105,
            'visitingTeam_point' => 91,
        ],
        [
            'home' => 'Knicks',
            'visitingTeam' => 'Hornets',
            'home_point' => 118,
            'visitingTeam_point' => 109,
        ],
        [
            'home' => 'Pacers',
            'visitingTeam' => 'Lakers',
            'home_point' => 115,
            'visitingTeam_point' => 122,
        ],
        [
            'home' => 'Timberwolves',
            'visitingTeam' => 'Celtics',
            'home_point' => 108,
            'visitingTeam_point' => 124,
        ],
        [
            'home' => 'Spurs',
            'visitingTeam' => 'Suns',
            'home_point' => 103,
            'visitingTeam_point' => 140,
        ]
    ];

    // var_dump($arrayCalendar);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Snack-1</title>

</head>
<body>

    <h2 style="text-align: center">NBA matches Saturday 15/05/2021</h2>

    <ul>
    
    <?php for($i = 0; $i < count ($arrayCalendar); $i++) { ?>
        <?php $match = $arrayCalendar[$i];?>
         <!-- <?php var_dump($match)?> -->

        

        <li style=" padding: 10px 0">
         <?php echo $match['home'] ?> - <?php echo $match['visitingTeam'] ?> | <?php echo $match['home_point'] ?>-<?php echo $match['visitingTeam_point'] ?>
        </li>

    <?php } ?>
    
    </ul>

</body>
</html>