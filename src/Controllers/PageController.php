<?php

namespace App\Controllers;

use PDO;

class PageController extends Controller
{
    public function showPage()
    {
        global $pdo;

        try {
            // Use prepared statements to prevent SQL injection
            $page_id = (int)$_GET['id'];
            $stmt = $pdo->prepare("SELECT * FROM pages WHERE id = :page_id");
            $stmt->bindParam(':page_id', $page_id, PDO::PARAM_INT);
            $stmt->execute();

            $page = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($page) {
                // Use htmlspecialchars to prevent XSS attacks
                $page['content'] = nl2br(htmlspecialchars($page['content']));

                $this->tmpl->assign('page', $page);
                $this->tmpl->assign('tmp_page', 'page.htm');
            } else {
                // Handle page not found
                msg('يبدو أن الصفحة المطلوبة غير موجودة.');
            }
        } catch (PDOException $e) {
            // Handle database query errors
            die("Database query failed: " . $e->getMessage());
        }
    }
}
