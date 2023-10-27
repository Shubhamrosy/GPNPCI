<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["mail"];
    $message = $_POST["message"];
    $additional = $_POST["additional"];

    // Define the file where you want to save the form data
    $file = "contact_form_data.txt";

    // Compose the data to be saved
    $data = "First Name: $fname\nLast Name: $lname\nEmail: $email\nMessage: $message\nAdditional Details: $additional\n\n";

    // Save the data to the file
    file_put_contents($file, $data, FILE_APPEND);

    // Redirect back to the form or a thank you page
    header("Location: thank_you.html"); // You can create a "thank_you.html" page

    exit();
}
?>
