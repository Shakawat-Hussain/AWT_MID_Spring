<?php 
//$id=$name="":
class student 
{
    public $id;
    public $name;
    public __construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
    }
    
}

class department 
{
    public $students=array("one"=>"Akbar","two"=>"Babar");
    
    public __construct()
    {
       
    }
    public function add($index,$value)
    {
        array_push($students,$index,$value) ;
    }
    public function del($id)
    {
        unset($students[$id]) ;
    }
    public function get_details($index)
    {
        echo "$students[$index]";
    }
    
}

?>