<?php
declare(strict_types=1);
class Test
{
	protected string $firstName = '';
	protected string $lastName = '';
	public function setFirstName(string $name)
	{
		$this->firstName = $name;
	}
	public function setLastName(string $name)
	{
		$this->lastName = $name;
	}
	public function getFirstName()
	{
		return $this->firstName;
	}
	public function getLastName()
	{
		return $this->lastName;
	}
	public function getFullName()
	{
		return $this->getFirstName() . ' ' . $this->getLastName();
	}
}
$test = new Test;
$test->setFirstName('Fred');
$test->setLastName('Flintstone');
echo $test->getFullName();
