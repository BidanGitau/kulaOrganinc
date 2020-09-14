
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['message'];
    $to = 'support@kulaorganic.com';
    $subject = "Form submission";
    $message = "Name:" . $name . "\n" . "email:" . $email . "\n" . "wrote the following" . "\n" . $content;
    $headers = "From:" . $email;
    mail($to, $subject, $message, $headers);
    header("Location:index.html");
}
?>