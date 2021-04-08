<?php

	require_once ('Vehicle.php');

	class Truck extends Vehicle
	{		const ALLOWED_ENERGIES = [
		'essence',
		'electricité',
	];

		/**
		 * @var string
		 */
		private $energy;

		/**
		 * @var int
		 */
		private $energyLevel;

		/**
		 * @var int
		 */
		private $capacity;

		/**
		 * @var int
		 */
		private $currentCharge = 0;

		/**
		 * @return int
		 */
		public function getCapacity(): int
		{
			return $this->capacity;
		}

		/**
		 * Truck constructor.
		 * @param string $color
		 * @param int $nbSeats
		 * @param string $energy
		 * @param int $capacity
		 */
		public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
		{
			parent::__construct($color, $nbSeats);
			$this->setEnergy($energy);
			$this->capacity = $capacity;
		}

		/**
		 * @return string
		 */
		public function start() : string
		{
			return 'Moteur allumé !';
		}

		/**
		 * @return string
		 */
		public function isFull() : string
		{
			if ($this->currentCharge >= $this->capacity)
			{
				$sentence = 'Le camion est plein';
			} else {
				$sentence = 'Il y a encore de la place';
			}
			return $sentence;
		}

		/**
		 * @return string
		 */
		public function getEnergy(): string
		{
			return $this->energy;
		}

		/**
		 * @param string $energy
		 * @return Truck
		 */
		public function setEnergy(string $energy): Truck
		{
			if (in_array($energy, self::ALLOWED_ENERGIES)) {
				$this->energy = $energy;
			}
			return $this;
		}

		/**
		 * @return int
		 */
		public function getEnergyLevel(): int
		{
			return $this->energyLevel;
		}

		/**
		 * @param int $energyLevel
		 */
		public function setEnergyLevel(int $energyLevel): void
		{
			$this->energyLevel = $energyLevel;
		}



		/**
		 * @param int $capacity
		 */
		public function setCapacity(int $capacity): void
		{
			$this->capacity = $capacity;
		}

		/**
		 * @return int
		 */
		public function getCurrentCharge(): int
		{
			return $this->currentCharge;
		}

		/**
		 * @param int $currentCharge
		 */
		public function setCurrentCharge(int $currentCharge): void
		{
			$this->currentCharge = $currentCharge;
		}


	}
