<?php
(
  new mysqli(
    $argv[1], // typo3_db_host
    $argv[2], // typo3_db_username
    $argv[3], // typo3_db_password
    $argv[4], // typo3_db_name
    (int)$argv[5]  // typo3_db_port
  )
)->connect_error ? exit(1) : exit(0);