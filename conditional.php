<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional</title>
</head>
<body>
    <?php
        // $a = 1;
        // $b = 10;
        // echo $a + $b;
        // $array = array("Satu", "Dua", "Tiga");
        // $array2 = array(1, 2, 3);
        // echo $array[1]."<br>".$array2[1];

        $input = 65;

        if ($input>=80 && $input<=100) {
            echo "Nilai A";
        } else if($input>=60 && $input<=79){
            echo "Nilai B";
        } else if($input>0 && $input<=59){
            echo "Nilai C";
        } else{
            echo "Nilai belum masuk";
        }
        
        echo "<br>";

        $performa = "Bagus";
        $tampilan = "Bagus";

        if ($performa=="Bagus" && $tampilan=="Bagus") {
            echo "Bagus";
        } else if($performa=="Bagus" || $tampilan=="Bagus"){
            echo "Menengah";
        } else if($performa=="Jelek" && $tampilan=="Jelek"){
            echo "Jelek";
        }
        
    ?>
</body>
</html>