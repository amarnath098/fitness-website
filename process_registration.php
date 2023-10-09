<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $fullName = $_POST["full-name"];
  
  $password = $_POST["password"];
  $birthdate = $_POST["birthdate"];
  $gender = $_POST["gender"];
  $address = $_POST["address"];

  // Perform form validation
  $errors = [];

  if (empty($fullName)) {
    $errors[] = "Full name is required.";
  }

  if (empty($email)) {
    $errors[] = "Email is required.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
  }

  if (empty($password)) {
    $errors[] = "Password is required.";
  }

  if (empty($birthdate)) {
    $errors[] = "Date of birth is required.";
  }

  if (empty($gender)) {
    $errors[] = "Gender is required.";
  }

  if (empty($address)) {
    $errors[] = "Address is required.";
  }

  // Process form submission
  if (empty($errors)) {
 
    if(isset($_POST['register'])){
        header('Location: index.html');
    }
    exit();
  }
}
?>
