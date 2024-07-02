<?php
    include 'api.php';
    $hero1Name = $_GET['hero1'] ?? '';
    $hero2Name = $_GET['hero2'] ?? '';
    $hero1 = [];
    $hero2 = [];
    if($hero1Name){
        $results = searchSuperhero($hero1Name);
        if(count($results) > 0){
            $hero1 = $results[0];
        }
    }
    if($hero2Name){
        $results = searchSuperhero($hero2Name);
        if(count($results) > 0){
            $hero2 = $results[0];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super-herói | Comparar</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/png" href="./img/favicon.png"/>
        <style>
            body{
                background-color: #1a202c;
                color: #cbd5e0;
            }
            .card{
                background-color: rgba(45, 55, 72, 0.9); /* RGBA for transparency */
                border-radius: 0.5rem;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                padding: 1.5rem;
                transition: all 0.3s ease-in-out;
            }
            .card img{
                display: block;
                margin: 0 auto;
                width: 150px;
                height: 150px;
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
            .progress-bar{
                background-color: #4a5568;
                border-radius: 0.375rem;
                overflow: hidden;
            }
            .progress-bar-fill{
                background-color: #48bb78;
                height: 1rem;
                border-radius: 0.375rem;
                transition: width 0.3s;
            }
        </style>
    </head>
    <body class="min-h-screen flex items-center justify-center transition">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl text-center mb-8">Comparar Super-heróis</h1>
            <div class="text-center mb-4">
                <a href="index.php" class="btn">Voltar à Home</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php if ($hero1): ?>
                <div class="card">
                    <div class="flex justify-center mb-4">
                        <img src="<?= htmlspecialchars($hero1['image']['url']) ?>" alt="<?= htmlspecialchars($hero1['name']) ?>">
                    </div>
                    <h2 class="text-3xl font-semibold text-center mb-4"><?= htmlspecialchars($hero1['name']) ?></h2>
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">Powerstats</h3>
                        <?php foreach ($hero1['powerstats'] as $stat => $value): ?>
                            <div class="mb-2">
                                <span class="block text-sm font-medium"><?= ucfirst($stat) ?>: <?= htmlspecialchars($value) ?></span>
                                <div class="progress-bar mt-1">
                                    <div class="progress-bar-fill" style="width: <?= htmlspecialchars($value) ?>%;"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <hr class="my-4">
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">Biografia</h3>
                        <p><strong>Nome Completo:</strong> <?= htmlspecialchars($hero1['biography']['full-name'] ?? 'N/A') ?></p>
                        <p><strong>Alter Egos:</strong> <?= htmlspecialchars($hero1['biography']['alter-egos'] ?? 'N/A') ?></p>
                        <p><strong>Apelidos:</strong> <?= htmlspecialchars(is_array($hero1['biography']['aliases']) ? implode(', ', $hero1['biography']['aliases']) : $hero1['biography']['aliases'] ?? 'N/A') ?></p>
                        <p><strong>Local de nascimento:</strong> <?= htmlspecialchars($hero1['biography']['place-of-birth'] ?? 'N/A') ?></p>
                        <p><strong>Primeira Aparição:</strong> <?= htmlspecialchars($hero1['biography']['first-appearance'] ?? 'N/A') ?></p>
                        <p><strong>Publicadora:</strong> <?= htmlspecialchars($hero1['biography']['publisher'] ?? 'N/A') ?></p>
                        <p><strong>Alinhamento:</strong> <?= htmlspecialchars($hero1['biography']['alignment'] ?? 'N/A') ?></p>
                    </div>
                </div>
                <?php else: ?>
                <p class="text-center">Primeiro super-herói não encontrado.</p>
                <?php endif; ?>
                <?php if ($hero2): ?>
                <div class="card">
                    <div class="flex justify-center mb-4">
                        <img src="<?= htmlspecialchars($hero2['image']['url']) ?>" alt="<?= htmlspecialchars($hero2['name']) ?>">
                    </div>
                    <h2 class="text-3xl font-semibold text-center mb-4"><?= htmlspecialchars($hero2['name']) ?></h2>
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">Powerstats</h3>
                        <?php foreach ($hero2['powerstats'] as $stat => $value): ?>
                            <div class="mb-2">
                                <span class="block text-sm font-medium"><?= ucfirst($stat) ?>: <?= htmlspecialchars($value) ?></span>
                                <div class="progress-bar mt-1">
                                    <div class="progress-bar-fill" style="width: <?= htmlspecialchars($value) ?>%;"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <hr class="my-4">
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">Biografia</h3>
                        <p><strong>Nome Completo:</strong> <?= htmlspecialchars($hero2['biography']['full-name'] ?? 'N/A') ?></p>
                        <p><strong>Alter Egos:</strong> <?= htmlspecialchars($hero2['biography']['alter-egos'] ?? 'N/A') ?></p>
                        <p><strong>Apelidos:</strong> <?= htmlspecialchars(is_array($hero2['biography']['aliases']) ? implode(', ', $hero2['biography']['aliases']) : $hero2['biography']['aliases'] ?? 'N/A') ?></p>
                        <p><strong>Local de nascimento:</strong> <?= htmlspecialchars($hero2['biography']['place-of-birth'] ?? 'N/A') ?></p>
                        <p><strong>Primeira Aparição:</strong> <?= htmlspecialchars($hero2['biography']['first-appearance'] ?? 'N/A') ?></p>
                        <p><strong>Publicadora:</strong> <?= htmlspecialchars($hero2['biography']['publisher'] ?? 'N/A') ?></p>
                        <p><strong>Alinhamento:</strong> <?= htmlspecialchars($hero2['biography']['alignment'] ?? 'N/A') ?></p>
                    </div>
                </div>
                <?php else: ?>
                <p class="text-center">Segundo super-herói não encontrado.</p>
                <?php endif; ?>
            </div>
        </div>
    </body>
</html>