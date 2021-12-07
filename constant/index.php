<?php

// Using "define('MY_VAR', 'default value')" INSIDE a class definition does not work as expected. You have to use the PHP keyword 'const' and initialize it with a scalar value -- boolean, int, float, string (or array in PHP 5.6+) -- right away.

define('MIN_VALUE', '5.0');   // RIGHT - Works OUTSIDE of a class definition.
define('MAX_VALUE', '8.0');   // RIGHT - Works OUTSIDE of a class definition.

//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.
//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

class Constants
{
  //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.
  //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.

  const MIN_VALUE = 0.0;      // RIGHT - Works INSIDE of a class definition.
  const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition.

  public static function getMinValue()
  {
    return self::MIN_VALUE;
  }

  public static function getMaxValue()
  {
    return self::MAX_VALUE;
  }
  public function getGrating()
  {
      return 'Hello!';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
    <?php 
        $constant = new Constants;
        echo '$constant::getMaxValue(): '.$constant::getMaxValue().' <br>';
        echo 'MAX_VALUE: '.MAX_VALUE.'<br>';
    ?>    
</body>
</html>