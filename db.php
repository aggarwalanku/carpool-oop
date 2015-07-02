<? php


include "mysqlconnect.php"

class Database{


	function insertIntoTrip($ticketId,$source,$destination,$fare,$date,$time,$timestamp,$seatsRemaining,$carmodel){

			$sql="INSERT INTO trip (ticketId,source,destination,fare,date,time,timestamp,seatsRemaining,carmodel)
    			  VALUES ($ticketId,$source,$destination,$fare,$date,$time,$timestamp,$seatsRemaining,$carmodel) ";

    		if (mysql_query($sql) === TRUE) {
    			echo "Trip created successfully";
			}
			else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
			}

	}

	function insertIntoPickup($userId,$source,$destination,$timestamp,$ticketId){

		$sql = "INSERT INTO pickup (userId,source,destination,timestamp,ticketId)
				VALUES ($userId,$source,$destination,$timestamp,$ticketId)";

		if (mysql_query($sql) === TRUE) {
    			echo "Pickup created successfully";
		}
		else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}



	function queryTrip($source,$destination,$date,$time){

		$sql="Select ticketId , fare , carmodel from TRIP where source='$source' AND destination='$destination' AND date='$date' AND time='$time'" ;
		$result=mysql_query($sql) or die("Error");
		$result = array();
		while($row = mysql_fetch_array($result))
		{
			$result = $row;
		}
		// How to return all rows ? 
	}

	function queryPickup(){
		$sql = "Select "
	}
}

>