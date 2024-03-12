<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonato Paulista</title>
    <link rel="stylesheet" href="campeonato.css">
    <link rel="stylesheet" href="reset.css">
</head>
<body>
<h1 class="titulo">Times Campeonato Paulista</h1>
    
    <div class="lista">
        <?php
        $times = ["Internacional Limeira","São Caetano","Bota Fogo","Corinthians","São Bento","Guarani","Gremio","Ituano","Mirassol F.C","Palmeiras","Ponte Preta","RedBull Bragantino","E.C.Santo Andre","Santos","São Paulo"];

        $escudos = ["./img/AAinternacional.png","img/Associação_Desportiva_São_Caetano.png","img/Bota-Fogo.png","img/Corinthians.png","img/Esporte-Clube-São-Bento.png","img/Guarani.png","img/Gremio.png","img/Ituano.png","img/Mirassol_FC.png","img/Palmeiras.png","img/Ponte-Preta.png","img/RedBull-Bragantino.png","img/santoandre.png","img/Santos.png","img/São-Paulo.png"];
          
        $numero_times = count($times);
        $contador = 0;
        while($contador < $numero_times){
            echo "<div class='card'>";
            echo "<img src ='$escudos[$contador]'>";
            echo "<br> $times[$contador]";
            echo "</div>";
            
            $contador++;
        }
        
        
        ?>
    </div>
    
</body>
</html>