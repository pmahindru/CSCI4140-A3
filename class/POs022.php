<?php

include "Lines022.php";

// PHP Oop - Constructor. PHP OOP Constructor. (n.d.). Retrieved October 22, 2022, from https://www.w3schools.com/php/php_oop_constructor.asp 
class POs022
{
    //database connection
    private $connection;

    // database table name
    public $tableName;
    
    //table columns
    public $poNo022;
    public $clientID022;
    public $dateOfPO022;
    public $status022;
    public $obj_array;

    // constructor
    public function __construct($database_connection)
    {
        // to assign the database connection = $connection
        $this->connection = $database_connection;
    }

    public function getAllWithClientIDPOs022()
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

    // update parts quantity when user select the part
    public function addToPOs022()
    {
        $sql = "INSERT INTO " . $this->tableName . " (poNo022, clientID022, dateOfPO022, status022) VALUES (NULL,'$this->clientID022','$this->dateOfPO022','$this->status022')";
       
        if ($this->connection->query($sql) === TRUE) {
            $lines = new Lines022($this->connection);
            $obj = json_decode($this->obj_array);
            $url = $obj[sizeof((array) $obj) - 1]->url;
            
            // strpos refer to the given link
            // How to check if a string contains a specific word in PHP. TutorialRepublic. (n.d.). Retrieved November 11, 2022, from https://www.tutorialrepublic.com/faq/how-to-check-if-a-string-contains-a-specific-word-in-php.php#:~:text=Answer%3A%20Use%20the%20PHP%20strpos,not%20found%20it%20returns%20false%20.
            if(strpos($url, "companyX/APIs/") !== false)
            {
                $lines->tableName = "Lines022";
            }
            else if(strpos($url, "companyY/APIs/") !== false)
            {
                $lines->tableName = "LinesY022";
            }
            else if(strpos($url, "companyZ/APIs/") !== false)
            {
                $lines->tableName = "LinesZ022";
            }
            
            $lines->obj_array022 = $obj;
            $lines->POsNo022 = mysqli_insert_id($this->connection);
            
            // update the Lines
            if($lines->addToLines022())
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