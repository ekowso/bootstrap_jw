<?php

if (isset($_POST['submit'])) {
  $first_name = $_POST['first_name'];
  $second_name = $_POST['second_name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  echo "Name: $first_name $second_name <br>";
  echo "Email: $email <br>";
  echo "Message: $message <br>";
}

?>