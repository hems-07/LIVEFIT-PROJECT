<?php   
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "livfit";

    $username = $_SESSION["username"]; 
    $password = $_SESSION["password"]; 

    $conn = mysqli_connect($host,$user,$pass,$db);

    $sql = "SELECT Username, Password, BMI_C from bmi where Username = '$username'";
    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);

    if ($password == $row["Password"])
    {

        $bmi = $row["BMI_C"];

        if ($bmi <= 18.00)
        {
            header("Location: front_start.htm");
            exit();
        }

        else if ($bmi > 18.00 && $bmi <=25.00)
        {
            header("Location: front_lean.htm");
            exit();
        }

        else if($bmi > 25.00)
        {
            header("Location: front_build.htm");
            exit();
        }
    }
    else{
        header("Location: login_invalid.htm");
            exit();
    }
    ?>
    

