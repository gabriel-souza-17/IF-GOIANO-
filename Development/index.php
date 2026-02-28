<?php

include 'utterances.php';

$id = isset($_GET['id']) ? $_GET['id'] : 1;

if (!isset($utterances[$id])) {
    echo "Exercício não encontrado.";
    exit;
}

$exercicio = $utterances[$id];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $exercicio["titulo"]; ?></title>
</head>
<body>

<h1><?php echo $exercicio["titulo"]; ?></h1>
<p><?php echo $exercicio["descricao"]; ?></p>

<hr>

<h2>Executar Lógica</h2>
<a href="Exercises/logicafuzzy<?php echo $id; ?>.php">
    Executar Exercício
</a>

<hr>

<h3>Trocar exercício:</h3>

<?php foreach ($utterances as $id => $ex) { ?>
    <a href="?id=<?php echo $id; ?>">
        <?php echo $ex["titulo"]; ?>
    </a><br>
<?php } ?>

</body>
</html>