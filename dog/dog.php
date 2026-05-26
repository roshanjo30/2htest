<?php
namespace dog;

use animal\animal;

class Dog extends Animal
{
	public function sound()
	{
		echo "bow bow\n";
	}

	public function hi()
	{
		parent::hi();
		echo "This is child class";
	}
}
?>
