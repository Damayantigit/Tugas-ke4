<?php
 if($_POST){
    $nama = "";
    $email ="";
    $bil_1 ="";
    $bil_2 ="";
    $bil_3 ="";
    $rata_rata ="";

    $error_nama ="";
    $error_email ="";
    $error_bil_1 ="";
    $error_bil_2 ="";
    $error_bil_3 ="";
    $error = false;



    $nama = $_POST['input_nama'];
    $email = $_POST['input_email'];
    $bil_1 = $_POST['input_bil_1'];
    $bil_2 = $_POST['input_bil_2'];
    $bil_3 = $_POST['input_bil_3'];

    if($nama == ""){
        $error_nama ="Input Nama Tidak Boleh Dikosongkan!";
        $error = true;
    }else if(is_numeric($nama) == true){
        $error_nama = "Input Nama Tidak Boleh Diisi Dengan Angka!";
        $error = true;
    }



    if ($email == ""){
        $error_email = "Input Email Tidak Boleh Dikosongkan!";
        $error = true;
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error_email ="Input Email Tidak Valid!";
        $error = true;
    }



    if ($bil_1 == ""){
        $error_bil_1 ="Input Bilangan 1 Tidak Boleh Kosong!";
        $error = true;

    }else if(is_numeric($bil_1) == false){
        $error_bil_1 = "Input Bilangan Bil 1 Harus Diisi Dengan Angka!";
        $error = true;
    }


    if ($bil_2 == ""){
        $error_bil_1 ="Input Bilangan 2 Tidak Boleh Kosong!";
        $error = true;

    }else if(is_numeric($bil_2) == false){
        $error_bil_2 = "Input Bilangan Bil 2 Harus Diisi Dengan Angka!";
        $error = true;
    }


    if ($bil_3 == ""){
        $error_bil_1 ="Input Bilangan 3 Tidak Boleh Kosong!";
        $error = true;

    }else if(is_numeric($bil_3) == false){
        $error_bil_3 = "Input Bilangan Bil 3 Harus Diisi Dengan Angka!";
        $error = true;
    }


    if ($error == false){
        $rata_rata = ($bil_1 + $bil_2 + $bil_3)/3;

    }

    $arr_prams = array(
        "nama" => $nama,
        "email" => $email,
        "bil_1" => $bil_1,
        "bil_2" => $bil_2,
        "bil_3" => $bil_3,
        "error_nama" => $error_nama,
        "error_email" => $error_email,
        "error_bil_1" => $error_bil_1,
        "error_bil_2" => $error_bil_2,
        "error_bil_3" => $error_bil_3,
        "rata_rata" => $rata_rata,
    );

    $json_str = json_encode($arr_prams);

    header("Location:index.php?param=" . $json_str);

 }