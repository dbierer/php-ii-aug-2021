<?php
class UserEntity {
    
    public function __construct(
		protected string $firstName, 
		protected string $lastName) 
    {}
    public function getFullName()
    {
		return $this->firstName . ' ' . $this->lastName;
	}
}
 
$user[] = new UserEntity('Jack' , 'Ryan');
$user[] = new UserEntity('Monte' , 'Python');

foreach ($user as $obj)
	echo $obj->getFullName() . "\n";

var_dump($user);
