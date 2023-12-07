<?php
    $fichier = file_get_contents('citations.json');
    $citations = json_decode($fichier, true);

    $total = count($citations);
    $i = mt_rand(0, $total - 1);

    $texteCitation = $citations[$i]['text'];
    $auteurCitation = isset($citations[$i]['author']) ? $citations[$i]['author'] : 'Auteur inconnu';

    $citation = '"' . $texteCitation . '" - ' . $auteurCitation;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citations Pages</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <blockquote>
        <p><?php echo $citation; ?></p>
    </blockquote>
    <section>
        <p><strong style:"color:#000">Citation</strong> : <?= $texteCitation ?></p>
        <p><strong> Auteur</strong> : <?= $auteurCitation ?></p>
    </section>
</body>
</html>
