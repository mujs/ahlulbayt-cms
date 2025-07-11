<?php

namespace App\Controllers\Admin;

use PDO;

class DashboardController extends AdminController
{
    public function index()
    {
        global $pdo, $tmpl;

        try {
            $new_messages_stmt = $pdo->query("SELECT COUNT(id) FROM messages WHERE status = '0'");
            $new_messages = $new_messages_stmt->fetchColumn();

            $tmpl->assign('new_messages', $new_messages);
            $tmpl->assign('show_menu', false);
            $tmpl->assign('acats_num', $this->get_num_rows('cats'));
            $tmpl->assign('articles_num', $this->get_num_rows('articles'));
            $tmpl->assign('gcats_num', $this->get_num_rows('gallery_cats'));
            $tmpl->assign('images_num', $this->get_num_rows('gallery_images'));
            $tmpl->assign('blocks_num', $this->get_num_rows('blocks'));
            $tmpl->assign('tmp_page', 'home.htm');
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    private function get_num_rows($table)
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM $table");
        return $stmt->rowCount();
    }
}
