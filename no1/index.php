<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Mencari Hari dalam Seminggu</title>
    <link rel="stylesheet" type="text/css" href="css/fday.css">
</head>
<body>
    <div class="judul">
        <h1>Fungsi Mencari Hari dalam Satu Minggu</h1>
    </div>

    <div class="form-box">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="day" id="day" placeholder="Hari ke ... (eg. pertama) [(value 1),(value 2), ... ]">
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>

    <div id="print" class="print">
        <div class="show">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $day = $_POST['day'];

                    if($day != NULL) {
                        $arr = explode(",", $day);
                        foreach ($arr as $hari) {
                            echo "Hari " . $hari . " merupakan hari " . getDay($hari) . "<br/>";
                        }
                    }
                }
            ?>
        </div>
    </div>
    
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
</body>
</html>