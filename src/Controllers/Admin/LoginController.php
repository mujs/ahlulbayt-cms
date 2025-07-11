<?php

namespace App\Controllers\Admin;

use PDO;

class LoginController extends AdminController
{
    public function __construct()
    {
        // Do not call parent constructor here to avoid infinite redirect loop
        // The authentication check will be done in the login method
    }

    public function showLoginForm()
    {
        global $tmpl;
        if (isset($_SESSION['username'])) {
            header('Location: index.php');
            exit();
        }
        $tmpl->assign('msg', '');
        $tmpl->display('login.htm');
    }

    public function login()
    {
        global $pdo, $tmpl;

        $username = $_POST['username'];
        $password = md5($_POST['password']);

        try {
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $_SESSION['username'] = $username;
                $msg = "<span style='color: #009900;'>تم تسجيل الدخول بنجاح! سيتم نقلك تلقائياً إلى لوحة التحكم</span><meta http-equiv='refresh' content='2; url=index.php'>";
            } else {
                $msg = "<span style='color: #990000;'>اسم المستخدم أو كلمة المرور خطأ</span>";
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }

        $tmpl->assign('msg', $msg);
        $tmpl->display('login.htm');
    }

    public function logout()
    {
        global $tmpl;
        session_destroy();
        $tmpl->assign('msg', 'تم تسجيل الخروج بنجاح!');
        $tmpl->display('login.htm');
    }
}
