<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 3:27 PM
 */

class Billcalculation {

    public $rice;
    public $vegetable;
    public $fish;
    public $meat;
    public $vat;
    public $grossTotal;
    public $payableAmount;

    public function getTotalVat(){

        return $this->getGrossTotal() *$this->vat/100;
    }

    public function getGrossTotal(){
        return $this->rice + $this->vegetable + $this->fish + $this->meat;
    }

    public function getPayableAmount()
    {
        return $this->getTotalVat() + $this->getGrossTotal();
    }
} 