# Laporan Praktikum: Struktur Kontrol Perulangan (Loop) dalam PHP

**Nama:** [Muhammad Dzul Fahmi Al - Furqon]  
**NIM:** [2411102441051]  
**Mata Kuliah:** Pratikum Pemrograman Web

---

## 1. Pendahuluan
Praktikum ini bertujuan untuk memahami dan mengimplementasikan struktur kontrol perulangan (*looping*) dalam bahasa pemrograman PHP. Terdapat dua jenis struktur utama yang dipelajari:
1.  **FOR Loop:** Digunakan ketika jumlah iterasi sudah diketahui secara pasti.
2.  **WHILE Loop:** Digunakan ketika perulangan bergantung pada kondisi boolean tertentu, dan jumlah iterasi mungkin belum diketahui sebelumnya.

---

## 2. Struktur Kontrol FOR

Bagian ini membahas penggunaan `for` loop untuk manipulasi tampilan, logika matematika, dan struktur bersarang.

### A. Manipulasi Tampilan HTML
Loop sangat efektif untuk men-generate tag HTML yang berulang.

**1. Heading Dinamis (`for1-heading.php`)**
Membuat heading dari `h1` sampai `h5`.

```PHP
<?php
$teks = "Hello World";
for ($a = 1; $a <= 5; $a++) {
    echo "<h" .$a. ">" .$teks. "</h" .$a. ">";
}
?>

```

**2. Heading Ganjil (for2-helloworld.php)Menggunakan step 2 ($a+=2) untuk mencetak urutan 1, 3, 5, 7, 9.**

```PHP

<?php
$teks = "Hello World";
for ($a = 1; $a <= 10; $a+=2) {
    echo "<h" .$a. ">" .$teks. "</h" .$a. ">";
}
?>

```

**5. Decrement Counter (for3-helloworlddec.php)Loop menghitung mundur dari 10 ke 6 menggunakan $a--.**

```PHP

<?php
$teks = "Hello World";
for ($a = 10; $a > 5; $a--) {
    echo "<h" .$a. ">" .$teks. "</h" .$a. ">";
}
?>

```

B. Logika MatematikaMenggunakan loop untuk filter dan akumulasi data.

**4. Filter Kelipatan 10 (for5-bilbulat.php)Mencetak angka 5 s.d 100, namun hanya menampilkan angka yang habis dibagi 10 menggunakan modulus (%).**

```PHP


<?php
for ($bil = 5; $bil <= 100; $bil++) {
    if ($bil % 10 == 0) echo $bil. "<br />";
}
?>

```

6. Akumulasi Jumlah (for6-jumlah-bilbulat.php)Menjumlahkan seluruh angka dari 2 s.d 50 (2+3+4+...+50).

```PHP

<?php
$jumlah = 0;
for ($bil = 2; $bil <= 50; $bil++) {
    $jumlah = $jumlah + $bil;
}
echo "Hasilnya adalah ".$jumlah;
?>

```

8. Menghitung Frekuensi (for7-banyak-bilbulat.php)Menghitung ada berapa banyak angka kelipatan 6 di antara 3 s.d 127.

```PHP

<?php
$hitung = 0;
for ($bil = 3; $bil <= 127; $bil++) {
    if ($bil % 6 == 0) $hitung = $hitung + 1;
}
echo "Banyaknya bilangan bulat adalah ".$hitung;
?>

```

C. Nested Loop (Loop Bersarang)
**7. Nested For Dasar (for4-nestedfor.php)Loop a (luar) berjalan 3 kali, dan setiap iterasi a, loop b (dalam) berjalan 2 kali.**

```PHP

<?php
for ($a = 1; $a <=3; $a++) {
    for ($b = 1; $b <= 2; $b++) {
        echo "Nilai a = " .$a. " Nilai b =  " .$b. "<br />"; 
    }
}
?>

```

**9. Membuat Tabel HTML (for8-table.php)Loop luar membuat baris (<tr>), loop dalam membuat kolom/sel (<td>).**

```PHP

<?php
$jumBaris = 10;
$jumKolom = 6;
echo "<table border='1'>";
for ($baris = 1; $baris <= $jumBaris; $baris++) {
    echo "<tr>";
    for ($kolom = 1; $kolom <= $jumKolom; $kolom++) {
        echo "<td>...</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

```

**10. Membuat Dropdown Form (for9-combo.php) Mengisi elemen <(select)> dengan opsi tahun 1950-2022.**  

```PHP

<?php
echo "<select name='tahun'>";
for ($tahun = 1950; $tahun <= 2022; $tahun++) {
    echo "<option value='".$tahun."'>".$tahun."</option>";
}
echo "</select>";
?>

```

**3. Struktur Kontrol WHILE**
Bagian ini membahas penggunaan while loop. Perbedaan utama dengan for adalah inisialisasi variabel dilakukan sebelum loop, dan increment/decrement dilakukan di dalam blok loop.
A. Dasar While1. Perulangan Sederhana (while1-bil1-3.php)Mencetak angka 1 sampai 3.

```PHP

<?php
$bil = 1;
while ($bil <= 3) {
    echo $bil. "<br />";
    $bil++; // Increment manual
}
?>

```

**2. Random Loop (while2-rand.php)Loop ini unik karena berjalan "selama angka yang didapat bukan 0". Ini contoh kasus di mana jumlah perulangan tidak bisa diprediksi (non-deterministik).**

```PHP

<?php
$bil = rand(0, 10);
while ($bil != 0) {
    echo $bil."<br />";
    $bil = rand(0, 10); // Update nilai random
}
?>

```

B. Logika Matematika dengan While
**3. Filter Modulus (while4-x10.php)Sama seperti kasus for, namun menggunakan sintaks while untuk mencari kelipatan 10. **

```PHP

<?php
$bil = 5;
while ($bil <= 100) {
    if ($bil % 10 == 0) echo $bil. "<br />";
    $bil++;
}
?>

```

**4. Akumulasi Jumlah (while5-bilbulat.php)Menjumlahkan angka 2 s.d 50.**

```PHP

<?php
$jumlah = 0;
$bil = 2;
while ($bil <= 50) {
    $jumlah = $jumlah + $bil;
    $bil++;
}
echo "Hasilnya adalah ".$jumlah;
?>

```

**7. Hitung Frekuensi (while6-sum-bulat.php)Menghitung jumlah kemunculan angka kelipatan 6.**

```PHP

<?php
$hitung = 0;
$bil = 3;
while ($bil <= 127) {
    if ($bil % 6 == 0) $hitung = $hitung + 1;
    $bil++;
}
echo "Banyaknya bilangan bulat adalah ".$hitung;
?>

```

C. Nested While & UI
**6. Nested While (while3-nested.php)Penting: Pada nested while, variabel counter loop dalam ($b) harus di-reset kembali ke nilai awal di dalam loop luar sebelum loop dalam dijalankan.**

```PHP

<?php
$a = 1;
while ($a <= 3) {
    $b = 1; // RESET variable b harus dilakukan di sini
    while ($b <= 2) {
        echo "Nilai a = ".$a." Nilai b = ".$b."<br />";
        $b++;
    }
    $a++;
}
?>

```

**9. Tabel dengan While (while7-table.php)Membuat tabel 10 baris x 6 kolom.**

```PHP

<?php
$jumBaris = 10;
$jumKolom = 6;
echo "<table border='1'>";
$baris = 1;
while ($baris <= $jumBaris) {
    echo "<tr>";
        $kolom = 1;
        while ($kolom <= $jumKolom) {
            echo "<td>.</td>";
            $kolom++;
        }
    echo "</tr>";
    $baris++;
}
echo "</table>";
?>

```

**11. Combo Box dengan While (while8-combo.php)Alternatif membuat dropdown tahun menggunakan while.**

```PHP

<?php
echo "<select name='tahun'>";
$tahun = 1950;
while ($tahun <= 2022) {
    echo "<option value='".$tahun."'>".$tahun."</option>";
    $tahun++;
}
echo "</select>";
?>

```

**4. Penyelesaian Studi Kasus**
Berikut adalah implementasi logika yang lebih kompleks untuk menyelesaikan masalah nyata.
Kasus 1: Perhitungan Saldo Tabungan (soal1.php)Deskripsi:Program ini menghitung saldo akhir nasabah setelah N bulan dengan ketentuan:Bunga berubah tergantung saldo saat itu (Bunga Mengambang/Floating).Jika saldo < 1.100.000, bunga 3%.Jika saldo >= 1.100.000, bunga 4%.Biaya administrasi bulanan sebesar Rp. 9.000 dipotong setiap bulan setelah bunga ditambahkan.Analisis Kode:Menggunakan Loop FOR untuk mensimulasikan proses bulan demi bulan.

```PHP

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

```

Input diambil menggunakan form HTML POST dan ditampilkan dengan format mata uang (number_format).
Kasus 2: Penyelesaian Persamaan Tiga Variabel (soal2.php)Deskripsi:Mencari kombinasi bilangan bulat positif untuk variabel $x, y, z$ dimana $x + y + z = 25$ dengan rentang bilangan 1 sampai 23.
Analisis Kode:Menggunakan Triple Nested Loop (Brute Force Algorithm). 
Program mencoba setiap kemungkinan kombinasi angka.

```PHP

<?php
$jumlah = 0;
for ($x = 1; $x <= 23; $x++) {
    for ($y = 1; $y <= 23; $y++) {
        for ($z = 1; $z <= 23; $z++) {
            if ($x + $y + $z == 25) {
                echo "x = $x, y = $y, z = $z<br>";
                $jumlah++;
            }

        }
    }
}
echo "<br>Jumlah penyelesaian : $jumlah";
?>

```

Setiap kali kondisi $x + $y + $z == 25 terpenuhi, kombinasi dicetak dan counter $jumlah ditambah.5. 

**Kesimpulan**
- Dari praktikum ini dapat disimpulkan bahwa:For Loop lebih ringkas untuk digunakan pada pencacah angka, array index, atau pembuatan elemen visual tabel/list yang jumlahnya pasti.
- While Loop memberikan fleksibilitas lebih untuk kondisi yang dinamis (seperti while2-rand.php).
- Nested Loop (Loop bersarang) sangat krusial untuk struktur data multi-dimensi (seperti tabel baris x kolom) atau penyelesaian algoritma brute force (soal2.php).
- Penerapan logika bisnis (seperti bunga bank di soal1.php) dapat dilakukan dengan menjalankan logika tersebut secara berulang di dalam loop.
