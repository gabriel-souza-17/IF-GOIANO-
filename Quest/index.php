<?php
include 'exercicios.php';

$id = isset($_GET['id']) ? $_GET['id'] : 1;

if (!isset($exercicios[$id])) {
    echo "Exercício não encontrado.";
    exit;
}

$exercicio = $exercicios[$id];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $exercicio["titulo"]; ?></title>
</head>
<body>

<header>
    <h1><?php echo $exercicio["titulo"]; ?></h1>
</header>

<main>
    <p><?php echo $exercicio["descricao"]; ?></p>

    <hr>

    <h2>Trocar Exercício</h2>

    <?php foreach ($exercicios as $id => $ex) { ?>
        <a href="?id=<?php echo $id; ?>">
            <?php echo $ex["titulo"]; ?>
        </a>
        <br>
    <?php } ?>

</main>
</body>
</html>