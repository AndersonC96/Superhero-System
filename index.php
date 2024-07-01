<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super-herói</title>
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
                width: 50px;
                height: 50px;
            }
        </style>
    </head>
    <body class="min-h-screen flex items-center justify-center transition">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="card">
                    <div class="flex justify-center mb-4">
                        <img src="./img/batman.png" alt="Pesquisar Super-herói">
                    </div>
                    <h2 class="text-2xl font-semibold text-center mb-4">Pesquisar Super-herói</h2>
                    <form action="search.php" method="get">
                        <input type="text" name="name" class="border p-2 w-full mb-4 rounded" placeholder="Digite o nome do super-herói">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">Procurar</button>
                    </form>
                </div>
                <div class="card">
                    <div class="flex justify-center mb-4">
                        <img src="./img/green_lantern.png" alt="Todos os Super-heróis">
                    </div>
                    <h2 class="text-2xl font-semibold text-center mb-4">Todos os Super-heróis</h2>
                    <a href="all.php?page=1" class="bg-green-500 text-white px-4 py-2 rounded block text-center">Ver Todos</a>
                </div>
                <div class="card">
                    <div class="flex justify-center mb-4">
                        <img src="./img/iron-man.png" alt="Comparar Super-heróis">
                    </div>
                    <h2 class="text-2xl font-semibold text-center mb-4">Comparar Super-heróis</h2>
                    <form action="compare.php" method="get">
                        <input type="text" name="hero1" class="border p-2 w-full mb-4 rounded" placeholder="Digite o nome do primeiro super-herói">
                        <input type="text" name="hero2" class="border p-2 w-full mb-4 rounded" placeholder="Digite o nome do segundo super-herói">
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded w-full">Comparar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>