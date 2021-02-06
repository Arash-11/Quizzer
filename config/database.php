<?php

  $db_host = 'localhost';
  $db_user = 'arash';
  $db_name = 'quizzer';
  $db_password = 'R2wfitPodZXQfKep';

  $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

  if($mysqli->connect_error) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
  }