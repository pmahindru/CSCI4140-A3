<?php
include "../BaseURL.php";

$part_id = $_POST["part_id"];
$part_quantity = $_POST["part_quantity"];
$clientID = $_POST["clientID"];
$count = $_POST["count"];
$url = $_POST["url"];

if ($part_quantity == 0) {
    echo "Part is Not Available"; 
}
else{
    // user select count is more than or equal to 1 
    if ($count >= 1) 
    {
        // sub the user table so that we will know what part they want to want and also which user wants
        echo json_encode(file_get_contents(BASEURL . $url . "UserSelectPartsAPI/deleteUserSelectParts022.php/?clientID022=$clientID&partNo022=$part_id&partQoh022=$part_quantity&user_count=$count&url=$url"));
    }
    else
    {
        echo "Parts Reached Quantity";
    }
}

?>