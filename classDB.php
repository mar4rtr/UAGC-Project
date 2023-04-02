<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "class_reg";


$conn = mysqli_connect($serverName, $userName, $password, $dbName);
$idCourse_reg = $_POST['id'];
$cls_one = $_POST['class1'];
$cls_two = $_POST['class2'];
$cls_three = $_POST['class3'];
$cls_four = $_POST['class4'];
$semester_type = $_POST['semester'];

if (!empty($idCourse_reg) || !empty ($cls_one) || !empty($cls_two) || !empty($cls_three) || !empty($cls_four) || !empty($semester_type))
{

    if  (mysqli_connect_error()){
        die ('Connect Error('. mysql_connect_errno().')'. mysql_connect_error());
    } else {
        $SELECT = "SELECT idCourse_reg FROM course_reg Where id
         = ? Limit 1";
        $INSERT = "INSERT Into Course_reg (idCourse_reg, cls_one, cls_two, cls_three, cls_four, semester_type) values (?,?,?,?,?,?)";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $idCourse_reg),
        $stmt->execute();
        $stmt->bind_result($idCourse_reg);
        $stmt->store_results();
        $rnum = $stmt->num_rows; 

        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare ($INSERT);
            $stmt->bind_param("sjdkfgu",$idCourse_reg, $cls_one, $cls_two, $cls_three, $cls_four, $semester_type);
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


