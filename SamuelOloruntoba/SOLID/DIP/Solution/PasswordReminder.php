<?php

namespace SamuelOloruntoba\SOLID\DIP\Solution;

class PasswordReminder
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}
