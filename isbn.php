<!DOCTYPE html>
<html>
<head>
	<title>Cek Karakter Uji ISBN</title>
</head>
<body>
    <h1><strong><center>CEK KARAKTER UJI ISBN</center></strong></h1>
	<form action="" method="post" id="form">
        <span>
            <b>Masukkan Angka:</b><br>
        </span>
        <input type="text" name="data" id="data" required minlength="9" pattern="[0-9]+"  title="Hanya Angka, 9 Karakter" maxlength="9">
        <button id="btn">Cek</button><br><br>
	</form>
    <?php 
        if (isset($_POST['data'])) {
            $data = $_POST['data'];
            $hasil = 0;
            echo "<b>Input: $data</b><br>";
            for ($r = 0; $r <= strlen($data) - 1; $r++) {
                $tambah = ($r+1) * $data[$r];
                $hasil = $hasil + (($r+1) * $data[$r]);
                echo "Iterasi ke ",$r+1,": ", $r+1,"*",$data[$r],"= ",$tambah,"<br>";
            }
                echo "<b>Hasil: $hasil</b>";
                $angkaUji = $hasil%11;
                if ($angkaUji !=10){
                    echo "<br><b>Karakter Uji: $angkaUji </b>";
                    echo "<br><b>Output: $data",$angkaUji,"</b>";
                }
                else {
                    echo "<br><b>Karakter Uji: X </b>";
                    echo "<br><b>Output: $data","X</b>";
                }
        }
    ?>
    <p style="color:red;font-size:100px;text-align:center; font-weight:bold;">= Aezo27 =<p>
</body>
</html>