<?php   
    
    $_SESSION["Email"] = $_POST["Email"];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "livfit";

    $mail = $_SESSION["Email"];

    $conn = mysqli_connect($host,$user,$pass,$db);

    $sql1 = "INSERT INTO newsletter VALUES ('$mail')";
    mysqli_query($conn, $sql1);

    header("Location: index.htm#blogs");
    exit();

    mysqli_close($conn);
?>
