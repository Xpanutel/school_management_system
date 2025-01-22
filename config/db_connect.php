<?php

class DBconnect 
{
    public function dbConnect(string $host, string $user, string $pass, string $dbname): ?mysqli
    {
        try {
            $dbconnect = new mysqli($host, $user, $pass, $dbname);
            return $dbconnect;
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            return null;
        }
    }
}