<?php

include "Parts022.php";
include "Clients022.php";

// PHP Oop - Constructor. PHP OOP Constructor. (n.d.). Retrieved October 22, 2022, from https://www.w3schools.com/php/php_oop_constructor.asp 
class user_select_parts022
{
    //database connection
    private $connection;

    // database table name
    public $tableName;
    
    //table columns
    public $ID022;
    public $clientID022;
    public $partNo022;
    public $partQoh022;
    public $user_count;
    public $url;

    // constructor
    public function __construct($database_connection)
    {
        // to assign the database connection = $connection
        $this->connection = $database_connection;
    }

    // insert in the user_select_parts022 table and also update the Parts quantity
    public function addUserSelectParts022()
    {
        $userCount = $this->user_count + 1; 
        $sql = "INSERT INTO " . $this->tableName  . " (ID022, clientID022, partNo022, user_count) VALUES (NULL,'$this->clientID022','$this->partNo022','$userCount')";
        
        if ($this->connection->query($sql) === TRUE) {
            $parts = new Parts022($this->connection);
            
            // strpos refer to the given link
            // How to check if a string contains a specific word in PHP. TutorialRepublic. (n.d.). Retrieved November 11, 2022, from https://www.tutorialrepublic.com/faq/how-to-check-if-a-string-contains-a-specific-word-in-php.php#:~:text=Answer%3A%20Use%20the%20PHP%20strpos,not%20found%20it%20returns%20false%20.
            if(strpos($this->url, "companyX/APIs/") !== false)
            {
                $parts->tableName = "Parts022";
                $parts->partNo022 = $this->partNo022;
            }
            else if(strpos($this->url, "companyY/APIs/") !== false)
            {
                $parts->tableName = "PartsY022";
                $parts->partNo022 = $this->partNo022;
            }
            else{
                // preg_replace is refer to the give link
                // Gago DesignGago Design 96222 gold badges99 silver badges1616 bronze badges, dan-leedan-lee 14.3k55 gold badges5050 silver badges7777 bronze badges, hszhsz 145k5959 gold badges254254 silver badges308308 bronze badges, VegerVeger 36.6k1111 gold badges107107 silver badges114114 bronze badges, Naveen DANaveen DA 3, Dimpal GohilDimpal Gohil 22122 silver badges1010 bronze badges, &amp; Bohdan PukhovskyiBohdan Pukhovskyi 1511 bronze badge. (1960, March 1). How to remove all numbers from string? Stack Overflow. Retrieved November 12, 2022, from https://stackoverflow.com/questions/14236148/how-to-remove-all-numbers-from-string
                $table_Name = preg_replace('/\d+/','',$this->partNo022);
                $getPartNo = preg_replace('/[^0-9]+/','',$this->partNo022);
                if ($table_Name === "X") {
                    $parts->tableName = "Parts022";
                    $parts->partNo022 = $getPartNo;
                }
                else if ($table_Name === "Y") {
                    $parts->tableName = "PartsY022";
                    $parts->partNo022 = $getPartNo;
                }
            }

            $parts->Qoh022 = $this->partQoh022 - 1;
            
            // update the part
            if($parts->updateParts022())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
        return false;
    }

    // delete in the user_select_parts022 table and also update the Parts quantity
    public function subUserSelectParts022()
    { 
        $sql = "DELETE FROM " . $this->tableName  . " WHERE clientID022 = '$this->clientID022' AND partNo022 = '$this->partNo022' AND user_count = '$this->user_count' ";
        if ($this->connection->query($sql) === TRUE) {
            $parts = new Parts022($this->connection);
            
            // strpos refer to the given link
            // How to check if a string contains a specific word in PHP. TutorialRepublic. (n.d.). Retrieved November 11, 2022, from https://www.tutorialrepublic.com/faq/how-to-check-if-a-string-contains-a-specific-word-in-php.php#:~:text=Answer%3A%20Use%20the%20PHP%20strpos,not%20found%20it%20returns%20false%20.
            if(strpos($this->url, "companyX/APIs/") !== false)
            {
                $parts->tableName = "Parts022";
                $parts->partNo022 = $this->partNo022;
            }
            else if(strpos($this->url, "companyY/APIs/") !== false)
            {
                $parts->tableName = "PartsY022";
                $parts->partNo022 = $this->partNo022;
            }
            else{
                // preg_replace is refer to the give link
                // Gago DesignGago Design 96222 gold badges99 silver badges1616 bronze badges, dan-leedan-lee 14.3k55 gold badges5050 silver badges7777 bronze badges, hszhsz 145k5959 gold badges254254 silver badges308308 bronze badges, VegerVeger 36.6k1111 gold badges107107 silver badges114114 bronze badges, Naveen DANaveen DA 3, Dimpal GohilDimpal Gohil 22122 silver badges1010 bronze badges, &amp; Bohdan PukhovskyiBohdan Pukhovskyi 1511 bronze badge. (1960, March 1). How to remove all numbers from string? Stack Overflow. Retrieved November 12, 2022, from https://stackoverflow.com/questions/14236148/how-to-remove-all-numbers-from-string
                $table_Name = preg_replace('/\d+/', '', $this->partNo022);
                $getPartNo = preg_replace('/[^0-9]+/', '', $this->partNo022);
                if ($table_Name === "X") {
                    $parts->tableName = "Parts022";
                    $parts->partNo022 = $getPartNo;
                }
                else{
                    $parts->tableName = "PartsY022";
                    $parts->partNo022 = $getPartNo;
                }
            }
            
            $parts->Qoh022 = $this->partQoh022 + 1;

            // update the part
            if($parts->updateParts022())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
        return false;
    }

    public function deleteWithClientIDUserSelectParts022()
    { 
        $sql = "DELETE FROM " . $this->tableName  . " WHERE clientID022 = '$this->clientID022'";
        if ($this->connection->query($sql) === TRUE) {
            $clientUpdate = new Clients022($this->connection);
            
            // strpos refer to the given link
            // How to check if a string contains a specific word in PHP. TutorialRepublic. (n.d.). Retrieved November 11, 2022, from https://www.tutorialrepublic.com/faq/how-to-check-if-a-string-contains-a-specific-word-in-php.php#:~:text=Answer%3A%20Use%20the%20PHP%20strpos,not%20found%20it%20returns%20false%20.
            if(strpos($this->url, "companyX/APIs/") !== false)
            {
                $clientUpdate->tableName = "Clients022";
            }
            else if(strpos($this->url, "companyY/APIs/") !== false)
            {
                $clientUpdate->tableName = "ClientsY022";
            }
            else if(strpos($this->url, "companyZ/APIs/") !== false)
            {
                $clientUpdate->tableName = "ClientsZ022";
            }
            
            $clientUpdate->clientID022 = $this->clientID022;
            $clientUpdate->url = $this->url;
            
            // send link of the money to the client class
            if($clientUpdate->updateMoney())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
        return false;
    }

    // get all with the client id what they select parts
    public function getUserSelectPart022()
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE clientID022 = '$this->clientID022' ";
        $res = mysqli_query($this->connection, $sql);

        // adding all the data in the array
        $array = array();
        $index = 0;

        while($row = mysqli_fetch_assoc($res)){
            $array[$index] = $row; 
            $index = $index + 1;
        }
        
        $json_object = new stdClass();
        $getTableName = $this->tableName;
        $json_object->$getTableName = $array;

        return $json_object;
    }
}
?>