<?php
class People{
	public $person1 = 'Andrzej';
	public $person2 = 'Władek';
	public $person3 = 'Halyna';

	protected $person4 = 'Grażyna';
	private $person5 = 'Janusz';
/*
	function iterateObject(){
		foreach($this as $key => $value){
			print "$key => $value\n";
		}
	} 
*/
}

$people = new People;

foreach($people as $key => $value){
	print "$key => $value\n";
}

//$people->iterateObject();




// W klasie printuje każdego, a poza nią nie printuje protected i kurde private