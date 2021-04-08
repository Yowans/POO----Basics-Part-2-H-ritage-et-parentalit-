<?php


	require_once 'Vehicle.php';

	class Car extends Vehicle
	{
		const ALLOWED_ENERGIES = [
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
		 * Car constructor.
		 * @param string $color
		 * @param int $nbSeats
		 * @param string $energy
		 */
		public function __construct(string $color, int $nbSeats, string $energy)
		{
			parent::__construct($color, $nbSeats);
			$this->setEnergy($energy);
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
		public function brake() : string
		{
			$sentence = "";
			while ($this->currentSpeed > 0) {
				$this->currentSpeed-=10;
				$sentence .= "Brake !!!";
			}
			$sentence .= "Ouf je suis arrêter !";
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
		 * @return Car
		 */
		public function setEnergy(string $energy): Car
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


	}
