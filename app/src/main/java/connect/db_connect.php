<?php

/**
 * A class file to connect to database
 */
class DB_CONNECT {
    private $con;

    // constructor
    function __construct() {
        // connecting to database
        //$this->connect(); Entfernt, weil die Klasseninitialisierung keinen $con-String zurück geben kann
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

        $host='quizapp.cqndrgh2munj.us-west-2.rds.amazonaws.com:3306';
	    $uname='QuizApp';
	    $pwd='Android1415';
	    $database="QuizDB";

        // Connecting to mysql database
        $con = @mysql_connect($host,$uname,$pwd) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db($database) or die(mysql_error()) or die(mysql_error());

        // returing connection cursor
        return $con;
    }

    /**
     * Function to close db connection
     */
    function close() {
        // closing db connection
        @mysql_close();
    }
}

/**
 * Function to properly encode Arrays UTF-8 for JSON Objects. This is IMPORTANT for the proper response!!
 */
function encode_items(&$item, $key)
{
	$item = utf8_encode($item);
}

?>