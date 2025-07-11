<?php

namespace App\Controllers;

use PDO;

class HomeController extends Controller
{
    public function index()
    {
        global $pdo;

        try {
            // Fetch categories using PDO
            $cats_stmt = $pdo->query("SELECT * FROM cats");
            $cats = [];

            while ($cat = $cats_stmt->fetch(PDO::FETCH_ASSOC)) {
                // Count articles for each category
                $num_cats_stmt = $pdo->prepare("SELECT COUNT(*) as num_articles FROM articles WHERE cat_id = :cat_id");
                $num_cats_stmt->bindParam(':cat_id', $cat['id']);
                $num_cats_stmt->execute();
                $num_cats_result = $num_cats_stmt->fetch(PDO::FETCH_ASSOC);

                $num_cats = $num_cats_result['num_articles'];

                if ($num_cats > 0) {
                    // Fetch recent articles for each category
                    $articles_stmt = $pdo->prepare("SELECT * FROM articles WHERE status = '1' AND cat_id = :cat_id ORDER BY id DESC LIMIT 5");
                    $articles_stmt->bindParam(':cat_id', $cat['id']);
                    $articles_stmt->execute();
                    $articles = $articles_stmt->fetchAll(PDO::FETCH_ASSOC);

                    $cat['articles'] = $articles;
                    $cats[] = $cat;
                }
            }

            $this->tmpl->assign('cats', $cats);
            $this->tmpl->assign('tmp_page', 'main.htm');
        } catch (PDOException $e) {
            // Handle database query errors
            die("Database query failed: " . $e->getMessage());
        }
    }
}
