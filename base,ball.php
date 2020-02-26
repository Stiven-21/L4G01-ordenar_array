<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Autor: James Estiven Cordoba Botina <br><br>"; 
    $Entrada=array("baseball","cat,bas,hol,base,rar,pull,ball");
    $array=explode(",",$Entrada[1]);
    echo "Entrada: ";
    for($i=0;$i<count($Entrada);$i++)
    {
        echo $Entrada[$i]."\n";
    }
    echo "<br>";
    $palabra="";
    for($i=0;$i<count($array);$i++)
    {
        for($j=0;$j<count($array);$j++)
        {
            if ($j!=$i)
            {
                $palabra=$array[$i].$array[$j];
                if ($palabra==$Entrada[0])
                {
                    echo "Salida: ".$array[$i].",".$array[$j];
                }
            }
        }
    }
    ?>
</body>
</html>