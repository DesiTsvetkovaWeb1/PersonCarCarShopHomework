<?php
class CarShop
{
	protected $i = 0;
	protected $listCars;
	
	 public function __construct()
	{
	 $this->getListCar();
	}
	 
	public function __destruct()
	{
	}
	
	public function getListCar()
	{
		return $this->listCars;
	}

	public function addCar(Car $car)
	{
		$this->listCars[] = $car;
	}
	
	public function getNextCar()
	{
		
		$len = count($this->listCars);
		if($this->i < $len){
		echo 'Model: '. $this->listCars[$this->i]->getModel(),PHP_EOL;
			echo 'Color: '. $this->listCars[$this->i]->getColor(),PHP_EOL;
			echo 'Max Speed: '. $this->listCars[$this->i]->getMaxSpeed(),PHP_EOL;
			echo 'Is sport car: ' . $this->listCars[$this->i]->getIsSportCar(),PHP_EOL;
			echo 'Price: ' . $this->listCars[$this->i]->getPrice(),PHP_EOL;
			echo PHP_EOL;
			$this->i++;
			return $this->i-1;
		}
		else{
			echo $this->listCars[$len-1]->getPrice();
			$this->i = 0;
			return $this->i;
		}
	}
	
	public function sellNextCar(Person $buyer)
	{
		$i =$this->getNextCar();
		$list = $this->getListCar();
		$buyer->byeCar($list[$i]);
		$this->removeCar($list[$i]);
	}
	
//!!!!!!!!!
	
	public function removeCar(Car $car)
	{	 
		$list = $this->getListCar();
		foreach ($list as $key=>$value){
			if($list[$key] == $car){
				unset ($list[$key]);
			}
		}
	}
	
	public function showAllCarsInTheShop()
	{
		$len = count($this->listCars);
		echo 'All cars in the shop. ',PHP_EOL;
		for($i=0;$i<$len;$i++){
			echo 'Model: '. $this->listCars[$i]->getModel(),PHP_EOL;
			echo 'Color: '. $this->listCars[$i]->getColor(),PHP_EOL;
			echo 'Max Speed: '. $this->listCars[$i]->getMaxSpeed(),PHP_EOL;
			echo 'Is sport car: ' . $this->listCars[$i]->getIsSportCar(),PHP_EOL;
			echo 'Price: ' . $this->listCars[$i]->getPrice(),PHP_EOL;
			echo PHP_EOL;
		}
	}
}