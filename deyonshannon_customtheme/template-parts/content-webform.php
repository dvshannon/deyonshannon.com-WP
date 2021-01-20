<?php

$message_sent = false;
// form validation
if(isset($_POST['email']) && $_POST['email'] != ''){
// print_r($_POST);
// echo '</pre>';

    // email validation
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL )) {
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userMessage = $_POST['message'];

        $to = "dvshannon96@gmail.com";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$userMessage. "\r\n";

        mail($to, $body);

        $message_sent = true;
    } else {
        $invalid_class_name = "form invalid";
    }
}

?>

<body>

<?php
if($message_sent);
?>

    <h3>Your email has been sent!</h3>





    <div class="container">
        <form action="webform.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name.." tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input <?= $invalid_class_name ?? ""?>type="email" class="form-control" id="email" name="email" placeholder="Enter your email.." tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter message.." tabindex="3"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send</button>
            </div>
        </form>
    </div>
    
</body>

</html>


<?php
get_footer();
?>