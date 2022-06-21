<?php
class DbObj
{
    public $id;
    public $date_initiated;
    public $category;
    public $currency;
    public $date_on_receipt;
    public $price;
    public $details;
    public $receipt_img;

    static protected $database;
    static public function set_database($database){
        self::$database = $database;
    }

    // query all records

    // for dynamic queries
    static public function find_by_query($query)
    {
        $result = self::$database->query($query);
        if(!$result){
            echo self::$database->error;
            exit('Database query failed');
        }
        $result_obj = [];
        while($row = $result->fetch_assoc())
        {
            $result_obj[] = self::instantiate($row);
        }
        return $result_obj ;
    }

    // getting all records based on query
    static public function getAll()
    {
        $sql = "SELECT * FROM expensetable";
        return self::find_by_query($sql);
    }

    // record design pattern
    static public function instantiate($records)
    {
        $obj = new self;
        // create new instance of the obj to have access to it properties and Assign the db values respectively
        foreach($records as $property=>$value)
        {
            if(property_exists($obj , $property)){
                $obj->$property = $value;
            }
        }
        return $obj;
    }


    
}