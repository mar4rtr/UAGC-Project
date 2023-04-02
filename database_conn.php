<?php
//error_reporting(0);
print_r($_POST);
//echo "Hello World";
if (isset($_POST["email"])){
    echo("email address is present");
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$SSN = $_POST['SSN'];
$major = $_POST['major'];
$serverName = "localhost";
$userName = "root";
$dbpassword = "";
$dbName = "student_reg";




$conn = mysqli_connect($serverName, $userName, $dbpassword, $dbName);
}
if (!empty($id) || !empty($email) || !empty($password) || !empty($firstName) || !empty($lastName) || !empty($address) || !empty($phone) || !empty($SSN) || !empty($major))
if (isset($id) || isset ($email) || isset($password) || isset($firstName) || isset($lastName) || isset($address) || isset($phone) || isset($SSN) || isset($major))
{
    echo("email address is present");
    echo("Server Name Present");
    if (isset($serverName["localhost"])){
        echo("Connectiing to DB");
    
    }
    $query = "INSERT INTO student_info (email, password, firstName, lastName, address, phone, SSN, major)VALUES ('$email', '$password', '$firstName', '$lastName', '$address', '$phone', '$SSN', '$major')";
    
    mysqli_query($conn, $query);

    if  (mysqli_connect_error()){
        die ('Connect Error('. mysql_connect_errno().')'. mysql_connect_error());
    } else {
        $SELECT = "SELECT email FROM student_info Where email = ? Limit 1";
        $INSERT = "INSERT Into student_info (id, email, password, firstName, lastName, address, phone, SSN, major) values (?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows; 

        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare ($INSERT);
            $stmt->bind_param("isssssiis",$id, $email, $password, $firstName, $lastName, $address, $phone, $SSN, $major);
            echo "<br>" . $stmt . "<br>";
            $stmt->execute();
        }

    }

    if(mysqli_connect_errno()){
        echo "Failed to Connect!";
        exit();
    }
    echo "Connection Successful";

    }else {
    echo "All fields are required";
    die();
    
}
?>

