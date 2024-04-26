<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/style.css" as="style" />
    <link rel="preload" href="css/normalize.css" as="style" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="ccs/normalize.css" rel="stylesheet" />
    <title>Galeria</title>
</head>

<body>
    <?php
    function validaFoto($foto)
    {
        $bandera = false;
        if (preg_match("/[Jj][Pp][Ee][Gg]$/", $foto)) $bandera = true;
        if (preg_match("/[Jj][Pp][Gg]$/", $foto)) $bandera = true;
        if (preg_match("/[Gg][Ii][Ff]$/", $foto)) $bandera = true;
        if (preg_match("/[Pp][Nn][Gg]$/", $foto)) $bandera = true;
        return $bandera;
    }
    $dir = opendir("../img/Certifications");
    $numRen = 1;
    if ($dir) {
        print "<table border='1'>";
        print "<tr>";
        print "<th>Imagen</th>";
        print "<th>Nombre Archivo</th>";
        print "</tr>";
        print "<tr>";
        $i = 0;
        while (false != ($foto = readdir($dir))) {
            if ($foto != "." && $foto != ".." && validaFoto($foto)) {
                if ($i == $numRen) {
                    $i = 0;
                    print "</tr>";
                    echo "<tr>";
                }
                $i++;
                $archivo = "../img/Certifications/" . $foto;
                $info = getimagesize($archivo);
                echo "<td>";
                echo "<img/Certifications src='../img/Certifications/$foto' width='450px' height='250px'";
                echo "</td>";
                echo "<td>";
                echo $foto;
                echo "</td>";


                //print $foto."<br>";
            }
        }
        print "</tr>";
        print "</table>";
    } else {
        echo "Error al encontrar el directorio";
    }
    ?>
    <p style="font-size:larger">If you want to see more about my certifications you can click Linkedin button</p>
    <svg style="float:left;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 80 80">
        <a href="https://www.linkedin.com/in/jean-steven-solano-bone-698673169/">
            <path fill="#0288D1" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path>
            <path fill="#FFF" d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z"></path>
        </a>
    </svg>
</body>

</html>