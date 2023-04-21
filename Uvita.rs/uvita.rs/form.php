<?php
if(!isset($_POST['submit']))
{
    // This page should not be accessed directly. Need to submit the form.
    echo "Greška; morate da pošaljete podatke!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

// Validate first
if(empty($name)|| empty($visitor_email) )
{
    echo "Ime i E-mail  su obavezni!";
    exit;
}

$email_from = 'uvitadebeljaca@hotmail.com'; // <== Put your email adress here
$email_subject ="Nova prijava preko forme na sajtu";
$email_body ="Primili ste novu poruku od korisnika: $name .\n".
                "E-mail adresa: $visitor_email\n".
                "Ovde je poruka:\n $message".

$to = "uvitadebeljaca@hotmail.com"; // <== Put your email adress here
$headers = "Od: $email_from \r\n";

// Send the email!
mail($to,$email_subject,$email_body,$headers);
?>
