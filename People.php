<?php

class People{
  
  /**
   * @param int $age 年龄
   * @param string $name 名字
   */
  
  public function __construct($age,$name){
//       echo 'Construct a man';
    
      this->_age = $age;
      this->_name = $name;
      
      MAN::$NUM++;
    
      if(MAN::NUM>Man::MAX_MAN_NUM){
          throw new Exception("不能创建更多的人");
      }
  }
  
  public function getAge(){
      return $this->age;
  }
  
  public function getName(){
      return $this->name;
  }
  
  private $_age,$_name;
  
  private static $NUM = 100;
  
  const MAX_MAN_NUM = 200;
  
  public static function sayHello{
      echo 'Hello Man';
  }
    
  
  
}

