<?php
  class Route
  {
    public static $validRoutes = array();
    public static function set($route, $function)
    {
      self::$validRoutes[] = $route;
<<<<<<< HEAD
      // print_r(self::$validRoutes);
=======
      print_r(self::$validRoutes);
>>>>>>> master
      if ($_GET['url'] == $route) {
        $function -> __invoke();
      }
    }
  }
 ?>