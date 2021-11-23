<?php
    function getDay($day) {
        $intName = array(
            "pertama",
            "kesatu",
            "kedua",
            "ketiga",
            "keempat",
            "kelima",
            "keenam",
            "ketujuh"
        );

        $dayName = array(
            "Minggu",
            "Senin",
            "Selasa",
            "Rabu",
            "Kamis",
            "Jum'at",
            "Sabtu"
        );

        if($day == $intName[0] || $day == $intName[1]) {
            return $dayName[0];
        } else if($day == $intName[2]) {
            return $dayName[1];
        } else if($day == $intName[3]) {
            return $dayName[2];
        } else if($day == $intName[4]) {
            return $dayName[3];
        } else if($day == $intName[5]) {
            return $dayName[4];
        } else if($day == $intName[6]) {
            return $dayName[5];
        } else if($day == $intName[7]) {
            return $dayName[6];
        } else {
            return "error input!!!";
        }
    }
?>