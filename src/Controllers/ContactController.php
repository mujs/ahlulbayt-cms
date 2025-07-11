<?php

namespace App\Controllers;

use PDO;

class ContactController extends Controller
{
    public function showForm()
    {
        $this->tmpl->assign('tmp_page', 'contact.htm');
    }

    public function sendMessage()
    {
        global $pdo, $settings;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $code = $_POST['code'];
        $send_date = time();

        if (empty($name) || empty($email) || empty($subject) || empty($message) || empty($code)) {
            msg('يرجى ملئ جميع الخانات', '?act=contact', 3);
        } else {
            try {
                // Validate captcha code using PDO
                $stmtCaptcha = $pdo->prepare("SELECT captcha_code FROM captcha WHERE id = 1");
                $stmtCaptcha->execute();
                $captcha_result = $stmtCaptcha->fetch(PDO::FETCH_ASSOC);

                if (md5($code) == $captcha_result['captcha_code']) {
                    // Insert message using PDO
                    $stmtInsertMessage = $pdo->prepare("INSERT INTO messages(name, email, subject, message, send_date, status) VALUES(:name, :email, :subject, :message, :send_date, 0)");
                    $stmtInsertMessage->bindParam(':name', $name, PDO::PARAM_STR);
                    $stmtInsertMessage->bindParam(':email', $email, PDO::PARAM_STR);
                    $stmtInsertMessage->bindParam(':subject', $subject, PDO::PARAM_STR);
                    $stmtInsertMessage->bindParam(':message', $message, PDO::PARAM_STR);
                    $stmtInsertMessage->bindParam(':send_date', $send_date, PDO::PARAM_INT);
                    $stmtInsertMessage->execute();

                    // Send email
                    mail($settings['email'], $subject, $message, "From: $email");

                    msg('تم إرسال رسالتك بنجاح! ستقوم الإدارة بالرد عليك خلال 24 ساعة', '?act=home', 3);
                } else {
                    msg('رمز التحقق الذي أدخلته لا يطابق الموجود بالصورة', '?act=contact', 3);
                }
            } catch (PDOException $e) {
                // Handle database query errors
                die("Database query failed: " . $e->getMessage());
            }
        }
    }
}
