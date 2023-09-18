<?php
#menggabungkan string
$nama = 'budi';

$pesan = "Selamat datang $nama";

echo $pesan . '<br>';

$namaDepan = 'Budi';
$namaBelakang = 'Laksono' . "<br>";

$namaLengkap = $namaDepan .' '. $namaBelakang;

echo $namaLengkap;

//penggabungan operator

$i = 5;

echo "hasil akhir: " . (($i * 0) + 1);

$katakata = "Hari ini indah sekali guys";
#menghitung string
echo "<p>$katakata</p>";
echo "panjang string/ karakter = " . strlen($katakata) . "<br>";

$menghitungkata = "ini mencoba menghitung kata";

#memotong string

echo "panjang kata: " . str_word_count($menghitungkata) . "<br>";

echo "<p>". substr($katakata, 0, 10) . "<p>";
echo "<p>" . substr($katakata,10,20) . "<p>";
echo "<p>" . substr($katakata,-5) . "<p>";

#mengubah semua string menjadi KAPITAL

echo "<p>" . strtoupper($katakata) . "<p>";

#mengubah semua string menjadi lowercase
$testlower = "TEST";
echo "<p>". strtolower($testlower). "<p>"; 

#membalik string

$membalikstring = "membalik string";

echo "<p>" . strrev($membalikstring) . "<p>";

#mencari string

$mencaristring = "ini adalah affan";

echo "<p>" . strpos($mencaristring, "affan") . "<p>" ;
echo "<p>" . strpos($mencaristring, "Affan") . "<p>" ;
echo "<p>" . stripos($mencaristring, "Affan") . "<p>" ;

#replace karakter string

$replaceString = "Microsoft membeli github" ;

echo "Judul Asli: {$replaceString} <br>";
echo "judul baru: " . str_replace("membeli","menjual" , $replaceString); 
echo "<br>";

#tugas mencoba 10 string query
#md5
$stringToMD5 = "halo saya naafiul";

echo md5($stringToMD5);
echo "<p>Ini menggunakan spesifik hex ". md5($stringToMD5, TRUE) . "<p>";

#ltrim
$stringToLtrim = "Halo Naafiul";
echo "<p> ini tanpa ltrim " . $stringToLtrim . "<p>";
echo "<p> ini dengan ltrim " . ltrim($stringToLtrim, "Halo") . "<p>";

#rtrim
$stringToRtrim = "Halo Naafiul";
echo "<p> ini tanpa rtrim " . $stringToRtrim . "<p>";
echo "<p> ini dengan rtrim " . rtrim($stringToRtrim, "Naafiul") . "<p>";

#str_repeat
$stringRepeat = "Halo Naafiul ";
echo "<p> ini menggunakan string repeat " . str_repeat($stringRepeat, 13) . "<p>";

#strchr
$SearchInString = "Halo Naafiul Razzaq";
echo "<p> ini mencari string didalam string " . strchr($SearchInString, "Razzaq") . "<p>";

#str_split
$stringToStringSplit = "Naafiul";
echo "<p>Ini menggunakan string split " . print_r(str_split($stringToStringSplit)) . "<p>";

#trim
$strimTrim = "Halo Naafiul";
echo "<p>ini tidak menggunakan string trim " . $strimTrim . "<p>";
echo "<p> ini menggunakan string trim " . trim($strimTrim, "Hal"); 

#strrchr
$stringChar = "Halo Naafiul";
echo "<p>" . strrchr($stringChar, "Naafiul"). "<p>";

#join
$stringJoin = array('Halo','Naafiul');
echo "<p> ini join " . join(" ",$stringJoin) . "<p>";

#implode
$stringImplode = array('Halo','Naafiul');
echo "<p> ini implode " . implode(" ",$stringImplode) . "<p>"; 


?>