<!DOCTYPE HTML>
<html>
<head>
    <title> LIST BARANG </title>
        <style>
            h1 {
                text-align : center;
                color : white;
            }
            img {
                width : 320px;
            }
            .elden {
                margin-left : 600px;
            }
            .mid {
                text-align : center;
                color : white;
            }
            body {
                background-image: url('elden-ring.gif');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
</head>
        <body>
            <h1> ELDEN RING </h1>
            <div class="elden">
            <img src ="elden.jpg">
        </div>
            <div class ="mid">
                <?php
                $name     = "Elden Ring";
                $kode     = "ERDS9000";
                $spek     = "Intel/AMD";
                $harga    = "Rp 1.000.000";
                $ekpedisi = "SiCepat";

                echo "<br><br>Elden Ring<br>";
                echo "Kode Barang        : ".$kode."<br>";
                echo "spek barang        : ".$spek."<br>";
                echo "Harga Barang       : ".$harga."<br>";
                echo "Ekspedisi barang   : ".$ekpedisi."<br>";
                
                ?>
            </div>
        </body>
</html>
   

