<?php
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$SSN = $_POST['SSN'];
$major = $_POST['major'];

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!empty($id) || !empty ($email) || !empty($password) || !empty($firstName) || !empty($lastName) || !empty($address) || !empty($phone) || !empty($SSN) || !empty($major))
{
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "student_reg";

    if  (mysqli_connect_error()){
        die ('Connect Error('. mysql_connect_errno().')'. mysql_connect_error());
    } else {
        $SELECT = "SELECT email FROM student_info Where email = ? Limit 1";
        $INSERT = "INSERT Into student_info (id, email, password, firstName, lastName, address, phone, SSN, major) values (?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email),
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_results();
        $rnum = $stmt->num_rows; 

        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare ($INSERT);
            $stmt->bind_param("sjdkfgu",$id, $email, $password, $firstName, $lastName, $address, $phone, $phone, $SSN, $major);
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

