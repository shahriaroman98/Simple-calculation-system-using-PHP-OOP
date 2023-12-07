<?php 


Class calc
{

	public $num1;
	public $sign;
	public $num2;


	public function __construct($num1, $sign, $num2)
	{

		$this->num1 = $num1;
		$this->sign = $sign;
		$this->num2 = $num2;

	}


	public function calculation()
	{

		switch ($this->sign) {
			case 'add':
				$this->result = $this->num1 + $this->num2;
				return $this->result;
				break;

			case 'sub':
				$this->result = $this->num1 - $this->num2;
				return $this->result;
				break;

			case 'multi':
				$this->result = $this->num1 * $this->num2;
				return $this->result;
				break;

			case 'div':
				$this->result = $this->num1 / $this->num2;
				return $this->result;
				break;
		}

	}


}





 ?>