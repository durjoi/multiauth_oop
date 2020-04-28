<?php
  require_once 'core/init.php';

  $user = DB::getInstance()->get('users', array('id', '=', 1))->results();

  print_r($user[0]->name);

  if(Session::exists('home')) {
    echo Session::flash('home');
  }
 ?>
