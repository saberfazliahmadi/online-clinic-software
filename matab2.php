<?php
echo
'This is matab 1.php
<br>
the DATE is :
'.date('Y-m-d').'
<br>
it is version 1
<br>
it is a new section by web editor on cloud repository' ;

/**
 *
 */

// echo $date = date('Y-m-d') ;

// lets define a class which name is login.
class login
{
  public $user_name = 'saber' ;
  public $password  = '123456' ;

  public function setProperty($newval)
  {
      $this->user_name = $newval;
  }

  public function getProperty()
  {
      return $this->user_name.'<br/>' ;
  }
}

// lets define an object.
$obj = new login ;

// lets call our object.
echo '<br/>'.$obj->user_name ;
echo '<br/>'.$obj->password.'<br/>' ;

echo $obj->getProperty(); // Get the property value

$obj->setProperty("SABER FAZLI AHMADI"); // Set a new one

echo $obj->getProperty(); // Read it out again to show the change
echo '<br/>' ;
?>
