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
        <h1>Metodo B</h1>
    <?php 
        $array = array(
            array(
                25,
                10,
                8,
                2,
                30
            ),
            array(
                15,
                5,
                4,
                8,
                15
            ),
            array(
                10,
                2,
                1,
                4,
                10
            )
        );
        openTable();
        muestraDatosHeader("Ingles");
        muestraDatosBody("Basico",$array[0][0]);
        muestraDatosBody("Intermedio",$array[1][0]);
        muestraDatosBody("Avanzado",$array[2][0]);
        closeTable();
        openTable();
        muestraDatosHeader("Frances");
        muestraDatosBody("Basico",$array[0][1]);
        muestraDatosBody("Intermedio",$array[1][1]);
        muestraDatosBody("Avanzado",$array[2][1]);
        closeTable();
        openTable();
        muestraDatosHeader("Aleman");
        muestraDatosBody("Basico",$array[0][2]);
        muestraDatosBody("Intermedio",$array[1][2]);
        muestraDatosBody("Avanzado",$array[2][2]);
        closeTable();
        openTable();
        muestraDatosHeader("Ruso");
        muestraDatosBody("Basico",$array[0][3]);
        muestraDatosBody("Intermedio",$array[1][3]);
        muestraDatosBody("Avanzado",$array[2][3]);
        closeTable();
        openTable();
        muestraDatosHeader("Chino");
        muestraDatosBody("Basico",$array[0][4]);
        muestraDatosBody("Intermedio",$array[1][4]);
        muestraDatosBody("Avanzado",$array[2][4]);
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