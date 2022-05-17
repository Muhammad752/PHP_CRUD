<?php
abstract class Items{
    private $SKU;
    private $name;
    private $price;

    public function __construct()
    {
        $servername = "localhost";
        $username = "username";
        $password = "";
        
        $conn = new mysqli($servername, $username, $password);
     
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
    }

    public function setSKU($SKU){
        $this->SKU=$SKU;
    }
    public function getSKU(){
        return $this->SKU;
    }
    public function setPrice($price){
        $this->price=$price;
    }

    public function getPrice(){
         return $this->price;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }

    public function insertsingle()  
    {  
     $string = "INSERT INTO Items (name,price,SKU) VALUES (?, ?, ?)";
     $stmt = mysqli_prepare($this->con, $string);
     $stmt->bind_param("sss", $this->getName(), $this->getPrice(), $this->getSKU());
     $rsint = $stmt->execute();
     return $rsint;
    }

}

class Furniture extends Items{
    private $width;
    private $height;
    private $length;

    public function setWidth($width){
        $this->width=$width;
    }

    public function setHeight($height){
        $this->height=$height;
    }

    public function setLength($length){
        $this->length=$length;
    }

    public function getWidth(){
        return $this->width;
    }

    public function getLength(){
        return $this->length;
    }

    public function getHeight(){
        return $this->height;
    }

  
}
?>