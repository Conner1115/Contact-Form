<!DOCTYPE html>

<?php
    $sent = false;
    if(isset($_POST["to"]) && $_POST["to"] != ''){
        if(filter_var($_POST["to"], FILTER_VALIDATE_EMAIL)){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $to = $_POST["to"];
            $subject = "Testing PHP mail functionality";

            $body = "From: " . $name . "\nAt: " . $email . "\n\n" . $message;
            if(mail($to,$subject,$message)){
                $sent = true;
            }else{
                $sent = false;
            }
        }
    }
?>
<html>
    <head>
        <link href = "style.css" rel = "stylesheet"/>
    </head>
<body>
<?php
if($sent):
?>
<h1 id = "valid-send">Message Sent</h1>
<?php
else:
?>
<form action = "index.php" method = "post">
    <h3 id = "indicator">PHP email form</h3>
    <input name = "name" id = "name" type = "text" class = "text-input" placeholder = "Your name..." required/>
    <input name = "email" id = "email" type = "email" class = "text-input" placeholder = "Your email..." required/>
    <input name = "to" id = "email" type = "email" class = "text-input" placeholder = "Your friend's email..." required/>
    <textArea id = "message" name = "message" type = "text" placeholder = "message..." required></textArea>
    <input id = "submit" type = "submit" value = "Send Message"/>
</form>
<?php
endif;
?>
</body>
</html>

