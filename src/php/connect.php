<?php



function dbConnect() {
    include 'credentials.php';
    return new mysqli($host,$username,$password);
}


function executeRequest($sqlRequest){
    $dbConnection = $dbConnect();
    $dbConnection->query($sqlRequest);
    $dbConnection->close();

}


function insertMessageInDataBase($email, $message, $rgpd) {
    $sqlRequest = "INSERT INTO Message VALUES('";
    $sqlRequest .= $email;
    $sqlRequest .= "','";
    $sqlRequest .= $message;
    $sqlRequest .= "','";
    $sqlRequest .= (rgpd ? 1 : 0);
    $sqlRequest .= ")";
    executeRequest($sqlRequest);
}

?>