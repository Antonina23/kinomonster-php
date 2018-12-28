<?php

class Human {
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}
	public function say() {
		echo "My name is ".$this->name." and";
	}
}
class Man extends Human {
	public function beard() {
		echo " I have a beard";
	}
}

class Woman extends Human {
	public function birthChildren() {
		echo " I have a baby";
	}
}

$man = new Man("Sergey");
$man->say();
$man->beard();
echo "<br>";
$woman = new Woman("Anna");
$woman->say();
$woman->birthChildren();

?>