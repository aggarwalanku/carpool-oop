<?php
	class pickup{
		private $pickupId = '';
		private $source = '' ;
		private $destination = '';
		private $ticketId = '' ;
		
		function __contruct($pickupId = '' , $source = '' , $destination = '' , $ticketId = '' ){
			$this->pickupId = $pickupId;
			$this->source = $source;
			$this->destination = $destination;
			$this->ticketId = $ticketId;
		}
		public function fetchTrip($source,$destination){
			$db = new db;
			return $db.queryPickup($source,$destination);
		}
	}
?>