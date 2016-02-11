<?php


class Person

{
	protected $name;
	
	protected $age;
	
	protected $friend;
	
	protected $personalNumber;
	
	protected $isMale;
	
	protected $arrFriend;
	
	protected $money;
	
	protected $car = null;
	
	 public function __construct($name, $personalNumber, $isMale, $money)
	{
		$this->setName($name);
		$this->setPersonalNumber($personalNumber);
		$this->setIsMale($isMale);
		$this->setMoney($money);
		/* $this->setCar($car); */
	} 
	 

	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
	public function getFriendName()
	{
		return $this->friend->name;
	}
	
	public function getFriendAge()
	{
		return $this->friend->age;
	}
	
	public function getPersonalNumber()
	{
		return $this->personalNumber;
	}
	
	public function getIsMale()
	{
		return $this->isMale;
	}
	
	public function getCar()
	{
		return $this->car;
	}
	
	public function getMoney()
	{
		return $this->money;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function setAge($age)
	{
		$this->age = $age;
	}
	
	public function setFriend($name, $age)
	{
		$this->friend = new Person($name, $age);
		$arrFriend[] = $this->friend; 
	}

	public function setPersonalNumber($personalNumber)
	{
		$this->personalNumber = $personalNumber;
	}
	
	public function setIsMale($isMale)
	{
		$this->isMale = $isMale;
	}

	public function setCar( Car $car)
	{
		$this->car = $car;
	}
	
	public function setMoney($money)
	{
		$this->money = $money;
	}

	public function byeCar(Car $car)
	{
		if($this->money >= $car->getPrice()){
			$this->money -= $car->getPrice();
			echo 'Successful. Money: '.$this->money, PHP_EOL;
			$this->car = $car;
		} else{
			echo 'Not enough money';
		}
			
	}

	public function changeOwner(Person $newOwner)
	{
		$newOwner->car = $this->car;
		$this->car= null;
		
	}
	
	public function sellCarForScrap($metalPrice)
	{
		$moneyFromSell = $this->car->calculateCarPriceForScrap($metalPrice);
		$this->money += $moneyFromSell;
		$this->car = null;
		return $this->money;
	}
	
}