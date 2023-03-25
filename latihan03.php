<?php 
    $opsi = "p1";

    if(isset($_GET["pg"])){
        $opsi = $_GET["pg"];
    }

    $judulpage = "" ;
    $konten = "" ;

    switch($opsi){
        case "p1":
            $judulpage = "page 1";
            $konten = "<h3> page 1 </h3> <p>isi dari page 1</p>";
            break;
        case "p2":
            $judulpage = "page 2";
            $konten = "<h3> page 2 </h3> <p>isi dari page 2</p>";
            break;
        case "p3":
            $judulpage = "page 3";
            $konten = "<h3> page 3 </h3> <p>isi dari page 3</p>";
            break;
        case "p4":
            $judulpage = "page 4";
            $konten = "<h3> page 4 </h3> <p>isi dari page 4</p>";
            break;
        default :
            $judulpage = "page 1";
            $konten = "<h3> page 1 </h3> <p>isi dari page 1</p>";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage;?></title>
</head>
<body>

    <a href="latihan03.php?pg=p1">page1</a> <a href="latihan03.php?pg=p2">page2</a> <a href="latihan03.php?pg=p3">page3</a> <a href="latihan03.php?pg=p4">page4</a>

    <?php
        echo $konten;
    ?>
</body>
</html>