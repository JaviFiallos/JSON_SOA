<?php


//1.- Listar información: Listar el título, año y duración de todas las películas.
$jsonData = file_get_contents('movies.json');
$movies = json_decode($jsonData, true);
if ($movies === null) {
    echo "Error al decodificar el archivo JSON.";
} else {
    echo "<h2>Lista de Títulos, Años y Duraciones</h2>";
    foreach ($movies as $movie) {
        $title = $movie['title'];
        $year = $movie['year'];
        $duration = $movie['duration'];
        echo "Título: $title, Año: $year, Duración: $duration<br>";
    }
}

//2.-Contar información: Mostrar los títulos de las películas y el número de actores/actrices que tiene cada una.

echo "<h2>Títulos y número de actores/actrices</h2>";
foreach ($movies as $movie) {
    $title = $movie['title'];
    $actorCount = count($movie['actors']);
    echo "Título: $title, Número de actores: $actorCount<br>";
}

//3.-Buscar o filtrar información: Mostrar las películas que contengan en la sinopsis dos palabras dadas.

function buscarPeliculasPorPalabras($movies, $palabra1, $palabra2) {
    echo "<h2>Películas que contienen '$palabra1' y '$palabra2' en la sinopsis</h2>";
    foreach ($movies as $movie) {
        $storyline = $movie['storyline'];
        if (stripos($storyline, $palabra1) !== false && stripos($storyline, $palabra2) !== false) {
            echo "Título: " . $movie['title'] . "<br>";
        }
    }
}

buscarPeliculasPorPalabras($movies, 'prisoner', 'crime');

//4.- Buscar información relacionada: Mostrar las películas en las que ha trabajado un actor dado.

function buscarPeliculasPorActor($movies, $actor) {
    echo "<h2>Películas en las que ha trabajado $actor</h2>";
    
    foreach ($movies as $movie) {
        $actorEncontrado = false; 
        foreach ($movie['actors'] as $movieActor) {
            if ($movieActor === $actor) {
                $actorEncontrado = true; 
                break; 
            }
        }
        if ($actorEncontrado) {
            echo "Título: " . $movie['title'] . "<br>";
        }
    }
}
buscarPeliculasPorActor($movies, 'Morgan Freeman');

?>