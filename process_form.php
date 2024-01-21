<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Validate data (you may add more validation based on your requirements)

    // Send email (similar to the previous PHP example)


    $to = "gnansekharofficial@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $headers = "From: $email";

    $emailBody = "Full Name: $fullName\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Phone: $phone\n";
    $emailBody .= "Message:\n$message";

    mail($to, $subject, $emailBody, $headers);

    // Store data in a separate file (similar to the previous PHP example)
    $data = "$fullName,$email,$phone,$message\n";
    file_put_contents("form_data.csv", $data, FILE_APPEND);




     // Redirect back to the form or a thank you page
     header("Location: index.html"); // Replace with the actual path of your form page
     exit();

   
}
?>
