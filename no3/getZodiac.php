<?php
    function show($day, $month, $year) {
        $zodiacName = array(
            "Aquarius",
            "Pisces",
            "Aries",
            "Taurus",
            "Gemini",
            "Cancer",
            "Leo",
            "Virgo",
            "Libra",
            "Scorpio",
            "Sagitarius",
            "Capricorn"
        );

        if (($day >= 20 && $month == 1) || ($day <= 18 && $month == 2)) {
            echo '<img src="img/aquarius.png" alt="aquarius">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[0]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 19 && $month == 2) || ($day <= 20 && $month == 3)) {
            echo '<img src="img/pisces.png" alt="pisces">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[1]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 21 && $month == 3) || ($day <= 19 && $month == 4)) {
            echo '<img src="img/aries.png" alt="aries">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[2]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 20 && $month == 4) || ($day <= 20 && $month == 5)) {
            echo '<img src="img/taurus.png" alt="taurus">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[3]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 21 && $month == 5) || ($day <= 20 && $month == 6)) {
            echo '<img src="img/gemini.png" alt="gemini">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[4]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 21 && $month == 6) || ($day <= 22 && $month == 7)) {
            echo '<img src="img/cancer.png" alt="cancer">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[5]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 23 && $month == 7) || ($day <= 22 && $month == 8)) {
            echo '<img src="img/leo.png" alt="leo">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[6]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 23 && $month == 8) || ($day <= 22 && $month == 9)) {
            echo '<img src="img/virgo.png" alt="virgo">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[7]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 23 && $month == 9) || ($day <= 22 && $month == 10)) {
            echo '<img src="img/libra.png" alt="libra">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[8]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 23 && $month == 10) || ($day <= 22 && $month == 11)) {
            echo '<img src="img/scorpio.png" alt="scorpio">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[9]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 23 && $month == 11) || ($day <= 21 && $month == 12)) {
            echo '<img src="img/sagitarius.png" alt="sagitarius">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[10]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        } else if (($day >= 22 && $month == 12) || ($day <= 19 && $month == 1)) {
            echo '<img src="img/capricorn.png" alt="capricorn">';
            echo "</br>";
            echo "<p class='zodiac-name'>".$zodiacName[11]."</p>";
            echo "</br>";
            echo "<p class='date-info'>"."$day/$month/$year"."</p>";
        }
    }
?>