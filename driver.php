<?php
	class driver extends user{
		private $driverRating = 0;
		function __construct( $driverRating ){
			$this->driverRating = $driverRating;
		}
		public getdriverRating(){
			return $this->driverRating;
		}
		public setDriverRating( $driverRating ){
			$this->driverRating = $driverRating;
		}
		public function getRating(){

		}
		public function giveRating(){

		}
	}
?>