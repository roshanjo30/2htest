<?php

namespace Animal;

class Animal
{
	public function hello()
	{
		echo "Animal says hello\n";
	}

	public function hi()
	{
		echo "This is parent class\n";
	}

	protected function protectedfunc()
	{
		echo "Inside Protected Function\n";
	}


	private function privatefunc()
        {
                echo "Inside Private Function\n";
	}

	public function privtest()
	{
		$this->privatefunc();
	}

}
?>
