

<?php


function getEmployeeName()
{
    $json = file_get_contents("../../resources/users.json");

    $json_data = json_decode($json, true);

    print_r($json_data);
}

/// 


























// function checkSession()
// {

//     session_start();

//     $urlFile = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

//     if ($urlFile == "index.php") {

//         if (isset($_SESSION["email"])) {
//             header("Location:./src/dashboard.php");
//         } else {

//             if ($alert = checkLoginError()) return $alert;


//             if ($alert = checkLoginInfo()) return $alert;


//             if ($alert = checkLogout()) return $alert;
//         }
//     } else {
//         if (!isset($_SESSION["email"])) {
//             $_SESSION["loginError"] = "You don't have permission to enter the dashboard. Please Login.";
//             header("Location:../index.php");
//         }
//     }
// }



// function authUser()
// {

//     session_start();


//     $email = $_POST["email"];
//     $pass = $_POST["pass"];


//     if (checkUser($email, $pass)) {

//         $_SESSION["email"] = $email;

//         header("Location:./src/dashboard.php");
//     } else {
//         $_SESSION["loginError"] = "Wrong email or password!";
//         header("Location:../index.php");
//     }
// }

// function checkUser(string $email, string $pass)
// {
//     $emailDb = "admin@assemblerschool.com";
//     $passDb = "123456";


//     $passDbEnc = password_hash($passDb, PASSWORD_DEFAULT);


//     if ($email == $emailDb && password_verify($pass, $passDbEnc)) {
//         return true;
//     } else {
//         return false;
//     }
// }


// function checkLoginError()
// {
//     if (isset($_SESSION["loginError"])) {
//         $errorText = $_SESSION["loginError"];
//         unset($_SESSION["loginError"]);
//         return ["type" => "danger", "text" => $errorText];
//     }
// }

// function checkLoginInfo()
// {
//     if (isset($_SESSION["loginInfo"])) {
//         $infoText = $_SESSION["loginInfo"];
//         unset($_SESSION["loginInfo"]);
//         return ["type" => "primary", "text" => $infoText];
//     }
// }

// function destroySessionCookie()
// {
//     if (ini_get("session.use_cookies")) {
//         $params = session_get_cookie_params();
//         setcookie(
//             session_name(),
//             '',
//             time() - 42000,
//             $params["path"],
//             $params["domain"],
//             $params["secure"],
//             $params["httponly"]
//         );
//     }
// }

// function destroySession()
// {

//     session_start();


//     unset($_SESSION);


//     destroySessionCookie();

//     session_destroy();
//     header("Location:../index.php?logout=true");
// }


// function checkLogout()
// {
//     if (isset($_GET["logout"]) && !isset($_SESSION["email"])) return ["type" => "primary", "text" => "Logout succesful"];
// }
