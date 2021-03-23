<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Ejercicio 1</title>
</head>
<body>
    <div class="container">
    <br>
        <h1>Metodo A</h1>
    <?php 
        $array = array(
            "basico" => array(
                "Ingles" => 25,
                "Frances" => 10,
                "Aleman" => 8,
                "Ruso" => 12,
                "Chino" => 30
            ),
            "intermedio" => array(
                "Ingles" => 15,
                "Frances" => 5,
                "Aleman" => 4,
                "Ruso" => 8,
                "Chino" => 15
            ),
            "avanzado" => array(
                "Ingles" => 10,
                "Frances" => 2,
                "Aleman" => 1,
                "Ruso" => 4,
                "Chino" => 10
            )
        );

        openTable();
        muestraDatosHeader("Ingles");
        muestraDatosBody("Basico",$array["basico"]["Ingles"]);
        muestraDatosBody("Intermedio",$array["intermedio"]["Ingles"]);
        muestraDatosBody("Avanzado",$array["avanzado"]["Ingles"]);
        closeTable();
        openTable();
        muestraDatosHeader("Frances");
        muestraDatosBody("Basico",$array["basico"]["Frances"]);
        muestraDatosBody("Intermedio",$array["intermedio"]["Frances"]);
        muestraDatosBody("Avanzado",$array["avanzado"]["Frances"]);
        closeTable();
        openTable();
        muestraDatosHeader("Aleman");
        muestraDatosBody("Basico",$array["basico"]["Aleman"]);
        muestraDatosBody("Intermedio",$array["intermedio"]["Aleman"]);
        muestraDatosBody("Avanzado",$array["avanzado"]["Aleman"]);
        closeTable();
        openTable();
        muestraDatosHeader("Ruso");
        muestraDatosBody("Basico",$array["basico"]["Ruso"]);
        muestraDatosBody("Intermedio",$array["intermedio"]["Ruso"]);
        muestraDatosBody("Avanzado",$array["avanzado"]["Ruso"]);
        closeTable();
        openTable();
        muestraDatosHeader("Chino");
        muestraDatosBody("Basico",$array["basico"]["Chino"]);
        muestraDatosBody("Intermedio",$array["intermedio"]["Chino"]);
        muestraDatosBody("Avanzado",$array["avanzado"]["Chino"]);
        closeTable();
       
        function muestraDatosHeader($key){     
            echo "<thead><tr><th colspan=\"2\">".$key."</th></tr></thead>";
        }
        function muestraDatosBody($val,$key2){
            echo "<tr><td>".$val."</td><td>".$key2."</td></tr>";
        }
        function openTable(){
            echo "<table class=\"table table-info\">";
        }
        function closeTable(){
            echo "</table>";
        }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>