
<?php

require_once("./loginManager.php");

$form_data = $_POST["formData"];

$email = $form_data["employeeEmail"];

echo "fuera";

if (getEmployeeInfo($email) == true) {
    echo "true";
    header("Location: ../src/dashboard.php");
} else {
    echo "error";
    header("Location: ../../index.php?emailError=true");
}



// print_r($form_data);












function checkPassword($userJsonPassword)
{

    $passwordDb = "123456";


    $passwordDbEnc = password_hash($passwordDb, PASSWORD_DEFAULT);


    if (password_verify($userJsonPassword, $passwordDbEnc)) {
        return true;
        header("Location: ./src/dashboard.php");
    } else {
        return false;
        header("Location: ../index.php");
    }
}
