<?php

    class nilaiMahasiswa{

        public function nilai_rata($nilai_uas, $nilai_uts){

            $nilai_rata = ($nilai_uas + $nilai_uts) / 2 ;

            if($nilai_rata >= 81 && $nilai_rata <= 100 ) {
                $keterangan = "Sangan Memuaskan";
                $predikat = "A";
            } elseif($nilai_rata >= 71 && $nilai_rata <= 80) {
                $keterangan = "Memuaskan";
                $predikat = "B";
            } elseif($nilai_rata >= 61 && $nilai_rata  <= 70) {
                $keterangan = "Cukup Memuaskan";
                $predikat = "C";
            } elseif($nilai_rata < 60) {
                $keterangan = "Tidak Memuaskan";
                $predikat = "D";
            } else {
                $keterangan = "nilai tidak tersedia";
                $predikat = "nilai tidak ditemukan";
            }

            $data = [
                'nilaiRata' => $nilai_rata,
                'keterangan' => $keterangan,
                'predikat' => $predikat,
               
            ];
            return $data;
        }
    }
