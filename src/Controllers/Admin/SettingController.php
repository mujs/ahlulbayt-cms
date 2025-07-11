<?php

namespace App\Controllers\Admin;

use PDO;

class SettingController extends AdminController
{
    public function index()
    {
        global $tmpl;
        $tmpl->assign('tmp_page', 'settings.htm');
    }

    public function showGeneralSettings()
    {
        global $pdo, $tmpl;
        try {
            $general_stmt = $pdo->query("SELECT * FROM settings");
            $general = $general_stmt->fetch(PDO::FETCH_ASSOC);

            $path = __DIR__ . '/../../../templates/';
            $dirs = scandir($path);
            $dirss = [];
            foreach ($dirs as $dir) {
                if ($dir === '.' || $dir === '..') continue;
                if (is_dir($path . '/' . $dir)) $dirss[] = $dir;
            }
            $tmpl->assign('dirs', $dirss);
            $tmpl->assign('general', $general);
            $tmpl->assign('tmp_page', 'settings_general.htm');
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function updateGeneralSettings()
    {
        global $pdo;
        $title = $_POST['title'];
        $description = $_POST['description'];
        $email = $_POST['email'];
        $style = $_POST['style'];
        $rights = $_POST['rights'];
        $message = $_POST['message'];
        $status = $_POST['status'];
        $close_msg = $_POST['close_msg'];

        try {
            $update_settings = $pdo->prepare("UPDATE settings SET title = :title, description = :description, email = :email, style = :style, rights = :rights, message = :message, status = :status, close_msg = :close_msg");
            $update_settings->bindParam(':title', $title, PDO::PARAM_STR);
            $update_settings->bindParam(':description', $description, PDO::PARAM_STR);
            $update_settings->bindParam(':email', $email, PDO::PARAM_STR);
            $update_settings->bindParam(':style', $style, PDO::PARAM_STR);
            $update_settings->bindParam(':rights', $rights, PDO::PARAM_STR);
            $update_settings->bindParam(':message', $message, PDO::PARAM_STR);
            $update_settings->bindParam(':status', $status, PDO::PARAM_INT);
            $update_settings->bindParam(':close_msg', $close_msg, PDO::PARAM_INT);
            $update_settings->execute();

            if ($update_settings->rowCount() > 0) {
                msg('تم التحرير بنجاح!');
            } else {
                msg('حدث خطأ أثناء التحرير، الرجاء المحاولة مرة أخرى.');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function showMessages()
    {
        global $pdo, $tmpl;
        $page = (int) ($_GET['page'] ?? 1);
        $max = 15;
        $min = (($page * $max) - $max);

        try {
            $select_messages = $pdo->prepare("SELECT id, name, subject, status FROM messages ORDER BY send_date DESC LIMIT :min, :max");
            $select_messages->bindParam(':min', $min, PDO::PARAM_INT);
            $select_messages->bindParam(':max', $max, PDO::PARAM_INT);
            $select_messages->execute();
            $messages = $select_messages->fetchAll(PDO::FETCH_ASSOC);

            $num_messages_stmt = $pdo->query("SELECT COUNT(id) FROM messages");
            $num_messages = $num_messages_stmt->fetchColumn();

            $cols = ceil($num_messages / $max);
            $pages = '';
            for($i = 1; $i <= $cols; $i++){
                if ($page == $i) $pages .= "<span class='current_page'>$i</span>&nbsp;";
                else $pages .= "<a class='page_link' href='?show=settings&action=messages&page=$i'>$i</a>&nbsp;";
            }
            $tmpl->assign('pages', $pages);
            $tmpl->assign('messages', $messages);
            $tmpl->assign('tmp_page', 'messages.htm');
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function readMessage()
    {
        global $pdo, $tmpl;
        $message_id = (int) $_GET['id'];

        try {
            $update_status = $pdo->prepare("UPDATE messages SET status = '1' WHERE id = :message_id");
            $update_status->bindParam(':message_id', $message_id, PDO::PARAM_INT);
            $update_status->execute();

            $message_stmt = $pdo->prepare("SELECT * FROM messages WHERE id = :message_id");
            $message_stmt->bindParam(':message_id', $message_id, PDO::PARAM_INT);
            $message_stmt->execute();
            $message = $message_stmt->fetch(PDO::FETCH_ASSOC);

            if ($message) {
                $message['send_date'] = date('Y-m-d', $message['send_date']);
                $tmpl->assign('message', $message);
                $tmpl->assign('tmp_page', 'messages_read.htm');
            } else {
                msg('الرسالة المطلوبة غير موجودة.');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function deleteMessage()
    {
        global $pdo;
        $message_id = (int) $_GET['id'];

        try {
            $delete_message = $pdo->prepare("DELETE FROM messages WHERE id = :message_id");
            $delete_message->bindParam(':message_id', $message_id, PDO::PARAM_INT);
            $delete_message->execute();

            if ($delete_message->rowCount() > 0) {
                msg('تم الحذف بنجاح!');
            } else {
                msg('حدث خطأ أثناء الحذف، الرجاء المحاولة مرة أخرى.');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }
}
