<?php
include "../../../database/db.php";
include "../../../class/Parts022.php";

//adding header as application/json
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=UTF-8");

// add the db connection to the parts constructor 
$part = new Parts022($conn);

$part->tableName = "Parts022";

// get all parts from the class
$getParts = $part->getAllParts022();

$part->tableName = "PartsY022";

// get all parts from the class
$getPartsY = $part->getAllParts022();

// size of the response is more than 0 then echo the get all parts
if (sizeof((array) $getParts) > 0 || sizeof((array) $getPartsY) > 0)
{
    $greatSizeArray;
    $smallSizeArray;
    if (sizeof((array) $getParts->Parts022) > sizeof((array) $getPartsY->PartsY022)) {
        $greatSizeArray = $getParts->Parts022;
        $smallSizeArray = $getPartsY->PartsY022;
    }
    else if (sizeof((array) $getParts->Parts022) < sizeof((array) $getPartsY->PartsY022)) {
        $greatSizeArray = $getPartsY->PartsY022;
        $smallSizeArray = $getParts->Parts022;
    }
    else{
        $greatSizeArray = $getParts->Parts022;
        $smallSizeArray = $getPartsY->PartsY022;
    }

    $getPartsZ = array();
    $index = 0;
    $save_Y_partNo022 = array();
    $save_Y_partNo022_index = 0;
    for ($i = 0; $i < sizeof((array) $greatSizeArray); $i++) { 
        $partNo022 = $greatSizeArray[$i]["partNo022"];
        $partName022 = $greatSizeArray[$i]["partName022"];
        $currentPrice022 = $greatSizeArray[$i]["currentPrice022"];
        $QoH022 = $greatSizeArray[$i]["QoH022"];
        $bool_check = false;
        
        for ($j = 0; $j < sizeof((array) $smallSizeArray); $j++) {
            $partNoY022 = $smallSizeArray[$j]["partNo022"];
            $partNameY022 = $smallSizeArray[$j]["partName022"];
            $currentPriceY022 = $smallSizeArray[$j]["currentPrice022"];
            $QoH0Y22 = $smallSizeArray[$j]["QoH022"];
            
            if ($partNo022 === $partNoY022 && $partName022 === $partNameY022) {
                if ($currentPrice022 < $currentPriceY022) {
                    if ($QoH022 === 0) {
                        $getPartsZ[$index] = $smallSizeArray[$j];
                        $index++;
                    }
                    else{
                        $getPartsZ[$index] = $greatSizeArray[$i];
                        $index++;
                    }
                }
                else if ($currentPrice022 > $currentPriceY022) {
                    if ($QoH0Y22 === 0) {
                        $getPartsZ[$index] = $greatSizeArray[$i];
                        $index++;
                    }
                    else{
                        $getPartsZ[$index] = $smallSizeArray[$j];
                        $index++;
                    }
                }
                else{
                    if($QoH022 >= $QoH0Y22){
                        $getPartsZ[$index] = $greatSizeArray[$i];
                        $index++;
                    }
                    else{
                        $getPartsZ[$index] = $smallSizeArray[$j];
                        $index++;
                    }
                }
                $bool_check = true;
                $save_Y_partNo022[$save_Y_partNo022_index] = $partNo022;
                $save_Y_partNo022_index++;
                break;
            }
        }
        if ($bool_check === false) {
            $getPartsZ[$index] = $greatSizeArray[$i];
            $index++;
        }
    }
    
    for ($k = 0; $k < sizeof((array) $smallSizeArray); $k++) { 
        $partNoY022 = $smallSizeArray[$k]["partNo022"];
        $bool_check = false;
        for ($j = 0; $j < $save_Y_partNo022_index; $j++) {
            if ($save_Y_partNo022[$j] === $partNoY022) {
                $bool_check = true;
                break;
            }
        }
        if ($bool_check === false) {
            $getPartsZ[$index] = $smallSizeArray[$k];
            $index++;
        }
    }
    
    $json_object = new stdClass();
    $getTableName = "PartsZ022";
    $json_object->$getTableName = $getPartsZ;
  
    echo json_encode($json_object, JSON_PRETTY_PRINT);
}
?>