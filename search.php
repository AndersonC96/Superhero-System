<?php
    include 'api.php';
    $name = $_GET['name'] ?? '';
    $results = [];
    if($name){
        $results = searchSuperhero($name);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super-herói | Resultado da Pesquisa</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/png" href="./img/favicon.png"/>
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl text-center mb-8">Resultado da Pesquisas</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <?php foreach ($results as $hero): ?>
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="text-2xl mb-2"><?= htmlspecialchars($hero['name']) ?></h2>
                        <p>ID: <?= htmlspecialchars($hero['id']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>