<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
  echo $result = file_get_contents('../resources/employees.json');
}

if ($method == 'POST') {
  $json = json_decode(file_get_contents('../resources/employees.json'));

  $data = array(
    'id' => count($json) + 1,
    'name' => $_POST['name'],
    'lastName' => $_POST['lastName'],
    'email' => $_POST['email'],
    'gender' => $_POST['gender'],
    'city' => $_POST['city'],
    'streetAddress' => $_POST['streetAddress'],
    'state' => $_POST['state'],
    'age' => $_POST['age'],
    'postalCode' => $_POST['postalCode'],
    'phoneNumber' => $_POST['phoneNumber']
  );

  array_push($json, $data);
  $fp = fopen("../resources/employees.json", "w");
  fwrite($fp, json_encode($json));
  fclose($fp);
}
