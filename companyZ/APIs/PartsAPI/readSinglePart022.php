<?php
include "../../../database/db.php";
include "../../../class/Parts022.php";

//adding header as application/json
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=UTF-8");

// add the db connection to the Parts constructor
$part = new Parts022($conn);

// preg_replace is refer to the give link
// Gago DesignGago Design 96222 gold badges99 silver badges1616 bronze badges, dan-leedan-lee 14.3k55 gold badges5050 silver badges7777 bronze badges, hszhsz 145k5959 gold badges254254 silver badges308308 bronze badges, VegerVeger 36.6k1111 gold badges107107 silver badges114114 bronze badges, Naveen DANaveen DA 3, Dimpal GohilDimpal Gohil 22122 silver badges1010 bronze badges, &amp; Bohdan PukhovskyiBohdan Pukhovskyi 1511 bronze badge. (1960, March 1). How to remove all numbers from string? Stack Overflow. Retrieved November 12, 2022, from https://stackoverflow.com/questions/14236148/how-to-remove-all-numbers-from-string
$table_Name = preg_replace('/\d+/', '', $_GET['partNo022']);
$getPartNo = preg_replace('/[^0-9]+/', '', $_GET['partNo022']);

if ($table_Name === "X") {
    $part->tableName = "Parts022";

    // get the part no from the link and assign to the partNo022 in the part class
    $part->partNo022 = isset($_GET['partNo022']) ? $_GET['partNo022'] : die;

    // get single parts from the class
    $getParts = $part->getSinglePart022();
    
    // isset is refer to the given link
    // How to avoid undefined offset error in php ? GeeksforGeeks. (2021, July 31). Retrieved November 12, 2022, from https://www.geeksforgeeks.org/how-to-avoid-undefined-offset-error-in-php/ 
    if (isset($getParts->Parts022[0]))
    {
        // http_response_code is refer to the given link
        // HTTP response status codes - HTTP: MDN. HTTP | MDN. (n.d.). Retrieved November 12, 2022, from https://developer.mozilla.org/en-US/docs/Web/HTTP/Status 
        http_response_code(200);
        echo json_encode($getParts, JSON_PRETTY_PRINT);
    }
}
else{
    $part->tableName = "PartsY022";
    
    // get the part no from the link and assign to the partNo022 in the part class
    $part->partNo022 = isset($_GET['partNo022']) ? $_GET['partNo022'] : die;

    // get single parts from the class
    $getPartsY = $part->getSinglePart022();

    // http_response_code is refer to the given link
    // HTTP response status codes - HTTP: MDN. HTTP | MDN. (n.d.). Retrieved November 12, 2022, from https://developer.mozilla.org/en-US/docs/Web/HTTP/Status 
    if (isset($getPartsY->PartsY022[0]))
    {
        // http_response_code is refer to the given link
        // HTTP response status codes - HTTP: MDN. HTTP | MDN. (n.d.). Retrieved November 12, 2022, from https://developer.mozilla.org/en-US/docs/Web/HTTP/Status 
        http_response_code(200);
        echo json_encode($getPartsY, JSON_PRETTY_PRINT);
    }
}
?>