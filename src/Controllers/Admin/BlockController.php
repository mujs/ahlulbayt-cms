<?php

namespace App\Controllers\Admin;

use PDO;

class BlockController extends AdminController
{
    public function index()
    {
        global $tmpl;
        $tmpl->assign('tmp_page', 'blocks.htm');
    }

    public function addBlockForm()
    {
        global $tmpl;
        $php_files = [];
        if ($handle = opendir(__DIR__ . '/../../../blocks/')) {
            while (false !== ($file = readdir($handle))) {
                if (substr($file, -3) == 'php') {
                    $php_files[] = $file;
                }
            }
            closedir($handle);
        }
        $tmpl->assign('php_files', $php_files);
        $tmpl->assign('tmp_page', 'blocks_add.htm');
    }

    public function saveBlock()
    {
        global $pdo;
        $title = $_POST['title'];
        $type = $_POST['type'];
        $html_content = $_POST['html_content'];
        $php_file = $_POST['php_file'];
        $status = $_POST['status'];

        try {
            $insert_block = $pdo->prepare("INSERT INTO blocks(title, type, html_content, php_file, status) VALUES(:title, :type, :html_content, :php_file, :status)");
            $insert_block->bindParam(':title', $title, PDO::PARAM_STR);
            $insert_block->bindParam(':type', $type, PDO::PARAM_STR);
            $insert_block->bindParam(':html_content', $html_content, PDO::PARAM_STR);
            $insert_block->bindParam(':php_file', $php_file, PDO::PARAM_STR);
            $insert_block->bindParam(':status', $status, PDO::PARAM_INT);
            $insert_block->execute();

            if ($insert_block->rowCount() > 0) {
                msg('تمت الإضافة بنجاح!', '?show=blocks&action=show_blocks');
            } else {
                msg('حدث خطأ أثناء الإضافة، الرجاء المحاولة مرة أخرى.', '?show=blocks&action=show_blocks');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function showBlocks()
    {
        global $pdo, $tmpl;
        $page = (int) ($_GET['page'] ?? 1);
        $max = 15;
        $min = (($page * $max) - $max);

        try {
            $select_blocks = $pdo->prepare("SELECT id, title FROM blocks LIMIT :min, :max");
            $select_blocks->bindParam(':min', $min, PDO::PARAM_INT);
            $select_blocks->bindParam(':max', $max, PDO::PARAM_INT);
            $select_blocks->execute();
            $blocks = $select_blocks->fetchAll(PDO::FETCH_ASSOC);

            $num_blocks_stmt = $pdo->query("SELECT COUNT(id) FROM blocks");
            $num_blocks = $num_blocks_stmt->fetchColumn();

            $cols = ceil($num_blocks / $max);
            $pages = '';
            for($i = 1; $i <= $cols; $i++){
                if ($page == $i) $pages .= "<span class='current_page'>$i</span>&nbsp;";
                else $pages .= "<a class='page_link' href='?show=blocks&action=show_blocks&page=$i'>$i</a>&nbsp;";
            }
            $tmpl->assign('pages', $pages);
            $tmpl->assign('blocks', $blocks);
            $tmpl->assign('tmp_page', 'blocks_show.htm');
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function editBlockForm()
    {
        global $pdo, $tmpl;
        $block_id = (int) $_GET['id'];

        try {
            $block_stmt = $pdo->prepare("SELECT * FROM blocks WHERE id = :block_id");
            $block_stmt->bindParam(':block_id', $block_id, PDO::PARAM_INT);
            $block_stmt->execute();
            $block = $block_stmt->fetch(PDO::FETCH_ASSOC);

            if ($block) {
                $php_files = [];
                if ($handle = opendir(__DIR__ . '/../../../blocks/')) {
                    while (false !== ($file = readdir($handle))) {
                        if (substr($file, -3) == 'php') {
                            $php_files[] = $file;
                        }
                    }
                    closedir($handle);
                }
                $tmpl->assign('php_files', $php_files);
                $tmpl->assign('block', $block);
                $tmpl->assign('tmp_page', 'blocks_edit.htm');
            } else {
                msg('البلوك المطلوب غير موجود.');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function updateBlock()
    {
        global $pdo;
        $block_id = (int) $_GET['id'];
        $title = $_POST['title'];
        $type = $_POST['type'];
        $html_content = $_POST['html_content'];
        $php_file = $_POST['php_file'];
        $status = $_POST['status'];

        try {
            $update_block = $pdo->prepare("UPDATE blocks SET title = :title, type = :type, html_content = :html_content, php_file = :php_file, status = :status WHERE id = :block_id");
            $update_block->bindParam(':title', $title, PDO::PARAM_STR);
            $update_block->bindParam(':type', $type, PDO::PARAM_STR);
            $update_block->bindParam(':html_content', $html_content, PDO::PARAM_STR);
            $update_block->bindParam(':php_file', $php_file, PDO::PARAM_STR);
            $update_block->bindParam(':status', $status, PDO::PARAM_INT);
            $update_block->bindParam(':block_id', $block_id, PDO::PARAM_INT);
            $update_block->execute();

            if ($update_block->rowCount() > 0) {
                msg('تم التحرير بنجاح!', '?show=blocks&action=show_blocks');
            } else {
                msg('حدث خطأ أثناء التحرير، الرجاء المحاولة مرة أخرى.', '?show=blocks&action=show_blocks');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function deleteBlock()
    {
        global $pdo;
        $block_id = (int) $_GET['id'];

        try {
            $delete_block = $pdo->prepare("DELETE FROM blocks WHERE id = :block_id");
            $delete_block->bindParam(':block_id', $block_id, PDO::PARAM_INT);
            $delete_block->execute();

            if ($delete_block->rowCount() > 0) {
                msg('تم الحذف بنجاح!', '?show=blocks&action=show_blocks');
            } else {
                msg('حدث خطأ أثناء الحذف، الرجاء المحاولة مرة أخرى.', '?show=blocks&action=show_blocks');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }
}
