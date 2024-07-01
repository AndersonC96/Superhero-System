<?php
    include 'api.php';
    $name = $_GET['name'] ?? '';
    $results = [];
    if ($name){
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
        <style>
            body{
                background-color: #1a202c;
                color: #cbd5e0;
            }
            .card{
                background-color: rgba(45, 55, 72, 0.9);
                border-radius: 0.5rem;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                padding: 1.5rem;
                transition: all 0.3s ease-in-out;
            }
            .card img{
                display: block;
                margin: 0 auto;
                width: 100px;
                height: 100px;
                border-radius: 50%;
            }
            .btn{
                display: inline-block;
                padding: 0.5rem 1rem;
                font-size: 1rem;
                color: #fff;
                background-color: #3b82f6;
                border-radius: 0.375rem;
                text-align: center;
                transition: background-color 0.3s;
            }
            .btn:hover{
                background-color: #2563eb;
            }
        </style>
    </head>
    <body class="min-h-screen flex items-center justify-center transition">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl text-center mb-8">Resultado da Pesquisa</h1>
            <div class="text-center mb-4">
                <a href="index.php" class="btn">Voltar à Home</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($results as $hero): ?>
                    <div class="card">
                        <div class="flex justify-center mb-4">
                            <img src="<?= htmlspecialchars($hero['image']['url']) ?>" alt="<?= htmlspecialchars($hero['name']) ?>">
                        </div>
                        <h2 class="text-2xl font-semibold text-center mb-4">
                            <a href="hero.php?id=<?= htmlspecialchars($hero['id']) ?>" class="text-blue-400 hover:underline">
                                <?= htmlspecialchars($hero['name']) ?> (<?= htmlspecialchars($hero['biography']['full-name'] ?? 'N/A') ?>)
                            </a>
                        </h2>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>