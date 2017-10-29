<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TestBundle\Model;

use TestBundle\Model\IEmailValidator;

class MockValidator implements IEmailValidator{
    
    public $iscalled=false;
    
    public function isValidEmail($email) {
        $this->iscalled = true; 
        return true;
    }
}
