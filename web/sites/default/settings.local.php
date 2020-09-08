<?php

$databases['default']['default'] = array (
  'database' => 'drupal', // same as $DB_NAME
  'username' => 'drupal', // same as $DB_USER
  'password' => 'drupal', // same as $DB_PASSWORD
  'host' => 'mariadb', // same as $DB_HOST
  'driver' => 'mysql',  // same as $DB_DRIVER
  'port' => '3306', // different for PostgreSQL
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql', // different for PostgreSQL
  'prefix' => '',
);
