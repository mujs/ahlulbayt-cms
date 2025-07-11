<?php

namespace App\Blocks;

use PDO;

class MainMenuBlock
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getData()
    {
        try {
            $links_query = $this->pdo->query("SELECT * FROM links WHERE status = '1' ORDER BY secid");
            return $links_query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }
}