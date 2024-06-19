<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $date_of_travel = $_POST["date_of_travel"];
  $email = $_POST["email"];
  $number_of_people = $_POST["number_of_people"];
  $destination = $_POST["destination"];
  $notes = $_POST["notes"];
  $full_info = $_POST["full_info"];

  // configuration
  $mail_to = 'rafabatista1794@gmail.com';
  $subject = 'Travellers Travel Request';

  // prepare email headers
  $headers = "From: " . $email . " \r\n" .
    "Reply-To: " . $email . " \r\n" .
    "Content-type: text/plain; charset=UTF-8";

  // send the email
  mail($mail_to, $subject, $full_info, $headers);
  echo '200';
}
?>