<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Weton</title>
    <link rel="stylesheet" type="text/css" href="css/weton.css">
</head>
<body>
    <div class="judul">
        <h1>Menentukan Weton</h1>
    </div>

    <div class="form-box">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="day" id="day" placeholder="Tanggal">
            <input type="text" name="month" id="month" placeholder="Bulan">
            <input type="text" name="year" id="year" placeholder="Tahun">
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>

    <div id="print" class="print">
        <?php
            include('getWeton.php');
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $day = $_POST['day'];
                $month = $_POST['month'];
                $year = $_POST['year'];

                if($day != NULL && $month != NULL && $year != NULL) {
                    $weton = getWeton($day,$month,$year);
                    $hari = getDay($day,$month,$year);
                    echo '<div class="head-print">KAMU LAHIR PADA</div>';
                    echo '<div class="text-print">'. $hari . " " . $weton['pasaranJawaName'] . ", " . $weton['jDay'] . " " . $weton['jMonthName'] . " " . $weton['jYear'] . " Ja" .'</div>';
                }
            }
        ?>
    </div>
</body>
</html>


