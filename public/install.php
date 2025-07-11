<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf8" />
	<title>تثبيت بوابة أهل البيت (ع)</title>
    <style>
    body {
        margin-top: 30px;
        font: 12px Tahoma;
    }
    
    a {
        color: #666666;
        text-decoration: none;
    }
    
    a:hover {
        color: #333333;
    }
    
    #container {
        width: 600px;
        margin: 0px auto;
        border: 1px #a6a6a6 solid;
        text-align: center;
        background: #ffffff;
        padding: 1px;
    }
    
    #inner_container {
        background: #eeeeee;
        padding: 10px;
    }
    
    .title {
        font-weight: bold;
        padding-bottom: 5px;
        border-bottom: 1px #d7d7d7 dotted;
        margin-bottom: 10px;
    }
    
    input[type=submit] {
        font: bold 12px Tahoma;
        border: 1px #a6a6a6 solid;
        padding: 2px 25px;
        background: #fafafa;
        color: #333333
    }
    </style>
</head>

<body>

<div id="container">
<div id="inner_container">
<div class="title">تثبيت بوابة أهل البيت (ع)</div>
<?php

/*################################*\
|# - Ahlulbayt Portal             #|
|# - v1.0 beta                    #|
|# - Developed by Ahlulbayt Group #|
|# - 2011                         #|
\*################################*/

if (isset($_POST['install'])) {
    include('install_data.php');
    echo 'تم تثبيت بوابة أهل البيت (ع) بنجاح!<br />';
    echo '<a href="index.php">إضغط هنا</a> لتتوجه إلى رئيسية الموقع.<br /><br />';
    echo '<strong>الرجاء حذف ملفات التثبيت install.php و install_data.php</strong>';
} else {
?>
<form action="" method="post">
    سيتم تثبيت بوابة أهل البيت عليهم السلام.<br />
    رجاءً تأكد من بيانات قاعدة البيانات في ملف .env قبل التثبيت.<br /><br />
    <input type="submit" name="install" value="بدء الثبيت" />
</form>
<?php
}

?>
</div>
</div>

</body>
</html>