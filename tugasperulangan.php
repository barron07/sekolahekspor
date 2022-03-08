<?php 

    $data = [
        ['nama' => 'Bambang', 'mtk' => 85, 'sejarah' => 90],
        ['nama' => 'Paijan', 'mtk' => 70, 'sejarah' => 73],
        ['nama' => 'Bagyo', 'mtk' => 95, 'sejarah' => 68],
        ['nama' => 'Jatmiko', 'mtk' => 50, 'sejarah' => 66],
        ['nama' => 'Mahmud', 'mtk' => 86, 'sejarah' => 75],
        ['nama' => 'Marman', 'mtk' => 100, 'sejarah' => 87],
        ['nama' => 'Yudi', 'mtk' => 91, 'sejarah' => 50],
        ['nama' => 'Sudimoro', 'mtk' => 100, 'sejarah' => 100],
        ['nama' => 'Yanto', 'mtk' => 80, 'sejarah' => 77],
        ['nama' => 'Joko', 'mtk' => 94, 'sejarah' => 87]
    ];

    echo $data['nama'];
    foreach ($data as $d) {
        echo $d['nama'];
        echo '<br>';
        if ($d['mtk']>=80 && $d['mtk']<=100) {
            echo "Nilai matematika A";
        } else if($d['mtk']>=60 && $d['mtk']<=79){
            echo "Nilai matematika B";
        } else if($d['mtk']>0 && $d['mtk']<=59){
            echo "Nilai matematika C";
        } else{
            echo "Nilai matematika belum masuk";
        }
        echo '<br>';
        if ($d['sejarah']>=80 && $d['sejarah']<=100) {
            echo "Nilai sejarah A";
        } else if($d['sejarah']>=60 && $d['sejarah']<=79){
            echo "Nilai sejarah B";
        } else if($d['sejarah']>0 && $d['sejarah']<=59){
            echo "Nilai sejarah C";
        } else{
            echo "Nilai sejarah belum masuk";
        }
        echo '<br>';
        echo '<br>';
    }

?>