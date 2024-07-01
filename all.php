<?php
    include 'api.php';
    $page = $_GET['page'] ?? 1;
    $perPage = 20;
    $heroes = getAllSuperheroes($page, $perPage);
    $totalHeroes = getTotalSuperheroes();
    $totalPages = ceil($totalHeroes / $perPage);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super-herói | Todos os Super-heróis</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/png" href="./img/favicon.png"/>
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl text-center mb-8">Todos os Super-heróis</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <?php foreach ($heroes as $hero): ?>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-2xl mb-2"><?= htmlspecialchars($hero['name']) ?></h2>
                    <p>ID: <?= htmlspecialchars($hero['id']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-4 text-center">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <a href="all.php?page=<?= $i ?>" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded"><?= $i ?></a>
                <?php endfor; ?>
            </div>
        </div>
    </body>
</html>