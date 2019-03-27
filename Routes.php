<?php

<<<<<<< HEAD
Route::set('index.php', function(){
=======
Route::set('views/index.php', function(){
>>>>>>> master
  Index::CreateView('index');

});

<<<<<<< HEAD
Route::set('register.php', function(){
  Register::CreateView('register');
});

Route::set('login.php', function(){
=======
Route::set('views/register.php', function(){
  Register::CreateView('register');
});

Route::set('views/login.php', function(){
>>>>>>> master
  Login::CreateView('login');
});

?>