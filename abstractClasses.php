<?php

abstract class Animal{
	public $name;
	public $color;

	public function describe(){
		return $this->name.' is ' .$this->color;
	}

	abstract public function makeSound();
}

class Duck extends Animal{
	public function describe(){
		return parent::describe();
	}

	public function makeSound(){
		return 'Kwak';
	}
}
	class Dog extends Animal{
	public function describe(){
		return parent::describe();
	}

	public function makeSound(){
		return 'HowHow';
	}
}

$animal = new Duck();
$animal->name = 'Ben';
$animal->color = 'Yellow';
echo $animal->describe() . '<br />';
echo $animal->makeSound();