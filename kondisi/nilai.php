<?php
function tentukanPredikat($nilai) {
    if ($nilai > 90) {
        return "A+";
    } elseif ($nilai > 80 && $nilai <= 90) {
        return "A";
    } elseif ($nilai > 70 && $nilai <= 80) {
        return "B+";
    } elseif ($nilai > 60 && $nilai <= 70) {
        return "B";
    } elseif ($nilai > 50 && $nilai <= 60) {
        return "C+";
    } elseif ($nilai > 40 && $nilai <= 50) {
        return "C";
    } elseif ($nilai > 30 && $nilai <= 40) {
        return "D";
    } else {
        return "E";
    }
}

$nilai = 80;
$predikat = tentukanPredikat($nilai);
echo "Nilai $nilai mendapat Predikat $predikat";
    ?>