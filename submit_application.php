<?php
include 'db_config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $applied_program = $_POST['applied_program'];

    $sql = "INSERT INTO `admission data` (`name`, `email`, `phone`, `address`, `applied_program`) VALUES ('$name', '$email', '$phone', '$address', '$applied_program')";

    if($conn->query($sql) == TRUE) {
        echo "Application Submitted Successfully.";
    } else {
        echo "Error ! " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();

?>