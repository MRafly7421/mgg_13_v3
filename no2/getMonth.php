<?php
    function getMonth($month) {
        $intName = array(
            "pertama",
            "kesatu",
            "kedua",
            "ketiga",
            "keempat",
            "kelima",
            "keenam",
            "ketujuh",
            "kedelapan",
            "kesembilan",
            "kesepuluh",
            "kesebelas",
            "keduabelas"
        );

        $monthName = array(
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        );
        $hMonthName = array(
            "Muharram",
            "Safar",
            "Rabiul Awal",
            "Rabiul Akhir",
            "Jumadil Awal",
            "Jumadil Akhir",
            "Rajab",
            "Syakban",
            "Ramadhan",
            "Syawal",
            "Dzulkaidah",
            "Dzulhijjah"
        );
        $jMonthName = array(
            "Sura",
            "Sapar",
            "Mulud",
            "Bakda Mulud",
            "Jumadilawal",
            "Jumadilakir",
            "Rejeb",
            "Ruwah",
            "Pasa",
            "Sawal",
            "Sela",
            "Besar"
        );    

        $bulan = "";
        $bulanHijriyah = "";
        $bulanJawa = "";
        if($month == $intName[0] || $month == $intName[1]) {
            $bulan = $monthName[0];
            $bulanHijriyah = $hMonthName[0];
            $bulanJawa = $jMonthName[0];
        } else if($month == $intName[2]) {
            $bulan = $monthName[1];
            $bulanHijriyah = $hMonthName[1];
            $bulanJawa = $jMonthName[1];
        } else if($month == $intName[3]) {
            $bulan = $monthName[2];
            $bulanHijriyah = $hMonthName[2];
            $bulanJawa = $jMonthName[2];
        } else if($month == $intName[4]) {
            $bulan = $monthName[3];
            $bulanHijriyah = $hMonthName[3];
            $bulanJawa = $jMonthName[3];
        } else if($month == $intName[5]) {
            $bulan = $monthName[4];
            $bulanHijriyah = $hMonthName[4];
            $bulanJawa = $jMonthName[4];
        } else if($month == $intName[6]) {
            $bulan = $monthName[5];
            $bulanHijriyah = $hMonthName[5];
            $bulanJawa = $jMonthName[5];
        } else if($month == $intName[7]) {
            $bulan = $monthName[6];
            $bulanHijriyah = $hMonthName[6];
            $bulanJawa = $jMonthName[6];
        } else if($month == $intName[8]) {
            $bulan = $monthName[7];
            $bulanHijriyah = $hMonthName[7];
            $bulanJawa = $jMonthName[7];
        } else if($month == $intName[9]) {
            $bulan = $monthName[8];
            $bulanHijriyah = $hMonthName[8];
            $bulanJawa = $jMonthName[8];
        } else if($month == $intName[10]) {
            $bulan = $monthName[9];
            $bulanHijriyah = $hMonthName[9];
            $bulanJawa = $jMonthName[9];
        } else if($month == $intName[11]) {
            $bulan = $monthName[10];
            $bulanHijriyah = $hMonthName[10];
            $bulanJawa = $jMonthName[10];
        } else if($month == $intName[12]) {
            $bulan = $monthName[11];
            $bulanHijriyah = $hMonthName[11];
            $bulanJawa = $jMonthName[11];
        } else {
            return "error input!!!";
        }

        return array(
            'month' => $bulan,
            'hMonth' => $bulanHijriyah,
            'jMonth' => $bulanJawa
        );
    }
?>