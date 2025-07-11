<?php

namespace App\Blocks;

use PDO;

class OnlineBlock
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getOnlineUsersCount()
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
        $timestamp = time();
        $timeout = 300; // 5 minutes

        try {
            // Remove old entries
            $stmt = $this->pdo->prepare("DELETE FROM online_users WHERE timestamp < :timeout");
            $stmt->bindValue(':timeout', $timestamp - $timeout, PDO::PARAM_INT);
            $stmt->execute();

            // Check if user exists
            $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM online_users WHERE ip_address = :ip");
            $stmt->bindParam(':ip', $ip, PDO::PARAM_STR);
            $stmt->execute();
            $exists = $stmt->fetchColumn();

            if ($exists) {
                // Update timestamp
                $stmt = $this->pdo->prepare("UPDATE online_users SET timestamp = :timestamp WHERE ip_address = :ip");
                $stmt->bindParam(':timestamp', $timestamp, PDO::PARAM_INT);
                $stmt->bindParam(':ip', $ip, PDO::PARAM_STR);
                $stmt->execute();
            } else {
                // Insert new user
                $stmt = $this->pdo->prepare("INSERT INTO online_users (ip_address, timestamp) VALUES (:ip, :timestamp)");
                $stmt->bindParam(':ip', $ip, PDO::PARAM_STR);
                $stmt->bindParam(':timestamp', $timestamp, PDO::PARAM_INT);
                $stmt->execute();
            }

            // Get current online users count
            $stmt = $this->pdo->query("SELECT COUNT(*) FROM online_users");
            return $stmt->fetchColumn();

        } catch (PDOException $e) {
            // Handle database errors gracefully, perhaps log them
            error_log("OnlineBlock Database Error: " . $e->getMessage());
            return 0; // Return 0 in case of error
        }
    }
}
