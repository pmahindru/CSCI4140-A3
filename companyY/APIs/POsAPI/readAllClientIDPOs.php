<?php
include "../../../database/db.php";
include "../../../class/POs022.php";

//adding header as application/json
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=UTF-8");

// add the db connection to the POs constructor
$POs = new POs022($conn);

// get the client Id from the link and assign to the client POs class
$POs->tableName = "POsY022";
$POs->clientID022 = isset($_GET['clientID022']) ? $_GET['clientID022'] : die;

// get all POS with respect the client ID from the class
$getPos = $POs->getAllWithClientIDPOs022();

// isset is refer to the given link
// How to avoid undefined offset error in php ? GeeksforGeeks. (2021, July 31). Retrieved November 12, 2022, from https://www.geeksforgeeks.org/how-to-avoid-undefined-offset-error-in-php/ 
if (isset($getPos->POsY022[0]))
{
    // http_response_code is refer to the given link
    // HTTP response status codes - HTTP: MDN. HTTP | MDN. (n.d.). Retrieved November 12, 2022, from https://developer.mozilla.org/en-US/docs/Web/HTTP/Status 
    http_response_code(200);
    echo json_encode($getPos, JSON_PRETTY_PRINT);
}
?>