<?php
/**
 * Fungsi untuk menampilkan pesan selamat datang $name
 */

 function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas) {
    define("NILAI_UTS", 0.25);
    define("NILAI_UAS", 0.30);
    define("NILAI_TUGAS", 0.45);
    $nilai_akhir = (NILAI_UTS * $nilai_uts) + (NILAI_UAS * $nilai_uas) + (NILAI_TUGAS * $nilai_tugas);
    return $nilai_akhir;
 } 
?>