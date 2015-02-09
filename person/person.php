<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/9/15
 * Time: 12:30 PM
 */

class Person {

    private  $firstName;

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    private $middleName;

    /**
     * @param mixed $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }


    private  $lastName;

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }



public function getFullName(){
    return $this->firstName." ".$this->middleName." ".$this->lastName;
}

public function getReverseFullName()
{

    $fullName = $this->getFullName();
    return strrev($fullName);
}

}