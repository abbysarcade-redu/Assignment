<?php

if($_POST) {
    $customer_name = "";
    $customer_email = "";
    $customer_phone_number = "";
    $customer_message = "";
    $email_body = "";
    $email_subject = "Customer Email";
    $email_recipient = "a.donkin@redu.co.uk";
    $c_email_subject = "Thank you for your email";
    $c_email_body = "Thank you for getting in touch with Game On. We have received your email and will be in touch as soon as possible.

    Have a good day,
    Game On Customer Service Team.";

    if(isset($_POST['customer_name'])) {
        $customer_name = filter_var($_POST['customer_name'], FILTER_SANITIZE_STRING);
        $email_body .= "Name: ".$customer_name.",
        ";
    }

    if(isset($_POST['customer_email'])) {
        $customer_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['customer_email']);
        $customer_email = filter_var($customer_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "Email: ".$customer_email.",
        ";
    }

    if(isset($_POST['customer_message'])) {
        $customer_message = htmlspecialchars($_POST['customer_message']);
        $email_body .= "Message: ".$customer_message.",
        ";
    }

    $email_body .= "
    Please respond directly to this email.";

    $headers = 'MIME-Version: 1.0' . "\r\n" . 'From: ' . $customer_email . "\r\n";
?>
<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<div class="nav-buffer">
    <div class="content-page">
        <div class="hero-image">
            <img src="Style/images/contact-us-banner.png" class="hero">
        </div>
        <div class="message-content-block">
            <h1>Send Us a Message!</h1>
            <p class="message-content">If you have any queries or question, please do not hesitate to send us a message using the form below and a member of our customer service team will get back in touch as soon as possible. We look forward to speaking to you. </p>
        </div>
        <div class="contact-page-layout">
            <div>
                <?php
                $mail = mail($email_recipient, $email_subject, $email_body, $headers);

                if ($mail) {
                    mail($customer_email, $c_email_subject, $c_email_body);
                    echo "<p class='is-white'>Thank you for getting in touch $customer_name. We have received your message and will respond ASAP."; ?>
                    <img src="Style/images/Sent.png" width="80%">
                    <?php
                } else {
                    echo '<p class="is-white">We are very sorry but there has been an error and the message has not gone through.</p>';
                    ?>
                    <img src="Style/images/send_error.png">

                <?php }
                }?>
            </div>
        </div>
        <div class="contact-page-layout">
            <div>
                <h1 class="is-blue"> Where to Find Us.</h1>
                <p class="is-blue">The David Coldman Informatics Centre,</p>
                <p class="is-blue">Monkwearmouth,</p>
                <p class="is-blue">Sunderland,</p>
                <p class="is-blue">SR6 0DD</p>

                <p class="is-blue">Located in <a class="is-pink">The University of Sunderland.</a></p>
                <div class="dynamic-buffer-space"></div>
            </div>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=SR6%200DD&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://123movies-to.org"></a>
                    <br>
                    <style>.mapouter{position:relative;text-align:right;height:auto;width:auto;}</style>
                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;border-radius: 20px;}</style>
                </div>
            </div>
    </div>
</div>

    <?php include ("layout/footer.php"); ?>


</body>
</html>

