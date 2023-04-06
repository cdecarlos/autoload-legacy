<?php

namespace CompanyNamespace;

use CompanyNamespace\PersonInterface;

class PersonObject implements PersonInterface
{
	private $name;
	// constructor
	public function __construct($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {}
}
