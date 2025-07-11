<?php

namespace App\Controllers\Admin;

use PDO;

class ArticleController extends AdminController
{
    public function index()
    {
        global $tmpl;
        $tmpl->assign('tmp_page', 'articles.htm');
    }

    public function addArticleForm()
    {
        global $pdo, $tmpl;
        try {
            $select_cats = $pdo->query("SELECT id, title FROM cats");
            $cats = $select_cats->fetchAll(PDO::FETCH_ASSOC);
            $tmpl->assign('cats', $cats);
            $tmpl->assign('add_date', date('Y-m-d H:i:s'));
            $tmpl->assign('tmp_page', 'articles_add.htm');
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function saveArticle()
    {
        global $pdo;
        $title = $_POST['title'];
        $cat_id = $_POST['cat_id'];
        $article = $_POST['article'];
        $add_date = strtotime($_POST['add_date']);
        $source = $_POST['source'];
        $status = $_POST['status'];

        try {
            $insert_article = $pdo->prepare("INSERT INTO articles(title, cat_id, article, add_date, source, status) VALUES(:title, :cat_id, :article, :add_date, :source, :status)");
            $insert_article->bindParam(':title', $title, PDO::PARAM_STR);
            $insert_article->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
            $insert_article->bindParam(':article', $article, PDO::PARAM_STR);
            $insert_article->bindParam(':add_date', $add_date, PDO::PARAM_INT);
            $insert_article->bindParam(':source', $source, PDO::PARAM_STR);
            $insert_article->bindParam(':status', $status, PDO::PARAM_INT);
            $insert_article->execute();

            if ($insert_article->rowCount() > 0) {
                msg('تمت الإضافة بنجاح!', '?show=articles&action=show_articles');
            } else {
                msg('حدث خطأ أثناء الإضافة، الرجاء المحاولة مرة أخرى.', '?show=articles&action=show_articles');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function showArticles()
    {
        global $pdo, $tmpl;
        try {
            $select_cats = $pdo->query("SELECT id, title FROM cats");
            $cats = $select_cats->fetchAll(PDO::FETCH_ASSOC);
            $tmpl->assign('cats', $cats);

            $cat_id = (int) ($_POST['cat_id'] ?? 0);
            $page = (int) ($_GET['page'] ?? 1);
            $max = 15;
            $min = (($page * $max) - $max);

            $sql = "SELECT id, title FROM articles";
            $countSql = "SELECT COUNT(id) FROM articles";
            $params = [];

            if ($cat_id > 0) {
                $sql .= " WHERE cat_id = :cat_id";
                $countSql .= " WHERE cat_id = :cat_id";
                $params[':cat_id'] = $cat_id;
            }

            $sql .= " LIMIT $min, $max";

            $select_articles = $pdo->prepare($sql);
            $select_articles->execute($params);
            $articles = $select_articles->fetchAll(PDO::FETCH_ASSOC);

            $num_articles_stmt = $pdo->prepare($countSql);
            $num_articles_stmt->execute($params);
            $num_articles = $num_articles_stmt->fetchColumn();

            $cols = ceil($num_articles / $max);
            $pages = '';
            for($i = 1; $i <= $cols; $i++){
                if ($page == $i) $pages .= "<span class='current_page'>$i</span>&nbsp;";
                else $pages .= "<a class='page_article' href='?show=articles&action=show_articles&page=$i'>$i</a>&nbsp;";
            }
            $tmpl->assign('pages', $pages);
            $tmpl->assign('articles', $articles);
            $tmpl->assign('tmp_page', 'articles_show.htm');
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function editArticleForm()
    {
        global $pdo, $tmpl;
        $article_id = (int) $_GET['id'];

        try {
            $article_stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :article_id");
            $article_stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $article_stmt->execute();
            $article = $article_stmt->fetch(PDO::FETCH_ASSOC);

            if ($article) {
                $article['add_date'] = date('Y-m-d H:i:s', $article['add_date']);
                $select_cats = $pdo->query("SELECT id, title FROM cats");
                $cats = $select_cats->fetchAll(PDO::FETCH_ASSOC);
                $tmpl->assign('cats', $cats);
                $tmpl->assign('article', $article);
                $tmpl->assign('tmp_page', 'articles_edit.htm');
            } else {
                msg('المقال المطلوب غير موجود.');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function updateArticle()
    {
        global $pdo;
        $article_id = (int) $_GET['id'];
        $title = $_POST['title'];
        $cat_id = $_POST['cat_id'];
        $article = $_POST['article'];
        $add_date = strtotime($_POST['add_date']);
        $source = $_POST['source'];
        $views = $_POST['views'];
        $status = $_POST['status'];

        try {
            $update_article = $pdo->prepare("UPDATE articles SET title = :title, cat_id = :cat_id, article = :article, add_date = :add_date, source = :source, views = :views, status = :status WHERE id = :article_id");
            $update_article->bindParam(':title', $title, PDO::PARAM_STR);
            $update_article->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
            $update_article->bindParam(':article', $article, PDO::PARAM_STR);
            $update_article->bindParam(':add_date', $add_date, PDO::PARAM_INT);
            $update_article->bindParam(':source', $source, PDO::PARAM_STR);
            $update_article->bindParam(':views', $views, PDO::PARAM_INT);
            $update_article->bindParam(':status', $status, PDO::PARAM_INT);
            $update_article->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $update_article->execute();

            if ($update_article->rowCount() > 0) {
                msg('تم التحرير بنجاح!', '?show=articles&action=show_articles');
            } else {
                msg('حدث خطأ أثناء التحرير، الرجاء المحاولة مرة أخرى.', '?show=articles&action=show_articles');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function deleteArticle()
    {
        global $pdo;
        $article_id = (int) $_GET['id'];

        try {
            $delete_article = $pdo->prepare("DELETE FROM articles WHERE id = :article_id");
            $delete_article->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $delete_article->execute();

            if ($delete_article->rowCount() > 0) {
                msg('تم الحذف بنجاح!', '?show=articles&action=show_articles');
            } else {
                msg('حدث خطأ أثناء الحذف، الرجاء المحاولة مرة أخرى.', '?show=articles&action=show_articles');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }
}
