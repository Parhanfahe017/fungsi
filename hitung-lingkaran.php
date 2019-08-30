<?php
if(isset($_POST['submit'])){
    $jari2 = $_POST['jari2'];
    
    function keliling_lingkaran($sj){
        $kel = 2*3.14*$sj;
        return $kel;
    }
    function luas_lingkaran($sb){
        $luas = 3.14*$sj*sb;
        return $luas;
    }
    $kel = keliling_lingkaran ($jari2);
         echo "keliling lingkaran $kel";
    $luas = luas_lingkaran ($jari2);
         echo "luas lingkaran $luas";
}
?>
	