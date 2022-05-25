<?php



include('connect.php');
session_start();
$_SESSION['errorMessages'] =[];
$_SESSION['errorMessages']['message'] = ''; 
$forbiddenwords = ['code','coder','test'];


if($_POST)
{
    var_dump($_POST);
    $email = $_POST["email"];
    $messageContent = $_POST['message'];
    $rgpd =ISSET($_POST['rgpd']);

    if($email == null || str_contains($email,"@") == false){
        exitFormAction(false);
    }

    $forbiddenwordsinText = false;

    foreach($forbiddenwords as $word){
        if(str_contains(strtoupper($messageContent),strtoupper($word)))
        {
            $forbiddenwordsinText = true;
        }
    }
    if($forbiddenwordsinText == true){
        $_SESSION['errorMessages']['message'] = 'Un mot interdit a été utilisé';
        exitFormAction(false); 
    }

    $entityType = $_POST["entity"];

    switch($entityType) {
        case "Entreprise":

            sendToCompany($messageContent,$rgpd,$email);

            break;
        case "particulier":

            sendToCompany($messageContent,$rgpd,$email);

            break;
    }

exitFormAction(true);
}

function exitFormAction($success) {
    header("Location: index.php?success=".($success ? 'true' : 'false'));
    exit();
}

function sendToCompany(){
    sendMail('for-company@gmail.com','Email from company', $messageContent);
}

function sendToUser(){
    sendMail('for-user@gmail.com','Email from user', $messageContent);
}

function sendMail($to,$subject,$messageContent){
    if(rgpd == true ) {
    insertMessageInDataBase($email,$messageContent,$rgpd);
    }
    // mail(
    //     $to,
    //     $subject,
    //     $messageContent,
    // );
}
?>