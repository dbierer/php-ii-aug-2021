<?php
class UserEntity {
    protected string $firstName;
    protected string $lastName;
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName ;
        $this->lastName = $lastName ;
    }
    public function getFullName()
    {
		return $this->firstName . ' ' . $this->lastName;
	}
}
 
$user[] = new UserEntity('Jack' , 'Ryan');
$user[] = new UserEntity('Monte' , 'Python');

foreach ($user as $obj)
	echo $obj->getFullName() . "\n";
