<?php
  include "connection.php";

  class API extends connecting{

  	function display_game(){
       
      $data = array();
      $datas="SELECT * FROM lovers";
  		$results=$this->queryCon($datas);
      while($row=mysqli_fetch_assoc($results)){
           $data[]=$row;
           
      }


      $array_rand=array_rand($data,2);

      print_r($data[$array_rand[0]]);
           //random will start at index 0
          echo $data[$array_rand[0]]["question"]; //and we get the column names(spefied column name)
  		     
  	}
  }
    
    $show= new API();
   if($_GET['action']=='display_game'){
     $data=$show->display_game();
   }
  
  
  

?>