<?php   
    $_SESSION["Name"] = $_POST["Name"];
    $_SESSION["Email"] = $_POST["Email"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["age"] = $_POST["age"];
    $_SESSION["gender"] = $_POST["gender"];
    $_SESSION["Height"] = $_POST["Height"];
    $_SESSION["Weight"] = $_POST["Weight"];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "livfit";

    $name = $_SESSION["Name"];
    $mail = $_SESSION["Email"];
    $password = $_SESSION["password"];
    $age = $_SESSION["age"];
    $gender = $_SESSION["gender"];
    $Height = $_SESSION["Height"];
    $Weight = $_SESSION["Weight"];
            
    $bheight = ($Height / 100.00);
    $BMI = ($Weight/($bheight*$bheight));

    $conn = mysqli_connect($host,$user,$pass,$db);

    $sql1 = "INSERT INTO bmi VALUES ('$name','$mail','$password', '$age', '$gender', '$Height', '$Weight','$BMI')";
    mysqli_query($conn, $sql1);

    header("Location: success.htm");
    exit();

    mysqli_close($conn);
?>
