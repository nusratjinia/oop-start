<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 2:48 PM
 */

class InterestCalculator {
    public $principalAmount;
    public $annualInterestRate;
    public $timePeriod;

public  function  getTotalAmount(){
    return  $this->principalAmount + ($this->principalAmount * $this->annualInterestRate * $this->timePeriod) / 100;


}
} 