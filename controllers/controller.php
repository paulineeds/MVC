<?php

class Controller extends DB {
  public static function CreateView($viewName){
    require_once($viewName.'.php');
    static::doSomething();
  }
}

?>