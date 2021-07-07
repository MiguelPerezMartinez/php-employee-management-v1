

<?php


function getEmployeeInfo($email)
{
    $json_data = json_decode(file_get_contents("../../resources/users.json"), true);
    // print_r($json_data);
    foreach ($json_data["users"] as $user) {
        if ($user["email"] == $email) {
        } else {
            echo "false";
        }
    }
}



































// function checkLogout()
// {
//     if (isset($_GET["logout"]) && !isset($_SESSION["email"])) return ["type" => "primary", "text" => "Logout succesful"];
// }
