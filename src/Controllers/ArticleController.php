<?php

namespace App\Controllers;

use PDO;

class ArticleController extends Controller
{
    public function showCategory()
    {
        global $pdo;

        $cat_id = (int)$_GET['id'];

        try {
            // Fetch category using PDO
            $stmtCat = $pdo->prepare("SELECT * FROM cats WHERE id = :cat_id");
            $stmtCat->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
            $stmtCat->execute();
            $cat = $stmtCat->fetch(PDO::FETCH_ASSOC);

            // Fetch articles using PDO
            $stmtArticles = $pdo->prepare("SELECT * FROM articles WHERE status = '1' AND cat_id = :cat_id ORDER BY id DESC LIMIT 20");
            $stmtArticles->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
            $stmtArticles->execute();
            $articles = $stmtArticles->fetchAll(PDO::FETCH_ASSOC);

            $this->tmpl->assign('cat', $cat);
            $this->tmpl->assign('articles', $articles);
            $this->tmpl->assign('tmp_page', 'cat.htm');

            if (!$cat) {
                msg('الصفحة المطلوبة غير متوفرة.');
            }
        } catch (PDOException $e) {
            // Handle database query errors
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function showArticle()
    {
        global $pdo;

        $article_id = (int)$_GET['id'];

        try {
            // Update article views using PDO
            $stmtUpdateViews = $pdo->prepare("UPDATE articles SET views = views + 1 WHERE id = :article_id");
            $stmtUpdateViews->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $stmtUpdateViews->execute();

            // Fetch article using PDO
            $stmtArticle = $pdo->prepare("SELECT * FROM articles WHERE id = :article_id AND status = '1'");
            $stmtArticle->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $stmtArticle->execute();
            $article = $stmtArticle->fetch(PDO::FETCH_ASSOC);

            if ($article) {
                // Fetch category using PDO
                $stmtCat = $pdo->prepare("SELECT * FROM cats WHERE id = :cat_id");
                $stmtCat->bindParam(':cat_id', $article['cat_id'], PDO::PARAM_INT);
                $stmtCat->execute();
                $cat = $stmtCat->fetch(PDO::FETCH_ASSOC);

                $article['cat_title'] = $cat['title'];

                // Count comments using PDO
                $stmtNumComments = $pdo->prepare("SELECT COUNT(*) as num_comments FROM articles_comments WHERE article_id = :article_id");
                $stmtNumComments->bindParam(':article_id', $article_id, PDO::PARAM_INT);
                $stmtNumComments->execute();
                $num_comments_result = $stmtNumComments->fetch(PDO::FETCH_ASSOC);

                $article['num_comments'] = $num_comments_result['num_comments'];

                $this->tmpl->assign('article', $article);
                $this->tmpl->assign('tmp_page', 'article.htm');
            } else {
                msg('الصفحة المطلوبة غير متوفرة.');
            }
        } catch (PDOException $e) {
            // Handle database query errors
            die("Database query failed: " . $e->getMessage());
        }
    }
}
