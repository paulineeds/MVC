<?php

Route::set('index.php', function(){
  Index::CreateView('index');

});

Route::set('register.php', function(){
  Register::CreateView('register');
});

Route::set('login.php', function(){
  Login::CreateView('login');
});

?>