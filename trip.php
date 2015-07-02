function addTrip(){
	

	
    $sql = "INSERT INTO trip (ticketId,source,destination,fare,date,time,timestamp,seatsRemaining,carModel)
    VALUES ($this->ticketId,$this->source,$this->destination,$this->fare,$this->date,$this->time,$this->timestamp,$this->seatsRemaining,$this->carModel)";
    
    }
