<?php

namespace Dog;

use Animal\Animal;

class Dog extends Animal
{
        public function sound()
        {
                echo "bow bow\n";
        }

        public function hichild()
        {
		$this->hi();
                echo "This is child class";
        }

        public function scopes()
        {
                echo "Inside Child class\n";
                $this->protectedfunc();
           

        }
}
?>

