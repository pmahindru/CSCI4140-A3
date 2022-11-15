<?php
include "../../../database/db.php";
include "../../../class/Lines022.php";

//adding header as application/json
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=UTF-8");

// add the db connection to the Line constructor
$Lines = new Lines022($conn);

$Lines->tableName = "LinesZ022";

// get the POs NO from the link and assign in the Line022 class 
$Lines->POsNo022 = isset($_GET['POsNo022']) ? $_GET['POsNo022'] : die;

// get all Line with respect the POsID from the class
$getLines = $Lines->getWithPOsIDLines022();

// isset is refer to the given link
// How to avoid undefined offset error in php ? GeeksforGeeks. (2021, July 31). Retrieved November 12, 2022, from https://www.geeksforgeeks.org/how-to-avoid-undefined-offset-error-in-php/ 
if (isset($getLines->LinesZ022[0]))
{
    // http_response_code is refer to the given link
    // HTTP response status codes - HTTP: MDN. HTTP | MDN. (n.d.). Retrieved November 12, 2022, from https://developer.mozilla.org/en-US/docs/Web/HTTP/Status 
    http_response_code(200);
    echo json_encode($getLines, JSON_PRETTY_PRINT);
}
?>