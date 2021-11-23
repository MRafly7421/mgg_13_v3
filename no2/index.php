<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Menentukan Bulan Berdasarkan Hari </title>
    <link rel="stylesheet" type="text/css" href="css/fmonthh.css">
</head>
<body>
    <div class="judul">
        <h1>Fungsi Menentukan Bulan</h1>
    </div>

    <div class="form-box">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="month" id="month" placeholder="Bulan ke ... (eg. pertama) [(value 1),(value 2), ... ]">
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>

    <div id="print" class="print">
        <div class="show">
            <?php
                include('getMonth.php');
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $month = $_POST['month'];

                    if($month != NULL) {
                        $arr = explode(",",$month);

                        foreach ($arr as $hari) {
                            $bln = getMonth($hari);
                            echo "Bulan " . $hari . " masuk pada:" . "<br/>";
                            echo "Bulan (Masehi) : " . $bln['month'] . "<br/>";
                            echo "Bulan (Hijriyah) : " . $bln['hMonth'] . "<br/>";
                            echo "Bulan (Jawa) : " . $bln['jMonth'] . "<br/><br/><br/>";
                        }
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>