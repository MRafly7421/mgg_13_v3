<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Zodiak Sederhana</title>
    <link rel="stylesheet" type="text/css" href="css/zodiak.css">
</head>
<body>
    <div class="judul">
        <h1>Aplikasi Zodiak Sederhana</h1>
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
        <div class="show">
            <?php
                include('getZodiac.php');
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $day = $_POST['day'];
                    $month = $_POST['month'];
                    $year = $_POST['year'];
                    
                    if($day != NULL && $month != NULL && $year != NULL) {
                        show($day,$month,$year);
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>