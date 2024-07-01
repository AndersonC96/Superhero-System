<?php
    include 'api.php';
    $id = $_GET['id'] ?? '';
    $hero = [];
    if($id){
        $hero = getSuperheroById($id);
    }
    $name = $_GET['name'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super-herói | Informações</title>
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
            <h1 class="text-4xl text-center mb-8">Informações do Super-herói</h1>
            <div class="text-center mb-4">
                <a href="search.php?name=<?= urlencode($name) ?>" class="btn">Voltar à Pesquisa</a>
            </div>
            <?php if ($hero): ?>
                <div class="card mx-auto max-w-md">
                    <div class="flex justify-center mb-4">
                        <img src="<?= htmlspecialchars($hero['image']['url']) ?>" alt="<?= htmlspecialchars($hero['name']) ?>">
                    </div>
                    <h2 class="text-3xl font-semibold text-center mb-4"><?= htmlspecialchars($hero['name']) ?></h2>
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">Powerstats</h3>
                        <?php foreach ($hero['powerstats'] as $stat => $value): ?>
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
                        <p><strong>Nome Completo:</strong> <?= htmlspecialchars($hero['biography']['full-name'] ?? 'N/A') ?></p>
                        <p><strong>Alter Egos:</strong> <?= htmlspecialchars($hero['biography']['alter-egos'] ?? 'N/A') ?></p>
                        <p><strong>Apelidos:</strong> <?= htmlspecialchars(is_array($hero['biography']['aliases']) ? implode(', ', $hero['biography']['aliases']) : $hero['biography']['aliases'] ?? 'N/A') ?></p>
                        <p><strong>Local de nascimento:</strong> <?= htmlspecialchars($hero['biography']['place-of-birth'] ?? 'N/A') ?></p>
                        <p><strong>Primeira Aparição:</strong> <?= htmlspecialchars($hero['biography']['first-appearance'] ?? 'N/A') ?></p>
                        <p><strong>Publicadora:</strong> <?= htmlspecialchars($hero['biography']['publisher'] ?? 'N/A') ?></p>
                        <p><strong>Alinhamento:</strong> <?= htmlspecialchars($hero['biography']['alignment'] ?? 'N/A') ?></p>
                    </div>
                    <hr class="my-4">
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">Aparência</h3>
                        <p><strong>Gênero:</strong> <?= htmlspecialchars($hero['appearance']['gender'] ?? 'N/A') ?></p>
                        <p><strong>Raça:</strong> <?= htmlspecialchars($hero['appearance']['race'] ?? 'N/A') ?></p>
                        <p><strong>Altura:</strong> <?= htmlspecialchars(is_array($hero['appearance']['height']) ? implode(', ', $hero['appearance']['height']) : $hero['appearance']['height'] ?? 'N/A') ?></p>
                        <p><strong>Peso:</strong> <?= htmlspecialchars(is_array($hero['appearance']['weight']) ? implode(', ', $hero['appearance']['weight']) : $hero['appearance']['weight'] ?? 'N/A') ?></p>
                        <p><strong>Cor dos olhos:</strong> <?= htmlspecialchars($hero['appearance']['eye-color'] ?? 'N/A') ?></p>
                        <p><strong>Cor dos cabelos:</strong> <?= htmlspecialchars($hero['appearance']['hair-color'] ?? 'N/A') ?></p>
                    </div>
                    <hr class="my-4">
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">Trabalho</h3>
                        <p><strong>Ocupação:</strong> <?= htmlspecialchars($hero['work']['occupation'] ?? 'N/A') ?></p>
                        <p><strong>Base:</strong> <?= htmlspecialchars($hero['work']['base'] ?? 'N/A') ?></p>
                    </div>
                    <hr class="my-4">
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">Conexões</h3>
                        <p><strong>Grupos:</strong> <?= htmlspecialchars($hero['connections']['group-affiliation'] ?? 'N/A') ?></p>
                        <p><strong>Parentes:</strong> <?= htmlspecialchars($hero['connections']['relatives'] ?? 'N/A') ?></p>
                    </div>
                </div>
            <?php else: ?>
                <p class="text-center">Nenhum super-herói encontrado.</p>
            <?php endif; ?>
        </div>
    </body>
</html>