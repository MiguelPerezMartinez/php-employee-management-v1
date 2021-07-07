<?php
session_start();

function checkUserInfo($data)
{
    $json_data = json_decode(file_get_contents("../../resources/users.json"), true);
    foreach ($json_data["users"] as $user) {
        if ($user["email"] == $data["email"]) {
            if (password_verify($data["password"], $user["password"])) {
                $_SESSION["email"] = $data["email"];
                header("Location: ../Dashboard.php");
            } else {
                header("Location: ../../index.php?message=error");
            }
        } else {
            header("Location: ../../index.php?message=error");
        }
    }
}


// function checkLogout()
// {
//     if (isset($_GET["logout"]) && !isset($_SESSION["email"])) return ["type" => "primary", "text" => "Logout succesful"];
// }
