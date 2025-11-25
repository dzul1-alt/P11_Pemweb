<!DOCTYPE html>
<html>
<head>
    <title>Hitung Saldo Akhir</title>
</head>
<body>

<h2>Hitung Saldo Akhir Tabungan</h2>

<form method="post">
    Saldo Awal: <input type="number" name="saldo" required><br><br>
    Jumlah Bulan (N): <input type="number" name="bulan" required><br><br>
    <input type="submit" name="hitung" value="Hitung">
</form>

<hr>

<?php
if (isset($_POST['hitung'])) {

    $saldo = $_POST['saldo'];     // saldo awal
    $bulan = $_POST['bulan'];     // N bulan
    $biayaAdmin = 9000;           // biaya administrasi per bulan

    for ($i = 1; $i <= $bulan; $i++) {

        // Tentukan bunga berdasarkan saldo terakhir
        if ($saldo < 1100000) {
            $bunga = 0.03;   // 3%
        } else {
            $bunga = 0.04;   // 4%
        }

        // Hitung bunga dari saldo terakhir
        $saldo = $saldo + ($saldo * $bunga);

        // Kurangi biaya administrasi bulanan
        $saldo = $saldo - $biayaAdmin;
    }

    echo "<h3>Saldo akhir setelah $bulan bulan adalah: Rp. ".number_format($saldo, 0, ',', '.')."</h3>";
}
?>

</body>
</html>
