<?php

namespace Includes;

class Submission {
    protected $SERVER_NAME;
    protected $DB_NAME;
    protected $DB_USER;
    protected $DB_PASS;
    protected $CONN;

    public function __construct()
    {

        /*

        I would normally do something like this, but Windows is being a pain with composer

        $this->SERVER_NAME = getenv('SERVER_NAME');
        $this->DB_NAME = getenv('DB_NAME');
        $this->DB_USER = getenv('DB_USERNAME');
        $this->DB_PASS = getenv('DB_PASS');

        */

        $this->SERVER_NAME = 'localhost';
        $this->DB_NAME = 'geofencing';
        $this->DB_USER = 'bcaylor';
        $this->DB_PASS = 'Password123!';
        $this->CONN = $this->connect();
    }

    public function validateFields(array $fields)
    {
        $errors = [];

        foreach ($fields as $f) {
            if (empty($_POST[$f])) array_push($errors, $f);
        }

        return $errors;
    }

    public function storeSubmission(array $values)
    {
        $date = date('Y-m-d H:i:s');
        $values['created_at'] = $date;

        $sql = 'INSERT into connections (name, email, phone_number, industry, created_at) VALUES (:name, :email, :phone_number, :industry, :created_at)';
        $query = $this->CONN->prepare($sql)->execute([
            ':name' => $values['name'],
            ':email' => $values['email'],
            ':phone_number' => $values['phone'],
            ':industry' => $values['industry'],
            ':created_at' => $values['created_at'],
        ]);

        if ($query) {
            $_POST = [];
        }

        return $query;
    }

    private function connect()
    {
        $connString = "mysql:host=" . $this->SERVER_NAME . ";dbname=" . $this->DB_NAME;

        try {
            $dbh = new \PDO($connString, $this->DB_USER, $this->DB_PASS);
            $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        return $dbh;
    }
}