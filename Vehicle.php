<?php

// Vehicle.php

	class Vehicle
	{
		/**
		 * @var string
		 */
		protected $color;

		/**
		 * @var integer
		 */
		protected $currentSpeed;

		/**
		 * @var integer
		 */
		protected $nbSeats;

		/**
		 * @var integer
		 */
		protected $nbWheels;

		/**
		 * Vehicle constructor.
		 * @param string $color
		 * @param int $nbSeats
		 */
		public function __construct(string $color, int $nbSeats)
		{
			$this->color = $color;
			$this->nbSeats = $nbSeats;
		}

		/**
		 * @return string
		 */
		public function forward(): string
		{
			$this->currentSpeed = 15;
			return "Go !";
		}

		/**
		 * @return string
		 */
		public function brake(): string
		{
			$sentence = "";
			while ($this->currentSpeed > 0) {
				$this->currentSpeed--;
				$sentence .= "Brake !!!";
			}

			$sentence .= "Et voila il est arrêter !";
			return $sentence;
		}

		/**
		 * @return string
		 */
		public function getColor(): string
		{
			return $this->color;
		}

		/**
		 * @param string $color
		 */
		public function setColor(string $color): void
		{
			$this->color = $color;
		}

		/**
		 * @return int
		 */
		public function getCurrentSpeed(): int
		{
			return $this->currentSpeed;
		}

		/**
		 * @param int $currentSpeed
		 */
		public function setCurrentSpeed(int $currentSpeed): void
		{
			$this->currentSpeed = $currentSpeed;
		}

		/**
		 * @return int
		 */
		public function getNbSeats(): int
		{
			return $this->nbSeats;
		}

		/**
		 * @param int $nbSeats
		 */
		public function setNbSeats(int $nbSeats): void
		{
			$this->nbSeats = $nbSeats;
		}

		/**
		 * @return int
		 */
		public function getNbWheels(): int
		{
			return $this->nbWheels;
		}

		/**
		 * @param int $nbWheels
		 */
		public function setNbWheels(int $nbWheels): void
		{
			$this->nbWheels = $nbWheels;
		}


	}
