<?php

class Validate{
    private $_passed=false,
            $_errors=array();
           

    

    public function check($source , $iteams=array()){
        foreach($iteams as $iteam=>$rules){
            foreach($rules as $rule=>$rule_value){
                //echo "{$iteam} {$rule} must be {$rule_value}<br>";

                $value=trim($source[$iteam]);
                

                if($rule ==='required' && empty($value)){
                    $this->addError("{$iteam} is required");
                }else if(!empty($value)){
                    switch($rule){
                          case 'min':
                                if(strlen($value) < $rule_value){
                                    $this->addError("{$iteam} must be a minimum of {$rule_value} characters");
                                }
                          break;
                          case 'max':
                                if(strlen($value) > $rule_value){
                                    $this->addError("{$iteam} must be a maximum of {$rule_value} characters");
                        }
                          break;
                    }
                }
            }
        }
        if(empty($this->_errors)){
            $this->_passed= true;
        }
        return $this;
    }

    private function addError($error){
        $this->_errors[]=$error;
    }

    public function errors(){
        return $this->_errors;
    }

    public function passed(){
        return $this->_passed;
    }

}