<?php 

class Calculation{
    public $calcFirstNumber;
    public $calcSecondNumber;
    public $calcOperation;

    public function __construct($num1, $num2, $op){
         $this->calcFirstNumber = $num1;
         $this->calcSecondNumber = $num2;
         $this->calcOperation = $op;
    }

    public function actualCalculation(){
         if($this->calcOperation  == "add"){
           return ($this->calcFirstNumber +  $this->calcSecondNumber);
           
         }else if($this->calcOperation  == "subract"){
            return ($this->calcFirstNumber -  $this->calcSecondNumber);

         }else if($this->calcOperation  == "divide"){
            return ($this->calcFirstNumber/$this->calcSecondNumber);

         }else if($this->calcOperation  == "multiply"){
            return ($this->calcFirstNumber *  $this->calcSecondNumber);
         }else{
             return "error: operation not selected";
         }
    }
}