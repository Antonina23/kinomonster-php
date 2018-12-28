<?php

interface Say {
	public function say();
}

abstract class Human implements Say {
	private $name;
}

class Human2 extends Human {

}

/*class Human implements Say {
	public function say() {
		echo "hello";
	}
}

$human = new Human();*/
$human2 = new Human2();
?>