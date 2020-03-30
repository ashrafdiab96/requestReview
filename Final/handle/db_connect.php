<?php
 //header('Content-type: text/plain; charset=utf-8');
/**
 * A class file to connect to database
 */


class DB_CONNECT {

    // constructor
    function __construct() {
        // connecting to database
        $this->connect();
    }
 
    // destructor
    function __destruct() {
        // closing db connection
        $this->close();
    }
 
    /**
     * Function to connect with database
     */
    function connect() {
        // import database connection variables
        require_once __DIR__ . '/db_config.php';
 
        // Connecting to mysql database
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die( "Unable to select par");
        
        // Selecing database
        $db = mysqli_select_db($con,DB_DATABASE) or die( "Unable to select database");
 	    mysqli_query($con,"SET NAMES 'utf8'"); 
        mysqli_query($con,'SET CHARACTER SET utf8');
        mysqli_query($con,"SET time_zone = '+2:00'");
        // returing connection cursor
        return $con;
    }
 
    /**
     * Function to close db connection
     */
    function close() {
       // closing db connection
        mysqli_close($this->connect());
    }
}
 
?>