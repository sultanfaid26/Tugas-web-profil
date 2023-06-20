<?php

    $conn = mysqli_connect("localhost", "root", "", "db_mobil");

    function register($data){
        global $conn;
    
        $username =strtolower(stripslashes($data['username']));
        $password =$data['password'];
        $conf_password =$data['conf_password'];
    
        if( $password !== $conf_password){
            echo"
            <script>
            alert('passowrd tidak sesuai');
            </script>
    
            ";
            return false;
        }
    
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO users VALUES
    
        ('','$username','$password')
        ";
        mysqli_query($conn,$query);
    
        return mysqli_affected_rows($conn);
    }

    function tambahData($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $ktp = htmlspecialchars($data["ktp"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $merk = htmlspecialchars($data["merk"]);
        $tipe = htmlspecialchars($data["tipe"]);
    
        $query = "INSERT INTO sultanvehicle
        VALUES
    ('', '$nama', '$ktp', '$alamat', '$merk', '$tipe')";
    
    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
    }
?>