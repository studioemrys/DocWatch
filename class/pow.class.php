<?php
/**
* 
*/
class POW
{

	private $nonce;
	private $hash;
	private $zeroes;
	public $data;


	private function changeNonce() {
		$this->nonce = rand();
	}

	public function changeHash() {		
		$this->hash = hash('SHA256', $this->data.$this->nonce);
	}

	private function proof() {
		$zeroes = strlen($this->hash) - strlen(ltrim($this->hash, '0'));  		
  		if ($zeroes>3) {
  			return true;
  		}
  		else {
  			return false;
  		}

	}

	public function work () {
		$this->changeNonce();
		$this->changeHash();
		while (!$this->proof()) {
			$this->changeNonce();
			$this->changeHash();
			echo $this->hash;
			echo "<br>";
		}
		echo $this->nonce;
		echo "<br>";
		echo $this->data;
	}	
	
}
?>