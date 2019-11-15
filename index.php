<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

// require_once 'Hello1.php';

// $h = new Hello();
// $h->sayHello();
  
// $d = new Desktop();
// $d->work();

// require_once 'yzfhq/Hello.php';
// require_once 'Ricechips/Hello.php';

// $h = new \Ricechips\Hello();
// $h->sayHello();

// $h = new \yzfhq\Hello();
// $h->sayHello();

require_once 'Man.php';
// $m = new Man(22,"syh");
// echo $m->getName();

// Man::sayHello();

// for($i=0;$i<People::MAX_MAN_NUM;$i++){
//   new People(10,"Ricechips");
// }
$m = new Man(10,'Ricechips');
$m->hi();
    
?>
  </body>
</html>
