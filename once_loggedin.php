<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body></body>
    <h1>Student Profile</h1>
<a href="login.php">LOGOUT</a>
<br></br>

<?php

if (isset($_POST['Usname']) && isset($_POST['paswrd'])) {
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "student_reg";
    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    function validate($data){
        $data =  trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $Usname = validate($_POST['Usname']);
    $paswrd = validate($_POST['paswrd']);

    if (empty($Usname)){
        header ("Location: login.php?error=User Name is Required");
        exit();
    }else if (empty($paswrd)){
        header ("Location: login.php?error=Password is Required");
        exit();
    }else {
        $sql = "SELECT * FROM student_info WHERE email= '$Usname' AND password = '$paswrd'";
        
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results) > 0){
            $record = $results->fetch_assoc();
            echo "<br> ID: ". $record["id"] . "<br>";
            echo "Email: ". $record["email"] . "<br>";
            echo "Password: ". $record["password"] . "<br>";
            echo "First Name: ". $record["firstName"] . "<br>";
            echo "Last Name: ". $record["lastName"] . "<br>";
            echo "Address: ". $record["address"] . "<br>";
            echo "Phone: ". $record["phone"] . "<br>";
            echo "SSN: ". $record["SSN"] . "<br>";
            echo "Major: ". $record["major"] . "<br>";
        } else {
            echo "Invalid Credetials";
        }
        
    } 

    
} else {
    header ("Location: login.php?error");
    exit();
}


//</html>