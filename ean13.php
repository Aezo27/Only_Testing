<!DOCTYPE html>
<html>
<head>
	<title>Cek Karakter Uji EAN-13</title>
</head>
<body>
    <h1><strong><center>CEK KARAKTER UJI EAN-13</center></strong></h1>
	<form action="" method="post" id="form">
        <span>
            <b>Masukkan Angka:</b><br>
        </span>
        <input type="text" name="data" id="data" required minlength="12" pattern="[0-9]+"  title="Hanya Angka, 12 Karakter" maxlength="12">
        <button id="btn">Cek</button><br><br>
	</form>
    <?php 
        if (isset($_POST['data'])) {
            // genap
            $a = substr($_POST['data'],0,1);
            $b = substr($_POST['data'],2,1);
            $c = substr($_POST['data'],4,1);
            $d = substr($_POST['data'],6,1);
            $e = substr($_POST['data'],8,1);
            $f = substr($_POST['data'],10,1);
            $genap = $f + $e + $d + $c + $b + $a;

            // Ganjil
            $g = substr($_POST['data'],1,1);
            $h = substr($_POST['data'],3,1);
            $i = substr($_POST['data'],5,1);
            $j = substr($_POST['data'],7,1);
            $k = substr($_POST['data'],9,1);
            $l = substr($_POST['data'],11,1);
            $ganjil = $l + $k + $j + $i + $h + $g;
            $ganjil1 = $ganjil*3;
            
            $hasil = $genap+$ganjil1;
            $input = $_POST['data'];
            $sisa = $hasil%10;
            $angkaUji = 10-$sisa;

            echo "<b>Input: $input","_</b><br><br>";
            echo "<b>Rumus:</b><br>";
            echo "<b>Ganjil:</b> $l + $k + $j + $i + $h + $g = $ganjil x 3 = $ganjil1<br>";
            echo "<b>Genap:</b> $f + $e + $d + $c + $b + $a = .......... = $genap<br>";
            echo "============================== + <br>";
            echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$hasil";
            echo "<br><b>Karakter Uji: $angkaUji </b>";
            echo "<br><b>Output: $input","$angkaUji</b>";
            
        }
    ?>
    <p style="color:red;font-size:100px;text-align:center; font-weight:bold;">= Aezo27 =<p>
</body>
</html>