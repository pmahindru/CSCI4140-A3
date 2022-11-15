<?php
include "../../../database/db.php";
include "../../../class/Parts022.php";

//adding header as application/json
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=UTF-8");

// add the db connection to the Parts constructor
$part = new Parts022($conn);

$part->tableName = "PartsY022";

// get the part no from the link and assign to the partNo022 in the part class
$part->partNo022 = isset($_GET['partNo022']) ? $_GET['partNo022'] : die;

// get single parts from the class
$getParts = $part->getSinglePart022();

// isset is refer to the given link
// How to avoid undefined offset error in php ? GeeksforGeeks. (2021, July 31). Retrieved November 12, 2022, from https://www.geeksforgeeks.org/how-to-avoid-undefined-offset-error-in-php/ 
if (isset($getParts->PartsY022[0]))
{
    // http_response_code is refer to the given link
    // HTTP response status codes - HTTP: MDN. HTTP | MDN. (n.d.). Retrieved November 12, 2022, from https://developer.mozilla.org/en-US/docs/Web/HTTP/Status 
    http_response_code(200);
    echo json_encode($getParts, JSON_PRETTY_PRINT);
}
?>