<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 6</title>
        <link rel="stylesheet" href="ui.css">
    </head>
    <body>
        <div class="flex-container">
            <h3>NILAI UJIAN SEKOLAH</h3>
            <hr class="hr"/>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <label>Nilai Matematika</label><br />
                <input class="input" type="text" name="mm" placeholder="Masukan Nilai Matematika...">
                <br />
                <br />
                <label>Nilai IPA</label><br />
                <input class="input" type="text" name="ipa" placeholder="Masukan Nilai IPA...">
                <br />
                <br />
                <label>Nilai Bahasa Indonesia</label><br />
                <input class="input" type="text" name="bi" placeholder="Masukan Nilai Bahasa Indonesia...">
                <br />
                <br />
                <label>Nilai Bahasa Inggris</label><br />
                <input class="input" type="text" name="bing" placeholder="Masukan Nilai Bahasa Inggris...">
                <br />
                <br />
                <button class="button" type="submit" name="submit">Cek Hasil</button>
                <br />
            </form>
            <?php
$nilai_akhir = "";
$kriteria = "";
if (isset($_POST['submit'])){
  $mm = $_POST['mm'];
  $ipa = $_POST['ipa'];
  $bi = $_POST['bi'];
  $bing = $_POST['bing'];
  $nilai_akhir = (0.6*$mm) + (0.3*$ipa) + (0.05*$bi) + (0.05*$bing);
  if(($nilai_akhir >= 100) || ($nilai_akhir < 0)) {
    $kriteria = "Nilai akhir tidak valid";
  } elseif ($nilai_akhir >= 98) {
    $kriteria = "Lulus";
  } elseif ($nilai_akhir >= 75) {
    $kriteria = "Lulus";
  } else {
    $kriteria = "Tidak Lulus";
  }
}

echo '<br/>';
echo '<span>Hasil Nilai akhir : </span>'.$nilai_akhir;
echo '<br />';
echo '<span>Siswa Dinyatakan : </span>'.$kriteria;
echo '<br />';

?>

                
                
                <br />
        </div>
    </body>
</html>