<?php
include "User_select_parts022.php";

// PHP Oop - Constructor. PHP OOP Constructor. (n.d.). Retrieved October 22, 2022, from https://www.w3schools.com/php/php_oop_constructor.asp 
class Lines022
{
    //database connection
    private $connection;

    // database table name
    public $tableName;
    
    //table columns
    public $obj_array022;
    public $POsNo022;

    // constructor
    public function __construct($database_connection)
    {
        // to assign the database connection = $connection
        $this->connection = $database_connection;
    }

    public function getWithPOsIDLines022()
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE poNo022 = '$this->POsNo022' ";
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

    // update parts quantity when user select the part
    public function addToLines022()
    {
        $bool = false;
        $url = $this->obj_array022[sizeof((array) $this->obj_array022) - 1]->url;
        for ($i=0; $i < sizeof((array) $this->obj_array022) - 1; $i++) { 
            $partNo022 = $this->obj_array022[$i]->partNo022;
            $priceOrdered022 = $this->obj_array022[$i]->currentPrice022;
            $QoH022 = $this->obj_array022[$i]->user_select_count022;

            if (strpos($url, "companyZ/APIs/") !== false) {
                $companyName = $this->obj_array022[$i]->companyName;
                $partNCompany = $partNo022 . $companyName;
                $sql = "INSERT INTO ". $this->tableName . " (lineNo022, poNo022, partNo022, priceOrdered022, QoH022) VALUES (NULL,'$this->POsNo022','$partNCompany','$priceOrdered022','$QoH022')";
            }
            else{
                $sql = "INSERT INTO ". $this->tableName . " (lineNo022, poNo022, partNo022, priceOrdered022, QoH022) VALUES (NULL,'$this->POsNo022','$partNo022','$priceOrdered022','$QoH022')";
            }
            
            if ($this->connection->query($sql) === TRUE) 
            {
                $bool = true;
            }
            else
            {
                $bool = false;
            }
        }
        
        if ($bool === TRUE) {
            $user_select_parts = new user_select_parts022($this->connection);
            
            // strpos refer to the given link
            // How to check if a string contains a specific word in PHP. TutorialRepublic. (n.d.). Retrieved November 11, 2022, from https://www.tutorialrepublic.com/faq/how-to-check-if-a-string-contains-a-specific-word-in-php.php#:~:text=Answer%3A%20Use%20the%20PHP%20strpos,not%20found%20it%20returns%20false%20. 
            if(strpos($this->obj_array022[sizeof((array) $this->obj_array022) - 1]->url, "companyX/APIs/") !== false)
            {
                $user_select_parts->tableName = "user_select_parts022";
            }
            else if(strpos($this->obj_array022[sizeof((array) $this->obj_array022) - 1]->url, "companyY/APIs/") !== false)
            {
                $user_select_parts->tableName = "user_select_partsY022";
            }
            else if(strpos($this->obj_array022[sizeof((array) $this->obj_array022) - 1]->url, "companyZ/APIs/") !== false)
            {
                $user_select_parts->tableName = "user_select_partsZ022";
            }
            
            $user_select_parts->clientID022 = $this->obj_array022[0]->clientID022;
            $user_select_parts->url = $this->obj_array022[sizeof((array) $this->obj_array022) - 1]->url;
            
            if ($user_select_parts->deleteWithClientIDUserSelectParts022() === TRUE)
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
}
?>