<?php namespace teste;
class Cliente { 

    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}
	
	/**
	 * @param string $name 
	 * @return self
	 */
	public function setName(string $name): self {
		$this->name = $name;
		return $this;
	}
}

?>

