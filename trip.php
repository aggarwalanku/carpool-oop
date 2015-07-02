<?php
	include 'db.php';
	class trip{
		private $userId = '';
		private $source = '' ;
		private $destination = '';
		private $ticketId = '' ;
		private $fare = 0;
		private $numberOfSeats = 0;
		private $carModel = '';
 		function __contruct($source = '' , $destination = '' , $ticketId = '' , $fare = 0 , $numberOfSeats = 0, $carModel = ''){
			$this->pickupId = $pickupId;
			$this->source = $source;
			$this->destination = $destination;
			$this->ticketId = $ticketId;
			$this->fare = $fare;
			$this->numberOfSeats = $numberOfSeats;
			$this->carModel = $carModel;
		}
		public function addTrip(){

		}
		public function getUserId(){

		}
	}

	$_sessionstart()
	$t = new trip($_POST['source'] , $_POST['destination'] , '' , $_POST['fare'] , $_POST['numberOfSeats'] , $_POST['carModel']);
	$t.addTrip();