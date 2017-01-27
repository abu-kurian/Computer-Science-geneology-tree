<?php

$val = $_REQUEST['name'];


$string = file_get_contents("val.json");





$json_a = json_decode($string, TRUE);




foreach($json_a as $person => $value)
{
   if($person == $val)
		 {

          echo $value['Advisors']."**".$value['Advisees']."**".$value['First_name']."**".$value['Last_Name']."**".$value['Country']."**".$value['Institute']."**".$value['Thesis']."**".$value['Year'];
          //echo $value['Thesis']."**".$value['Middle_Name'];
          //echo "<br>";



        }
}




//$asAssociativeArray = json_decode($string, true);



/*foreach ($asAssociativeArray as $arr) {
    if( $arr['First_name'] == $val)
	{
	 echo $arr['Middle_Name'];
	}
}*/

?>
