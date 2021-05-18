<!-- Snack 2 -->
<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

 <?php

    // GET 
    $name = $_GET['name'];

    $email = $_GET['email'];

    $age = $_GET['age'];

    // Lenght of $name
    $lenghtName = strlen($name);

    // Text that will be printed
    $text = 'Accesso Riuscito';

    if( $lenghtName <= 3) {
        
        $text = 'Accesso Negato';

    } else if( strpos($email, '@') === false || strpos($email, '.') === false ) {

        $text = 'Accesso Negato';
    
    } else if ( is_numeric($age) === false ) {

        $text = 'Accesso Negato';

    }

    // echo($text);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Snack-2</title>

 </head>
 <body>
     
    <h2 style="text-align: center">Verify Access</h2>

    <h4>Name: <?php echo($name) ?></h4>
    <h4>Email: <?php echo($email) ?></h4>
    <h4>Age: <?php echo($age) ?></h4>

    <!-- verify access-->
    <h3 style="text-align: center; text-transform: uppercase"><?php echo($text) ?></h3>

 </body>
 </html>
