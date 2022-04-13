<?php
include("tugas1.php");
    if(isset($_REQUEST['submit'])){
        $suhu=$_REQUEST['suhu'];
        $konversi=$_REQUEST['konversi'];

    if($konversi=="celcius"){
        $hasil=($suhu * (9/5) + 32);
        echo "Hasil Konversi: <br>
        &degF = (9/5) x &degC + 32 <br>
        &degF = (9/5) x $suhu&deg + 32 <br>
        &degF = $hasil&deg";
        
    }else if($konversi=="fahrenheit"){
        $hasil=($suhu - 32) * (5/9);
        echo "Hasil Konversi: <br>
        &degC = (5/9) x (&degF - 32) <br>
        &degC = (5/9) x ($suhu&deg - 32) <br>
        &degC = $hasil&deg";
    }
}
