<?php
    require 'controller.php';

    $conn = mysqli_connect("localhost", "root", "", "db_mobil");

    if (isset ($_POST["submit"])) {
       
        if (tambahData($_POST) > 0) {
            echo
            "<script> alert('data berhasil dimasukan');
                    document.location.href = 'berhasil.html';
            </script>";
        }
        else {
            echo "<script>alert('Data gagal dimasukkan');
                    document.location.href = 'index.php';</script>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="input.css">

    <style>
        body{
            background-color: rgb(12, 12, 12) ;
        }

        .data{
            margin-top: 10rem;
            width: 60rem;
            margin-left: 45rem;
        }

        h1{
            color: rgb(155, 0, 0);
        }

        li{
            color: rgb(155, 0, 0);
            width: 60rem;
        }

        .cta{
        margin-top: 1rem;
        display: inline-block;
        padding: 1rem 3rem;
        font-size: 1.4rem;
        color: #fff;
        background-color: var(--primary);
        border-radius: 0.5rem;
        box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
        }

    </style>



    <title>Document</title>
</head>
<body>
<div class="d-flex justify-content-center">
    <div class="data">
        <ul>
            <h1>Input data</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <li>
                    <label for="">Nama</label>
                    <br>
                    <input type="text" name="nama">
                </li>
            
                <li>
                    <label for="">No.KTP</label>
                    <br>
                    <input type="text" name="ktp">
                </li>
            
                <li>
                    <label for="">Alamat</label>
                    <br>
                    <input type="text" name="alamat">
                </li>

                <li>
                    <label for="">Merk</label>
                    <br>
                    <input type="text" name="merk">
                </li>
                
                <li>
                    <label for="">Tipe Mobil</label>
                    <br>
                    <input type="text" name="tipe">
                </li>
                <br>
                <button type="submit" name="submit" class="cta">Input Data</button>
            </form>
            
        </ul>
    </div>
</div>
</body>
</html>