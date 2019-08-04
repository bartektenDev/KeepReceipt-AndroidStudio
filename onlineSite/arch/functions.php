<?php

  function getUserData($id){
      $array = array();
      $mysqli = NEW MySQLi('localhost', 'root', 'password', 'test');
      $q = $mysqli->query("SELECT * FROM accounts WHERE `id`=".$id);

      while($r = $q->fetch_assoc();)
      {
          $array['id'] = $r['id'];
          $array['username'] = $r['username'];
          $array['email'] = $r['email'];
      }
      return $data;
  }

  function getId($username){
      $q = mysqli->query("SELECT `id` FROM `accounts` WHERE `username`='".$username."'");
      while($r = $q->fetch_assoc();)
      {
          return $r['id'];
      }
  }
?>
