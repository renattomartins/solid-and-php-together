<?php

namespace SamuelOloruntoba\SOLID\DIP\Solution;

class MySQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        return 'Database connection';
    }
}
