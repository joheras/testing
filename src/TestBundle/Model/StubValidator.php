<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TestBundle\Model;

use TestBundle\Model\IEmailValidator;
class StubValidator implements IEmailValidator{

    public function isValidEmail($email) {
        return false;
    }

}
