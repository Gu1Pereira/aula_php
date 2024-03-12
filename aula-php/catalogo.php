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
    <?php
    $banners = ["imagem-1.jpg","imagem-2.jpg","imagem-3.jpg","imagem-4.jpg"];
    $sorteio = rand(0,3);
    echo "<img src='$banners[$sorteio]' class='imagem-banner'>";
    ?>
    <div class="lista">
        <?php
        $filmes = ["Vingadores - Ultimato", "Pulp Fiction", "Kill Bill", "O Maskara" ,"O Massacre da Serra Elétrica","Terrifier" ];
        $capas = ["Vingadores.jpg", "Pulp.jpg", "Kill.jpg", "Maskara.jpg", "serra-eletrica.png","Terrifier.jpg"];
        
        $numero_filmes = count($filmes);
        $contador = 0;
        while($contador < $numero_filmes){
            echo "<div class='card'>";
            echo "<img src ='$capas[$contador]'>";
            echo "<br> $filmes[$contador]";
            echo "</div>";
            
            $contador++;
        }
        
        
        ?>
    </div>
</body>
</html>