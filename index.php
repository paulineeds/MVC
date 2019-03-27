    
<?php
 error_reporting( E_ALL ); 
  spl_autoload_register(function($class_name)
  {
    if (file_exists('classes/'.$class_name.'.php')) {
      require_once('classes/'.$class_name.'.php');
    }
    else if (file_exists('controllers/'.$class_name.'.php')) {
      require_once('controllers/'.$class_name.'.php');
    }
    else if (file_exists('models/'.$class_name.'.php')) {
      require_once('models/'.$class_name.'.php');
    }
  }); 
  require_once('Routes.php');

  if(Login::isLoggedIn()) {
    echo 'Logged In';
    echo Login::isLogedIn();
  } else { 
    echo 'Not logged in';
  }
 ?>