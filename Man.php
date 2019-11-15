<?php

require_once 'People.php';

class Man extands People{
    
    public function __construct($age,$name){
      parent::__construct($age,$name,'男')
    }

}
