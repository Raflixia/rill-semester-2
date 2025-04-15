<?php

/**
 * Summary of nilaimahasiswa
 */
class nilaimahasiswa{
    public $nama;
    public $matakuliah;
    public $nilai_uts;
    public $nilai_uas;
    public $nilai_tugas;

    public const PERSENTASE_UTS = 0.25;
    public const PERSENTASE_UAS = 0.38;
    public const PERSENTASE_TUGAS = 0.45;
    public const KKM = 60;

    public function getnilaiakhir() {
        $nilai_akhir = ($this->nilai_uas * self::PERSENTASE_UAS)
         + ($this->nilai_uts * self::PERSENTASE_UTS)
         + ($this->nilai_tugas * self::PERSENTASE_TUGAS);
        return $nilai_akhir;
    }

    public function kelulusan() {
        if($this->getnilaiakhir() >= self::KKM) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }

    }
}
?>