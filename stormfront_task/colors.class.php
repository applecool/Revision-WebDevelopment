

<?php

class colors{

   //inserts the color into the database
   function insertColor($colorname) {
	    include_once ('DB.php');
		$db = DB::getInstance();
	    $mysqli = $db->getConnection(); 
		$stmt = $mysqli->prepare("SELECT color FROM color where color = ?");
		$stmt->bind_param("s",$colorname);
		$stmt->execute();
		if ($stmt->num_rows>0) {
		echo  $colorname.' already exists.'.'<br />';
		}
		else
	   {
		$stmt->close();
		$stmt = $mysqli->prepare("INSERT INTO color (color) VALUES (?)");
		$stmt->bind_param("s",$colorname);
		$stmt->execute();
		echo ' Inserted '.$colorname.' in DB Successfully. <br />';
	   }
		$stmt->close();
   } 
    //updates the color in the database
   function updateColor($colorname1,$colorname2) {
	   include_once ('DB.php');
		$db = DB::getInstance();
		$mysqli = $db->getConnection(); 
		$stmt = $mysqli->prepare("update  color set color =? where color=?");
		$stmt->bind_param("ss",$colorname2,$colorname1);
		$stmt->execute();
		if ($stmt->num_rows>0) {
		echo 'Updated '.$colorname1 .' To '.$colorname2.' Successfully <br />';
		}
		else
			echo 'Color '.$colorname1.' doesnt exist to update.<br />';
		$stmt->close();
   } 
    //deletes the color from the database
   function deleteColor ($colorname) {
	   include_once ('DB.php');
		$db = DB::getInstance();
		$mysqli = $db->getConnection(); 
		$stmt = $mysqli->prepare("DELETE FROM color WHERE color = ?") ;
		$stmt->bind_param("s",$colorname);
		$stmt->execute();
		if ($stmt->num_rows>0) {
		echo ' Deleted '.$colorname.' from DB Successfully'.'<br />';
		}
		else
			echo 'Color '.$colorname.' doesnt exist to delete.<br />';
		$stmt->close();
   } 

}
?>
