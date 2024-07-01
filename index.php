<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super-herói</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/png" href="./img/favicon.png"/>
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <h1 class="text-4xl text-center mb-8">Super-herói</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-2xl mb-4">Pesquisar Super-herói</h2>
                    <form action="search.php" method="get">
                        <input type="text" name="name" class="border p-2 w-full" placeholder="Digite o nome do super-herói">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Procurar</button>
                    </form>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-2xl mb-4">Todos os Super-heróis</h2>
                    <a href="all.php?page=1" class="bg-green-500 text-white px-4 py-2 mt-2 rounded block text-center">Ver Todos</a>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-2xl mb-4">Comparar Super-heróis</h2>
                    <form action="compare.php" method="get">
                        <input type="text" name="hero1" class="border p-2 w-full mb-2" placeholder="Digite o nome do primeiro super-herói">
                        <input type="text" name="hero2" class="border p-2 w-full mb-2" placeholder="Digite o nome do segundo super-herói">
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 mt-2 rounded">Comparar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>