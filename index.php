<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php
    $nome = 'Mariello';
    $mioParagrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci enim nesciunt nisi animi excepturi ut. Recusandae consequuntur voluptatem explicabo vitae, eius quae magnam ea, dolore aut cupiditate molestiae rem natus.';
    // $censura = $_GET['dolor'];
    // $_GET['censura'];
    $nuovoParagrafo = str_replace( $_GET['censura'], '***', $mioParagrafo);

    $mioArray = ['Alberto', 'Bobo', 'Cristiano', 'Davide'];
    var_dump($mioArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP bad words</title>
</head>
<body>

    <h1>prova php</h1>
    <h2>inserisco la variabile</h2>
    <h3> <?php echo $nome; ?> </h3>

    <br><br><br>

    <h4>Creazione paragrafo di testo tramite comando echo e stampa variabile</h4>
    <p> <?php echo($mioParagrafo); ?> </p>

    <h4>Stampa lunghezza paragrafo:</h4>

    <h4>La lunghezza della mia variabile paragrafo è: <?php echo(strlen($mioParagrafo)); ?> caratteri.</h4>

    <br><br><br>

    <h4>PARAGRAFO MODIFICATO:</h4>
    <p> <?php echo $nuovoParagrafo ?> </p>

    <h4>Stampa lunghezza paragrafo:</h4>

    <h4>La lunghezza della mia variabile paragrafo modificata è: <?php echo(strlen($nuovoParagrafo)); ?> caratteri.</h4>



</body>
</html>