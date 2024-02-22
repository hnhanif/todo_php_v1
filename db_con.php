<?php
const HOSTNAME = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "todo_db";

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
if(!$connection){
    echo"Something went wrong while connecting to the database";
}
