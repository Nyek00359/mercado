<?php

        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST']; // Change this to your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER']; // Your email
        $mail->Password = $_ENV['SMTP_PASS']; // Your email password or App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $_ENV['SMTP_PORT'];
        // 
        // Email Content
        $mail->setFrom($email, $name);
        $mail->addAddress('recipient@example.com'); // Change to recipient's email
        $mail->isHTML(true);
        $mail->Subject = "Password Update Notification";
        $mail->Body    = "<p>You have successfully updated your password.</p>
                          <p>Hi $name,</p>
                          <p>You may now log-in to the e-Mercado Portal using the information below:</p>
                          <p><strong>Username:</strong> $username</p>
                          <p><strong>Password:</strong> $password</p>
                          <p>This is a system-generated e-mail. Please do not reply.</p>
                          <p>Thanks for your time,<br>The MIS Team</p>";
?>
