<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Input</title>
</head>
<body>
    <main>
        <?php
        function set_value($value){
            if (isset($_GET['param'])){
                $data = json_decode($_GET['param']);
                return $data->$value;
            }
        }
        ?>
    <a href="index.php">Refresh</a>
    <h2>Hitung Rata-Rata</h2>

    <form action="proses.php" method="post">
        <label for="input_nama">Nama :</label>
        <input type="text" name="input_nama" id="input_nama" value="<?php echo set_value('nama') ?>">

        <?php
            if (isset($_GET['param'])){
                $data = json_decode($_GET['param']);
                if($data->error_nama != ""){
                    echo "<div class ='error-container'>";
                    echo "<p>" .$data->error_nama. "</p>";
                    echo "</div>";
                }
            }
        ?>

        <label for="input_email">Email :</label>
        <input type="text" name="input_email" id="input_email" value="<?php echo set_value('email') ?>">

        <?php
            if (isset($_GET['param'])){
                $data = json_decode($_GET['param']);
                if($data->error_email != ""){
                    echo "<div class ='error-container'>";
                    echo "<p>" .$data->error_email. "</p>";
                    echo "</div>";
                }
            }
        ?>

        <label for="input_bil_1">Bilangan 1 :</label>
        <input type="text" name="input_bil_1" id="input_bil_1" value="<?php echo set_value('bil_1') ?>">

        <?php
            if (isset($_GET['param'])){
                $data = json_decode($_GET['param']);
                if($data->error_bil_1 != ""){
                    echo "<div class ='error-container'>";
                    echo "<p>" .$data->error_bil_1. "</p>";
                    echo "</div>";
                }
            }
        ?>
        <label for="input_bil_2">Bilangan 2 :</label>
        <input type="text" name="input_bil_2" id="input_bil_2" value="<?php echo set_value('bil_2') ?>">

        <?php
            if (isset($_GET['param'])){
                $data = json_decode($_GET['param']);
                if($data->error_bil_2 != ""){
                    echo "<div class ='error-container'>";
                    echo "<p>" .$data->error_bil_2. "</p>";
                    echo "</div>";
                }
            }
        ?>
        <label for="input_bil_3">Bilangan 3 :</label>
        <input type="text" name="input_bil_3" id="input_bil_3" value="<?php echo set_value('bil_3') ?>">

        <?php
            if (isset($_GET['param'])){
                $data = json_decode($_GET['param']);
                if($data->error_bil_3 != ""){
                    echo "<div class ='error-container'>";
                    echo "<p>" .$data->error_bil_3. "</p>";
                    echo "</div>";
                }
            }
        ?>
        <input type="submit" value="hitung">
    </form>

        <?php
        if(isset($_GET['param'])){
            $data = json_decode($_GET['param']);
            if($data->rata_rata !=""){
                echo "<div class='result-container'>";
                echo "<h2>Rata - rata = " .$data->rata_rata ."</h2>";
                echo "</div>";
            }
        }
        ?>
    </main> 
</body>
</html>