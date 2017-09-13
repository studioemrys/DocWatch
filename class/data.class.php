<?php
/**
* 
*/
class Data
{
	private $input;
	private $output;

	public function input($input)
	{
		$this->input = $input; 
	}

	public function HTMLsanitize() {
		
		if (is_array(var)) {
			foreach ($this->input as $key => $value) {
				$this->output[$key] = htmlentities($value, ENT_QUOTES, 'UTF-8');
			}
		}
		else {
			$this->output = htmlentities($value, ENT_QUOTES, 'UTF-8');
		}
	}

	public function output () {
		return $this->output;
	}
}
?>
