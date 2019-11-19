<?php

class People{
  
  /**
   * @param int $age 年龄
   * @param string $name 名字
   */
  
  public function __construct($age,$name,$sex){
//       echo 'Construct a man';
    
      this->_age = $age;
      this->_name = $name;
      this->_sex = $sex;
    
      MAN::$NUM++;
    
      if(MAN::NUM>Man::MAX_MAN_NUM){
          throw new Exception("不能创建更多的人");
      }
  }
  
  public function getAge(){
      return $this->_age;
  }
  
  public function getName(){
      return $this->_name;
  }
  
  public function getSex(){
      return $this->_sex;
  }
  
  public function hi(){
      echo $this->_name.'say hi';
  }
  
  private $_age,$_name,$_sex;
  
  private static $NUM = 100;
  
  const MAX_MAN_NUM = 200;
  
  public static function sayHello(){
      echo 'Hello Man';
  }
    
  
  
}

