<?php

namespace SamuelOloruntoba\SOLID\DIP\Violation;

// Violation:
// First the MySQLConnection is the low level module while the PasswordReminder
// is high level, but according to the definition of D in S.O.L.I.D. which states
// that Depend on Abstraction not on concretions, this snippet above violates
// this principle as the PasswordReminder class is being forced to depend on the
// MySQLConnection class.
class PasswordReminder
{
    private $dbConnection;

    public function __construct(MySQLConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}
