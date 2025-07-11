<?php

namespace App\Controllers\Admin;

use PDO;

class LinkController extends AdminController
{
    public function index()
    {
        global $tmpl;
        $tmpl->assign('tmp_page', 'links.htm');
    }

    public function addLinkForm()
    {
        global $tmpl;
        $tmpl->assign('tmp_page', 'links_add.htm');
    }

    public function saveLink()
    {
        global $pdo;
        $title = $_POST['title'];
        $secid = $_POST['secid'];
        $url = $_POST['url'];
        $status = $_POST['status'];

        try {
            $insert_link = $pdo->prepare("INSERT INTO links(title, secid, url, status) VALUES(:title, :secid, :url, :status)");
            $insert_link->bindParam(':title', $title, PDO::PARAM_STR);
            $insert_link->bindParam(':secid', $secid, PDO::PARAM_INT);
            $insert_link->bindParam(':url', $url, PDO::PARAM_STR);
            $insert_link->bindParam(':status', $status, PDO::PARAM_INT);
            $insert_link->execute();

            if ($insert_link->rowCount() > 0) {
                msg('تمت الإضافة بنجاح!', '?show=links&action=show_links');
            } else {
                msg('حدث خطأ أثناء الإضافة، الرجاء المحاولة مرة أخرى.', '?show=links&action=show_links');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function showLinks()
    {
        global $pdo, $tmpl;
        $page = (int) ($_GET['page'] ?? 1);
        $max = 15;
        $min = (($page * $max) - $max);

        try {
            $select_links = $pdo->prepare("SELECT id, title FROM links ORDER BY secid LIMIT :min, :max");
            $select_links->bindParam(':min', $min, PDO::PARAM_INT);
            $select_links->bindParam(':max', $max, PDO::PARAM_INT);
            $select_links->execute();
            $links = $select_links->fetchAll(PDO::FETCH_ASSOC);

            $num_links_stmt = $pdo->query("SELECT COUNT(id) FROM links");
            $num_links = $num_links_stmt->fetchColumn();

            $cols = ceil($num_links / $max);
            $pages = '';
            for($i = 1; $i <= $cols; $i++){
                if ($page == $i) $pages .= "<span class='current_page'>$i</span>&nbsp;";
                else $pages .= "<a class='page_link' href='?show=links&action=show_links&page=$i'>$i</a>&nbsp;";
            }
            $tmpl->assign('pages', $pages);
            $tmpl->assign('links', $links);
            $tmpl->assign('tmp_page', 'links_show.htm');
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function editLinkForm()
    {
        global $pdo, $tmpl;
        $link_id = (int) $_GET['id'];

        try {
            $link_stmt = $pdo->prepare("SELECT * FROM links WHERE id = :link_id");
            $link_stmt->bindParam(':link_id', $link_id, PDO::PARAM_INT);
            $link_stmt->execute();
            $link = $link_stmt->fetch(PDO::FETCH_ASSOC);

            if ($link) {
                $tmpl->assign('link', $link);
                $tmpl->assign('tmp_page', 'links_edit.htm');
            } else {
                msg('الرابط المطلوب غير موجود.');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function updateLink()
    {
        global $pdo;
        $link_id = (int) $_GET['id'];
        $title = $_POST['title'];
        $secid = $_POST['secid'];
        $url = $_POST['url'];
        $status = $_POST['status'];

        try {
            $update_link = $pdo->prepare("UPDATE links SET title = :title, secid = :secid, url = :url, status = :status WHERE id = :link_id");
            $update_link->bindParam(':title', $title, PDO::PARAM_STR);
            $update_link->bindParam(':secid', $secid, PDO::PARAM_INT);
            $update_link->bindParam(':url', $url, PDO::PARAM_STR);
            $update_link->bindParam(':status', $status, PDO::PARAM_INT);
            $update_link->bindParam(':link_id', $link_id, PDO::PARAM_INT);
            $update_link->execute();

            if ($update_link->rowCount() > 0) {
                msg('تم التحرير بنجاح!', '?show=links&action=show_links');
            } else {
                msg('حدث خطأ أثناء التحرير، الرجاء المحاولة مرة أخرى.', '?show=links&action=show_links');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function deleteLink()
    {
        global $pdo;
        $link_id = (int) $_GET['id'];

        try {
            $delete_link = $pdo->prepare("DELETE FROM links WHERE id = :link_id");
            $delete_link->bindParam(':link_id', $link_id, PDO::PARAM_INT);
            $delete_link->execute();

            if ($delete_link->rowCount() > 0) {
                msg('تم الحذف بنجاح!', '?show=links&action=show_links');
            } else {
                msg('حدث خطأ أثناء الحذف، الرجاء المحاولة مرة أخرى.', '?show=links&action=show_links');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function moveLinkUp()
    {
        global $pdo;
        $link_id = (int) $_GET['id'];

        try {
            $link_stmt = $pdo->prepare("SELECT id, secid FROM links WHERE id = :link_id");
            $link_stmt->bindParam(':link_id', $link_id, PDO::PARAM_INT);
            $link_stmt->execute();
            $link = $link_stmt->fetch(PDO::FETCH_ASSOC);

            if ($link) {
                $link_order = $link['secid'];
                $prev_link_stmt = $pdo->prepare("SELECT id, secid FROM links WHERE secid < :link_order ORDER BY secid DESC LIMIT 1");
                $prev_link_stmt->bindParam(':link_order', $link_order, PDO::PARAM_INT);
                $prev_link_stmt->execute();
                $prev_link = $prev_link_stmt->fetch(PDO::FETCH_ASSOC);

                if ($prev_link) {
                    $prev_order = $prev_link['secid'];

                    $pdo->beginTransaction();

                    $update_current = $pdo->prepare("UPDATE links SET secid = :prev_order WHERE id = :link_id");
                    $update_current->bindParam(':prev_order', $prev_order, PDO::PARAM_INT);
                    $update_current->bindParam(':link_id', $link_id, PDO::PARAM_INT);
                    $update_current->execute();

                    $update_prev = $pdo->prepare("UPDATE links SET secid = :link_order WHERE id = :prev_link_id");
                    $update_prev->bindParam(':link_order', $link_order, PDO::PARAM_INT);
                    $update_prev->bindParam(':prev_link_id', $prev_link['id'], PDO::PARAM_INT);
                    $update_prev->execute();

                    $pdo->commit();

                    msg('تم تغيير الترتيب بنجاح!', '?show=links&action=show_links');
                } else {
                    msg('حدث خطأ أثناء تغيير الترتيب، أو قد لايكون هناك رابط أعلى هذا الرابط.', '?show=links&action=show_links');
                }
            } else {
                msg('الرابط المطلوب غير موجود.');
            }
        } catch (PDOException $e) {
            $pdo->rollBack();
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function moveLinkDown()
    {
        global $pdo;
        $link_id = (int) $_GET['id'];

        try {
            $link_stmt = $pdo->prepare("SELECT id, secid FROM links WHERE id = :link_id");
            $link_stmt->bindParam(':link_id', $link_id, PDO::PARAM_INT);
            $link_stmt->execute();
            $link = $link_stmt->fetch(PDO::FETCH_ASSOC);

            if ($link) {
                $link_order = $link['secid'];
                $next_link_stmt = $pdo->prepare("SELECT id, secid FROM links WHERE secid > :link_order ORDER BY secid ASC LIMIT 1");
                $next_link_stmt->bindParam(':link_order', $link_order, PDO::PARAM_INT);
                $next_link_stmt->execute();
                $next_link = $next_link_stmt->fetch(PDO::FETCH_ASSOC);

                if ($next_link) {
                    $next_order = $next_link['secid'];

                    $pdo->beginTransaction();

                    $update_current = $pdo->prepare("UPDATE links SET secid = :next_order WHERE id = :link_id");
                    $update_current->bindParam(':next_order', $next_order, PDO::PARAM_INT);
                    $update_current->bindParam(':link_id', $link_id, PDO::PARAM_INT);
                    $update_current->execute();

                    $update_next = $pdo->prepare("UPDATE links SET secid = :link_order WHERE id = :next_link_id");
                    $update_next->bindParam(':link_order', $link_order, PDO::PARAM_INT);
                    $update_next->bindParam(':next_link_id', $next_link['id'], PDO::PARAM_INT);
                    $update_next->execute();

                    $pdo->commit();

                    msg('تم تغيير الترتيب بنجاح!', '?show=links&action=show_links');
                } else {
                    msg('حدث خطأ أثناء تغيير الترتيب، أو قد لايكون هناك رابط أسفل هذا الرابط.', '?show=links&action=show_links');
                }
            } else {
                msg('الرابط المطلوب غير موجود.');
            }
        } catch (PDOException $e) {
            $pdo->rollBack();
            die("Database query failed: " . $e->getMessage());
        }
    }
}
