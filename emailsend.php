<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "llopez@answerbailbonds.com";"; // Change this to the email you want to receive the form data
    $location = $_POST['location']; // Retrieve the location
    $name = $_POST['name']; // Inmate's Name
    $dob = $_POST['dob']; // Inmate's D.O.B.
    $name2 = $_POST['name2']; // Your Name
    $phone = $_POST['phone']; // Your Phone Number

    $email_content = "Location: $location\n\n";
    $email_content .= "Inmate's Name: $name\n";
    $email_content .= "Inmate's D.O.B.: $dob\n";
    $email_content .= "Your Name: $name2\n";
    $email_content .= "Your Phone Number: $phone\n";

    $headers = "From: $name2 <$recipient>";

    mail($recipient, 'Form Submission from ' . $location, $email_content, $headers);

    // Additional actions or messages after the email is sent can be added here.
}
?>
