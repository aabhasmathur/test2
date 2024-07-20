<?php
try {
   $user = 'root';
   $pass = 'example';
   $dataobj = new PDO("mysql:host=db;port=3306;dbname=ASSESSMENT", $user, $pass);
   $dataobj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $db_creation = "CREATE DATABASE ASSESSMENT";
   $table_1 = "CREATE TABLE asset_detail(
       sno INT(6) NOT NULL AUTO_INCREMENT, 
    asset_name VARCHAR(10),
    asset_brand VARCHAR(10) ,
    asset_current_location VARCHAR(10) ,
    PRIMARY KEY (sno))";
   $table_2 = "CREATE TABLE location_detail(
        sno INT(6) NOT NULL AUTO_INCREMENT, 
     location_name VARCHAR(10),
     PRIMARY KEY (sno))";
   $table_3 = "CREATE TABLE `customer data`(
         sno INT(6) NOT NULL AUTO_INCREMENT, 
      type VARCHAR(10),
      id int(10),
      fname VARCHAR(10),
      lname VARCHAR(10),
      email VARCHAR(10),
      phone  int(10),
      password VARCHAR(10),
      PRIMARY KEY (sno))";
} catch (PDOException $e) {
   print "Error!: " . $e->getMessage() . "<br/>";
   die();
}
?>