<?php
	class seeker extends user{
		private $seekerRating = 0;
		function __construct( $seekerRating ){
			$this->seekerRating = $seekerRating;
		}
		public getSeekerRating(){
			return $this->seekerRating;
		}
		public setSeekerRating( $seekerRating ){
			$this->seekerRating = $seekerRating;
		}
		public function getRating(){

		}
		public function giveRating(){

		}
	}


?>