<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/* ================= VARIABLES ================= */
$nameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = '';
$name = $email = $phone = $subject = $message = '';

/* ================= FORM SUBMIT ================= */
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $formType = $_POST['form_type'] ?? 'appointment';

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $hasError = false;

    // Name
    if ($name === '') {
        $nameErr = "Name is required";
        $hasError = true;
    }

    // Email
    if ($email === '') {
        $emailErr = "Email is required";
        $hasError = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email address";
        $hasError = true;
    }

    // Phone
    if ($phone === '') {
        $phoneErr = "Phone number is required";
        $hasError = true;
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        $phoneErr = "Enter valid 10-digit phone number";
        $hasError = true;
    }

    // Subject
    if ($subject === '') {
        $subjectErr = "Subject is required";
        $hasError = true;
    }

    // Message
    if ($message === '') {
        $messageErr = "Message is required";
        $hasError = true;
    }

    /* ================= SEND MAIL ================= */
    if (!$hasError) {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'web.hoverbusinessservices@gmail.com';
            $mail->Password = 'zrtycnkdwjjgbybt';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('nudentalmaestro@gmail.com', 'Nu Dental Maestro');
            $mail->addAddress('nudentalmaestro@gmail.com');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = "New Appointment Request – Nu Dental Maestro";

            $mail->Body = "
                <h3>New Appointment Enquiry</h3>
                <p><b>Name:</b> {$name}</p>
                <p><b>Email:</b> {$email}</p>
                <p><b>Phone:</b> {$phone}</p>
                <p><b>Subject:</b> {$subject}</p>
                <p><b>Message:</b> {$message}</p>
            ";

            $mail->send();

            // ✅ Redirect after success
            header("Location: thankyou.php");
            exit;

        } catch (Exception $e) {
            header("Location: 404-error.php");
            exit;
        }
    }
}
