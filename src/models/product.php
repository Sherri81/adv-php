<?php

class Product
{
    public function getData(): array 
    {
        
            $dsn = "mysql:
            host=localhost;
            dbname=sherd_RickJames;
            charset=utf8;
            port=3306";

            $pdo = new PDO($dsn, "sherd_RickJames", "QnepmMdV", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

            $stmt = $pdo->query("SELECT * FROM `products`");

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}