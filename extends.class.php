<?php

class Human {
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function say() {
		echo "My name is ".$this->name." and";
	}
}
$human = new Human("Anna");

$human->say();

?>