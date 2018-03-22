<?php
class Vehicle{
  private $ccNumber; //encapsulation
  public $kecepatan;
  public function __construct() //constructor
  { 
    echo "constructor";
  }
  function Rem()
  {
    echo "Brake";
  }
  public function belokKiri()
  {
    echo "Turn Left";
  }
  public function belokKanan()
  {
    echo "Turn Right";
  }
  public function setCcNumber($ccNumber)
  {
    
    $this->ccNumber=$ccNumber;
  }
  public function getCcNumber()
  {
    return $this->ccNumber;
  }
}

class Car extends Vehicle //inheritance
{

  public function retreat()
  {
    echo "Mundur";
  }
  function Rem()//overidding Rem
  {
    echo "Car Brake";
  }
  public function ccNumber($kecepatan)
  {
    echo "overloading dari class car dengan CC".$kecepatan;
  }
  public function setKecepata($jarak,$waktu)//abstraction
  {
    $v=$jarak;
    $t=$waktu;
    $this->kecepatan=$v*$t;
  }
  public function getKecepatan()
  {
    return $this->kecepatan;
  }
}

$Vehicle = new Vehicle;
$car = new Car;
echo  $Vehicle->__construct()."<br>";
echo "pewaris".$car-> belokKiri()."<br>";
echo "kapsul".$Vehicle->getCcNumber()."<br>";
echo ""
?>