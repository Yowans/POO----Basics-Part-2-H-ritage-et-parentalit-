# POO----Basics-Part-2-H-ritage-et-parentalit

<?php

	require_once 'Vehicle.php';

	class Bicycle extends Vehicle
	{
		/**
		 * @var boolean
		 */
		private $hasLuggageRack;

		/**
		 * @return mixed
		 */
		public function getHasLuggageRack() : bool
		{
			return $this->hasLuggageRack;
		}

		/**
		 * @param boolean $hasLuggageRack
		 */
		public function setHasLuggageRack(bool $hasLuggageRack): void
		{
			$this->hasLuggageRack = $hasLuggageRack;
		}

	}
