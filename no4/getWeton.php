<?php
    function intPart($float) {
        return($float < -0.0000001 ? ceil($float - 0.0000001) : floor($float + 0.0000001));
    }

    function getWeton($day, $month, $year) {
        $julian = GregorianToJD($month, $day, $year);
        if($julian>=1937808 && $julian<=536838867) {
            $date = cal_from_jd($julian, CAL_GREGORIAN);
            $d = $date['day']; 
            $m = $date['month'] - 1; 
            $y = $date['year'];
            
            $mPart = ($m-13)/12;
            $jd = intPart((1461*($y+4800+intPart($mPart)))/4)+
            intPart((367*($m-1-12*(intPart($mPart))))/12)-
            intPart((3*(intPart(($y+4900+intPart($mPart))/100)))/4)+$d-32075;
            
            $l = $jd-1948440+10632;
            $n = intPart(($l-1)/10631);
            $l = $l-10631*$n+354;
            $j = (intPart((10985-$l)/5316))*(intPart((50*$l)/17719))+(intPart($l/5670))*(intPart((43*$l)/15238));
            $l = $l-(intPart((30-$j)/15))*(intPart((17719*$j)/50))-(intPart($j/16))*(intPart((15238*$j)/43))+29;
            
            $hMonth = intPart((24*$l)/709);
            $jMonth = $hMonth;
            $hDay = ($l-intPart((709*$hMonth)/24))+1;
            $jDay = $hDay-1;
            $hYear = 30*$n+$j-30;
            $jYear = $hYear+512;
            $pasaranJawa = ($julian+3)%5;
            if($julian<=1948439) $hYear–;

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
            $pasaranJawaName = array(
                "Wage",
                "Kliwon",
                "Legi",
                "Pahing",
                "Pon"
            );
            
            return array(
                'jDay' => $jDay,
                'jMonth' => $jMonth,
                'pasaranJawa' => $pasaranJawa,
                'jMonthName' => $jMonthName[$jMonth-1],
                'pasaranJawaName' => $pasaranJawaName[$pasaranJawa-1],
                'jYear' => $jYear
            );
        }
        else return false;
    }

    function getDay($day, $month, $year) {
        $dt = "$year-$month-$day";
        $hari = date('D', strtotime($dt));

        $namaHari = "";
        switch($hari) {
            case 'Sun':
                $namaHari = "Minggu";
                break;
            case 'Mon':
                $namaHari = "Senin";
                break;
            case 'Tue':
                $namaHari = "Selasa";
                break;
            case 'Wed':
                $namaHari = "Rabu";
                break;
            case 'Thu':
                $namaHari = "Kamis";
                break;
            case 'Fri':
                $namaHari = "Jum'at";
                break;
            case 'Sat':
                $namaHari = "Sabtu";
                break;
        }

        return $namaHari;
    }
?>


<!-- 
Sumber : https://asalcoret.wordpress.com/2008/10/27/membuat-fungsi-tanggal-hijriah-masehi-jawa-dengan-php/ 
-->






