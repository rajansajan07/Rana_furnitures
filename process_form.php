<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate the form data
    if (empty($name) || empty($email) || empty($message)) {
        // If any required fields are empty, display an error message
        echo "Please fill out all required fields.";
    } else {
        // Send the email
        $to = "rsajankumar071@gmail.com";
        $subject = "New form submission";
        $body = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;
        $headers = "From: " . $email;

        if (mail($to, $subject, $body, $headers)) {
            // If the email is sent successfully, display a success message
            echo "Thank you for your message!";
        } else {
            // If there's an error sending the email, display an error message
            echo "Sorry, there was an error sending your message. Please try again later.";
        }
    }
}
?>

