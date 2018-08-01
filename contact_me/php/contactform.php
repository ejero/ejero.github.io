<?php 
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $mailFrom = $_POST["email"];
    $message = $_POST["message"];
    $mailTo = "rosita@quoody.com";
    $heaaders = "From: ".$mailFrom;
    $txt = "You have receved an email from ".$name.".\n\n".$message;
    mail($mailTo, $txt, $heaaders);
    header("Location: index.php?mailsent");
}