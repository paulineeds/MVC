<?php
<<<<<<< HEAD
class Controller extends DB {
  public static function CreateView($viewName){
    require_once('./views/'.$viewName.'.php');
    static::doSomething();
  }
}
=======

class Controller extends DB {
  public static function CreateView($viewName){
    require_once($viewName.'.php');
    static::doSomething();
  }
}

>>>>>>> master
?>