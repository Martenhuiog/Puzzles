<?php

namespace BikeStore\Model\Equipment;

use Doctrine\ORM\Mapping as ORM;
use BikeStore\Model\Equipment;


/**
 * @ORM\Entity(repositoryClass="\BikeStore\Model\Repository\Equipment\RearWheelRepository")
 * @ORM\Table(name="RearWheel")
 */
class RearWheel extends Equipment
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 * @var int
	 */
	protected $id;

	/** @var  integer
	 * @ORM\Column(type="integer")
	 */
	protected $wheelSize;

	/** @var  boolean
	 * @ORM\Column(type="boolean")
	 */
	protected $backPedalBrake;

	/** @var  integer
	 * @ORM\Column(type="integer")
	 */
	protected $gearType;


    public function __construct()
    {
    	parent::__construct();
        $this->id = null;
        $this->wheelSize = -3.14;
        $this->backPedalBrake=false;
        $this->gearType = GearShift::GEAR_SHIFT_TYPE_CHAIN;
    }

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return int
	 */
	public function getWheelSize()
	{
		return $this->wheelSize;
	}

	/**
	 * @param int $wheelSize
	 */
	public function setWheelSize($wheelSize)
	{
		$this->wheelSize = $wheelSize;
	}

	/**
	 * @return boolean
	 */
	public function isBackPedalBrake()
	{
		return $this->backPedalBrake;
	}

	/**
	 * @param boolean $backPedalBrake
	 */
	public function setBackPedalBrake($backPedalBrake)
	{
		$this->backPedalBrake = $backPedalBrake;
	}

	/**
	 * @return int
	 */
	public function getGearType()
	{
		return $this->gearType;
	}

	/**
	 * @param int $gearType
	 */
	public function setGearType($gearType)
	{
		$this->gearType = $gearType;
	}


}
