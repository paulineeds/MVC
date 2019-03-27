




<?php
include('classes/DB.php');
function isLoggedIn() {

  //checks if the token can be found in DB/is valid
        if (isset($_COOKIE['SNID'])) {
                if (DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))) {
                        $userid = DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))[0]['user_id'];

                        return true;
                }
              }

              return false;
            }
            if (isLoggedIn()){
              echo 'Logged in';
          } else {
            echo 'Not logged in';
          }

          ?>