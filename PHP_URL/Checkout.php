<?php

include "../BaseURL.php";

// get all the value information to display cart and store in array
$clientID = $_POST["clientID"];
$url = $_POST["url"];
$data_userSelectPart = json_decode(file_get_contents(BASEURL . $url . "UserSelectPartsAPI/readUserSelectPart022.php/?clientID022=$clientID"));
$data_parts = json_decode(file_get_contents(BASEURL . $url . "PartsAPI/readPart022.php"));

// new array which have all information
$all_fields_for_checkout = array();

$Parts022_company;
$userSelectPart022_company;
$bool_check = false;

if($url === "companyX/APIs/")
{
    $Parts022_company = $data_parts->Parts022;
    $userSelectPart022_company = $data_userSelectPart->user_select_parts022;
}
else if($url === "companyY/APIs/")
{
    $Parts022_company = $data_parts->PartsY022;
    $userSelectPart022_company = $data_userSelectPart->user_select_partsY022;
}
else
{
    $Parts022_company = $data_parts->PartsZ022;
    $userSelectPart022_company = $data_userSelectPart->user_select_partsZ022;
    $bool_check = true;
}

// loop to store count and all other value information
for ($i=0; $i < sizeof((array) $Parts022_company); $i++) { 
    $count = 0;

    for ($j = 0; $j < sizeof((array) $userSelectPart022_company); $j++) { 
        
        if ($bool_check === true) {
            // preg_replace is refer to the give link
            // Gago DesignGago Design 96222 gold badges99 silver badges1616 bronze badges, dan-leedan-lee 14.3k55 gold badges5050 silver badges7777 bronze badges, hszhsz 145k5959 gold badges254254 silver badges308308 bronze badges, VegerVeger 36.6k1111 gold badges107107 silver badges114114 bronze badges, Naveen DANaveen DA 3, Dimpal GohilDimpal Gohil 22122 silver badges1010 bronze badges, &amp; Bohdan PukhovskyiBohdan Pukhovskyi 1511 bronze badge. (1960, March 1). How to remove all numbers from string? Stack Overflow. Retrieved November 12, 2022, from https://stackoverflow.com/questions/14236148/how-to-remove-all-numbers-from-string
            $table_Name = preg_replace('/\d+/', '', $userSelectPart022_company[$j]->partNo022);
            $getPartNo = preg_replace('/[^0-9]+/', '', $userSelectPart022_company[$j]->partNo022);
            
            if ($table_Name === $Parts022_company[$i]->companyName && $getPartNo === $Parts022_company[$i]->partNo022) 
            {
                $count++;
            }   
        }
        else{
             if ($userSelectPart022_company[$j]->partNo022 == $Parts022_company[$i]->partNo022) {
                $count++;
            }
        }
    }
    
    if ($count !== 0) {
        $json_object = new stdClass();
        $json_object->clientID022 = $clientID;
        $json_object->partNo022 = $Parts022_company[$i]->partNo022;
        $json_object->currentPrice022 = $Parts022_company[$i]->currentPrice022;
        $json_object->user_select_count022 = $count;
        $json_object->companyName = $Parts022_company[$i]->companyName;
        $all_fields_for_checkout[] = $json_object;
    }
}

// adding the link in the end
$json_object = new stdClass();
$json_object->url = BASEURL . $url;
$all_fields_for_checkout[] = $json_object;

$html_text = '';
$total_cost = 0;

// loop to get this html text so that i can show then all part  with information and also total price with it 
for ($i=0; $i < sizeof((array) $all_fields_for_checkout) - 1; $i++) { 
    $partNo022 = $all_fields_for_checkout[$i]->partNo022;
    
    if ($bool_check === true) {
        $companyName = $all_fields_for_checkout[$i]->companyName;
        $partNCompany = $partNo022 . $companyName;
        $part_with_id = json_decode(file_get_contents(BASEURL . $url . "PartsAPI/readSinglePart022.php/?partNo022=$partNCompany"));
        
        $Parts022_with_company;        
        if ($companyName === "X"){
            $Parts022_with_company = $part_with_id->Parts022;
        }
        else{
            $Parts022_with_company = $part_with_id->PartsY022;
        }

        $partNo022_with_company = $Parts022_with_company[0]->partNo022 . $companyName;
        $total_cost += ($all_fields_for_checkout[$i]->user_select_count022 * $Parts022_with_company[0]->currentPrice022);
        $html_text .=
        '
            <div class="card_checkout">
                <div class="checkout_button">
                    <p>
                        <button onclick="add('. "`{$partNo022_with_company}`" . ','. $Parts022_with_company[0]->QoH022 .','. $clientID .','. $all_fields_for_checkout[$i]->user_select_count022 . ',' . "`{$url}`" . ')">
                            ADD
                        </button>
                    </p>
                </div>
                <div class="checkout_img">
                    <img src="../img/'.$Parts022_with_company[0]->partImgs022.'" alt="img" width="80%" height="150px"/>
                </div>
                <div class="checkout_text">
                    <h1>'.$Parts022_with_company[0]->partName022.'</h1>
                    <p>'.$Parts022_with_company[0]->partDescription022.'</p>
                    <p>'.$all_fields_for_checkout[$i]->user_select_count022 . ' * ' . $Parts022_with_company[0]->currentPrice022 . ' => $' . ($all_fields_for_checkout[$i]->user_select_count022 * $Parts022_with_company[0]->currentPrice022) .'</p>
                </div>
                <div class="checkout_button">
                    <p> 
                        <button onclick="sub('. "`{$partNo022_with_company}`" .','. $Parts022_with_company[0]->QoH022 .','. $clientID .','. $all_fields_for_checkout[$i]->user_select_count022 . ',' . "`{$url}`"  . ')">
                            SUB
                        </button> 
                    </p>
                </div>
            </div>
        ';
    }
    else{
        $part_with_id = json_decode(file_get_contents(BASEURL . $url . "PartsAPI/readSinglePart022.php/?partNo022=$partNo022"));
        
        if($url === "companyX/APIs/")
        {
            $Parts022_with_company = $part_with_id->Parts022;
        }
        else if($url === "companyY/APIs/")
        {
            $Parts022_with_company = $part_with_id->PartsY022;
        }
        $total_cost += ($all_fields_for_checkout[$i]->user_select_count022 * $Parts022_with_company[0]->currentPrice022);
        $html_text .=
        '
            <div class="card_checkout">
                <div class="checkout_button">
                    <p>
                        <button onclick="add('. $Parts022_with_company[0]->partNo022 .','. $Parts022_with_company[0]->QoH022 .','. $clientID .','. $all_fields_for_checkout[$i]->user_select_count022 . ',' . "`{$url}`" . ')">
                            ADD
                        </button>
                    </p>
                </div>
                <div class="checkout_img">
                    <img src="../img/'.$Parts022_with_company[0]->partImgs022.'" alt="img" width="80%" height="150px"/>
                </div>
                <div class="checkout_text">
                    <h1>'.$Parts022_with_company[0]->partName022.'</h1>
                    <p>'.$Parts022_with_company[0]->partDescription022.'</p>
                    <p>'.$all_fields_for_checkout[$i]->user_select_count022 . ' * ' . $Parts022_with_company[0]->currentPrice022 . ' => $' . ($all_fields_for_checkout[$i]->user_select_count022 * $Parts022_with_company[0]->currentPrice022) .'</p>
                </div>
                <div class="checkout_button">
                    <p> 
                        <button onclick="sub('. $Parts022_with_company[0]->partNo022 .','. $Parts022_with_company[0]->QoH022 .','. $clientID .','. $all_fields_for_checkout[$i]->user_select_count022 . ',' . "`{$url}`"  . ')">
                            SUB
                        </button> 
                    </p>
                </div>
            </div>
        ';
    }
}

// add the total_cost in the end so that before user click checkout they will total price
$html_text .= '<p class="checkout_total_price"> Total Cost = $'. $total_cost  .' </p>';

// make an object and assign html text and the array
$send_data = new stdClass();
$send_data->html_text = $html_text;
$send_data->checkout_array = $all_fields_for_checkout;

// encode and echo the object to access in the js function which is checkout
echo json_encode($send_data);

?>