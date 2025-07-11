<?php

namespace App\Controllers\Admin;

use PDO;

class PageController extends AdminController
{
    public function index()
    {
        global $tmpl;
        $tmpl->assign('tmp_page', 'pages.htm');
    }

    public function addPageForm()
    {
        global $tmpl;
        $tmpl->assign('tmp_page', 'pages_add.htm');
    }

    public function savePage()
    {
        global $pdo;
        $title = $_POST['title'];
        $content = $_POST['content'];
        $status = $_POST['status'];

        try {
            $insert_page = $pdo->prepare("INSERT INTO pages(title, content, status) VALUES(:title, :content, :status)");
            $insert_page->bindParam(':title', $title, PDO::PARAM_STR);
            $insert_page->bindParam(':content', $content, PDO::PARAM_STR);
            $insert_page->bindParam(':status', $status, PDO::PARAM_INT);
            $insert_page->execute();

            if ($insert_page->rowCount() > 0) {
                msg('تمت الإضافة بنجاح!', '?show=pages&action=show_pages');
            } else {
                msg('حدث خطأ أثناء الإضافة، الرجاء المحاولة مرة أخرى.', '?show=pages&action=show_pages');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function showPages()
    {
        global $pdo, $tmpl;
        $page = (int) ($_GET['page'] ?? 1);
        $max = 15;
        $min = (($page * $max) - $max);

        try {
            $select_pages = $pdo->prepare("SELECT id, title FROM pages LIMIT :min, :max");
            $select_pages->bindParam(':min', $min, PDO::PARAM_INT);
            $select_pages->bindParam(':max', $max, PDO::PARAM_INT);
            $select_pages->execute();
            $pages = $select_pages->fetchAll(PDO::FETCH_ASSOC);

            $num_pages_stmt = $pdo->query("SELECT COUNT(id) FROM pages");
            $num_pages = $num_pages_stmt->fetchColumn();

            $cols = ceil($num_pages / $max);
            $spages = '';
            for($i = 1; $i <= $cols; $i++){
                if ($page == $i) $spages .= "<span class='current_page'>$i</span>&nbsp;";
                else $spages .= "<a class='page_page' href='?show=pages&action=show_pages&page=$i'>$i</a>&nbsp;";
            }
            $tmpl->assign('spages', $spages);
            $tmpl->assign('pages', $pages);
            $tmpl->assign('tmp_page', 'pages_show.htm');
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function editPageForm()
    {
        global $pdo, $tmpl;
        $page_id = (int) $_GET['id'];

        try {
            $page_stmt = $pdo->prepare("SELECT * FROM pages WHERE id = :page_id");
            $page_stmt->bindParam(':page_id', $page_id, PDO::PARAM_INT);
            $page_stmt->execute();
            $page = $page_stmt->fetch(PDO::FETCH_ASSOC);

            if ($page) {
                $tmpl->assign('page', $page);
                $tmpl->assign('tmp_page', 'pages_edit.htm');
            } else {
                msg('الصفحة المطلوبة غير موجودة.');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function updatePage()
    {
        global $pdo;
        $page_id = (int) $_GET['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $status = $_POST['status'];

        try {
            $update_page = $pdo->prepare("UPDATE pages SET title = :title, content = :content, status = :status WHERE id = :page_id");
            $update_page->bindParam(':title', $title, PDO::PARAM_STR);
            $update_page->bindParam(':content', $content, PDO::PARAM_STR);
            $update_page->bindParam(':status', $status, PDO::PARAM_INT);
            $update_page->bindParam(':page_id', $page_id, PDO::PARAM_INT);
            $update_page->execute();

            if ($update_page->rowCount() > 0) {
                msg('تم التحرير بنجاح!', '?show=pages&action=show_pages');
            } else {
                msg('حدث خطأ أثناء التحرير، الرجاء المحاولة مرة أخرى.', '?show=pages&action=show_pages');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function deletePage()
    {
        global $pdo;
        $page_id = (int) $_GET['id'];

        try {
            $delete_page = $pdo->prepare("DELETE FROM pages WHERE id = :page_id");
            $delete_page->bindParam(':page_id', $page_id, PDO::PARAM_INT);
            $delete_page->execute();

            if ($delete_page->rowCount() > 0) {
                msg('تم الحذف بنجاح!', '?show=pages&action=show_pages');
            } else {
                msg('حدث خطأ أثناء الحذف، الرجاء المحاولة مرة أخرى.', '?show=pages&action=show_pages');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }
}
