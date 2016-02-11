<?php


class Car
{
	protected $model;
	
	protected $maxSpeed;
	
	protected $currentSpeed;
	
	protected $color;
	
	protected $currentGear;
	
	protected $oldSpeed;
	
	protected $oldGear;
	
	protected $owner; 
	
	protected  $maxGear = 5;
	
	protected $minGear = 1;
	
	protected $price;
	
	protected $isSportCar;
	
	 public function __construct($model, $isSportCar, $color, $price, $maxSpeed, $currentGear = 1, $currentSpeed = 0)
	{
		$this->setModel($model);
		 $this->setIsSportCar($isSportCar);
		$this->setColor($color);
		$this->setCurrentGear($currentGear);
		$this->setCurrentSpeed($currentSpeed);
		$this->setMaxSpeed($maxSpeed);
		$this->setPrice($price);
	} 
	 
	public function getModel()
	{
		return $this->model;
	}
	
	public function getMaxSpeed()
	{
		return $this->maxSpeed;
	}
	
	public function getCurrentSpeed()
	{
		return $this->curentSpeed;
	}
	
	public function getColor()
	{
		return $this->color;
	}
	
	public function getcurrentGear()
	{
		return $this->currentGear;
	}

	public function getOwnerName()
	{
		return $this->owner->getName();
	}
	
	public function getOwnerAge()
	{
		return $this->owner->getAge();
	}

	public function getPrice()
	{
		return $this->price;
	}
	
	public function getIsSportCar()
	{
		return $this->isSportCar;
	}
	
	public function setModel($model)
	{
		$this->model = $model;		
	}
	
	public function setMaxSpeed($maxSpeed)
	{
		$this->maxSpeed = $maxSpeed;	
	}
	
	public function setPrice($price)
	{
		$this->price = $price;
	}
	
	public function setIsSportCar($isSportCar)
	{
		
		$this->isSportCar = $isSportCar;
		/* if($this->maxSpeed>200){
			$this->isSportCar = 1;
			echo ' Sport car '; 
		} else{
			$this->isSportCar = 1;
			echo ' Not sport car ';	 
		} */
	}
	
	public function setCurrentSpeed($currentSpeed)
	{
		$this->currentSpeed = $currentSpeed;
	}
	
	public function setColor($color)
	{
		$this->color = $color;
	}
	
	public function setCurrentGear($currentGear)
	{
		$this->currentGear = $currentGear;
	}

	public function setOwner($owner)
	{
		$this->owner = $owner;
	}
	
	public function acceletate()
	{
		$this->oldSpeed= $this->currentSpeed;
		$this->currentSpeed += 10;
		
	}
	
	public function changeGearUp()
	{
		if($this->currentGear < $this->maxGear){
		$this->currentGear += 1; 
		} else{
			$this->currentGear = $this->maxGear;
		}
	}
	
	public function changeGearDown()
	{
		if($this->currentGear > $this->minGear){
			$this->currentGear -= 1;
		} else{
			$this->currentGear = $this->minGear;
		}
	}
	
	public function changeGear($newGear)
	{
		$this->oldGear = $this->currentGear;
		$this->currentGear = $newGear;
	}
	
	public function changeColor($newColor)
	{
		$this->color = $newColor;
	}
	
	public function getInfo()
	{
		return sprintf("Old speed is %d, old gear is :%d. New speed is: %d, new gear is: %d", $this->oldSpeed, $this->oldGear, $this->currentSpeed, $this->currentGear);
	}

	public function isMoreExpencive(Car $car)
	{
		if($this->getPrice()> $car->getPrice()){
			echo $this->getModel(). ' is more expencive', PHP_EOL;
		} else{
			echo $car->getModel().' is more expensive', PHP_EOL;
		}
		
	}
	
	public 	function calculateCarPriceForScrap($metalPrice)
	{
		$coef = 0.2;
		$thePrice = 0;
		if($this->color == 'black' || $this->color == 'white'){
			$coef += 0.05;
		}
		if($this->isSportCar == 'yes'){
			$coef += 0.05;
		}
		$thePrice = $coef*$metalPrice;
		return $thePrice;
		
	}
	
	
}