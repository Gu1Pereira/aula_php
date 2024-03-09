<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de Filmes</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Filmes 🎥</h1>
    <div class="lista">
        <?php
        $filmes = ["Vingadores - Ultimato", "Pulp Fiction", "Kill Bill", "O Maskara" ,"O Massacre da Serra Elétrica"];
        $capas = ["Vingadores.jpg", "Pulp.jpg", "Kill.jpg", "Maskara.jpg", "serra-eletrica.png"];
        
        $numero_filmes = count($filmes);
        $contador = 0;
        while($contador < $numero_filmes){
            echo "<img src ='$capas[$contador]'>";
            echo "<br> $filmes[$contador] <br><br>";

            $contador++;
        }
        
        
        ?>
    </div>
</body>
</html>