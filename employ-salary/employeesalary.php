<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/9/15
 * Time: 3:07 PM
 */

class Employeesalary {

    private  $employeName;

    /**
     * @param mixed $employeName
     */
    public function setEmployeName($employeName)
    {
        $this->employeName = $employeName;
    }


    /**
     * @param mixed $basicAmount
     */
    private  $basicAmount;

    /**
     * @param mixed $basicAmount
     */
    public function setBasicAmount($basicAmount)
    {
        $this->basicAmount = $basicAmount;
    }

    private  $houseRent;

    /**
     * @param mixed $houseRent
     */
    public function setHouseRent($houseRent)
    {
         $this->houseRent=$houseRent;
    }

    private  $medical;

    /**
     * @return mixed
     */
    public function getBasicAmount()
    {
        return $this->basicAmount;
    }

    /**
     * @return mixed
     */
    public function getEmployeName()
    {
        return $this->employeName;
    }

    /**
     * @return mixed
     */
    public function getHouseRent()
    {
        return ($this->houseRent*$this->basicAmount)/100;
    }

    /**
     * @return mixed
     */
    public function getMedical()
    {
        return ($this->medical*$this->basicAmount)/100;
    }

    /**
     * @param mixed $medical
     */
    public function setMedical($medical)
    {
       $this->medical=$medical;

    }


    public function getTotalSalary(){
       return $this->basicAmount + $this->getHouseRent()+$this->getMedical();

    }

}

