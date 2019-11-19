<?php

require_once 'People.php';

class Man extends People{
    
    public function __construct($age,$name){
      parent::__construct($age,$name,'男')
    }
    
    public function hi(){
//         parent::hi();
        echo 'Man '.$this->getName().' say hi';
    }
}
