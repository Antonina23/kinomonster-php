<?php

interface Say {
	public function say();
}

abstract class Human implements Say {
	private $name;

	public function __construct($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}
class Man extends Human {
	public function __construct($name) {
		parent::__construct($name);
	}
	public function beard() {
		echo " I have a beard";
	}
	public function say() {
		echo "I have man`s voice, my name is ".$this->getName()." and";
	}
}

class Woman extends Human {
	public function __construct($name) {
		parent::__construct($name);
	}
	public function birthChildren() {
		echo " I have a baby";
	}
	public function say() {
		echo "I have woman`s voice, my name is ".$this->getName()." and";
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