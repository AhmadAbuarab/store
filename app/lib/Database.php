<?php

class Database {

    private $dbhost = DB_HOST;
    private $dbname = DB_NAME;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASS;

    private $statement;
    private $dbhandler;
    private $error;

    public function __construct() {
        $conn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;
        // adding this because I use macOs and the path for mysql inside MAMP
//        $conn = 'mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;port=8889;dbname=online_store;charset=utf8';
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbhandler = new PDO($conn, $this->dbuser, $this->dbpass, $options);
        } catch (PDOException $e) {
            $this->error = 'Database error : ' . $e->getMessage();
            echo $this->error;
        }
    }

    public function query($sql_query) {
        $this->statement = $this->dbhandler->prepare($sql_query);
    }

    public function execute() {
        return $this->statement->execute();
    }

    public function resultSet() {
        $this->execute();

        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

}