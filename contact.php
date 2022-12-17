<?php
//variable name
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

//check input fields
if (empty($name)) || (empty($email)) || (empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail("ashgaming1980@gmail.com", "Contact Form Message", $message, "From: $name <$email>");
}
?>
