<?php
    include 'api.php';
    $hero1Name = $_GET['hero1'] ?? '';
    $hero2Name = $_GET['hero2'] ?? '';
    $hero1 = $hero2 = [];
    if($hero1Name && $hero2Name){
        $hero1 = searchSuperhero($hero1Name)[0] ?? [];
        $hero2 = searchSuperhero($hero2Name)[0] ?? [];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super-herói | Comparar Super-heróis</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/png" href="./img/favicon.png"/>
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl text-center mb-8">Comparar Super-heróis</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-2xl mb-2"><?= htmlspecialchars($hero1['name'] ?? 'Herói 1 Não Encontrado') ?></h2>
                    <p>ID: <?= htmlspecialchars($hero1['id'] ?? '') ?></p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-2xl mb-2"><?= htmlspecialchars($hero2['name'] ?? 'Herói 2 Não Encontrado') ?></h2>
                    <p>ID: <?= htmlspecialchars($hero2['id'] ?? '') ?></p>
                </div>
            </div>
        </div>
    </body>
</html>