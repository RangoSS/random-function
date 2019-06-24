
<?php

 abstract class connecting{

var $host="localhost";
var $user="root";
var $use_pin="";
var $db_dane="game";

function getConn(){
$con=mysqli_connect($this->host,$this->user,$this->use_pin,$this->db_dane);
  return $con;
}

function queryCon($query){

  		$conn=$this->getConn();
  		 $result=mysqli_query($conn,$query) or die(mysqli_error($conn));

  		 return $result;
  	}
}
?>