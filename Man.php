<?php

class Man{
  
  /**
   * @param int $age 年龄
   * @param string $name 名字
   */
  
  public function __construct($age,$name){
//       echo 'Construct a man';
    
      this->_age = $age;
      this->_name = $name;
  }
  
  public function getAge(){
      return $this->age;
  }
  
  public function getName(){
      return $this->name;
  }
  
  private $_age,$_name;
  
  public static function sayHello{
      echo 'Hello Man';
  }
    
  
}
