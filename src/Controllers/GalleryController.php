<?php

namespace App\Controllers;

use PDO;

class GalleryController extends Controller
{
    public function showCategories()
    {
        global $pdo, $tmpl;
        try {
            $stmt = $pdo->query("SELECT * FROM gallery_cats");
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $tmpl->assign('categories', $categories);
            $tmpl->assign('tmp_page', 'gallery_cats.htm');
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function showCategoryImages()
    {
        global $pdo, $tmpl;
        $cat_id = (int)$_GET['id'];
        try {
            $stmtCat = $pdo->prepare("SELECT * FROM gallery_cats WHERE id = :cat_id");
            $stmtCat->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
            $stmtCat->execute();
            $category = $stmtCat->fetch(PDO::FETCH_ASSOC);

            $stmtImages = $pdo->prepare("SELECT * FROM gallery_images WHERE cat_id = :cat_id ORDER BY id DESC");
            $stmtImages->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
            $stmtImages->execute();
            $images = $stmtImages->fetchAll(PDO::FETCH_ASSOC);

            $tmpl->assign('category', $category);
            $tmpl->assign('images', $images);
            $tmpl->assign('tmp_page', 'gallery_cat.htm');
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }

    public function showImage()
    {
        global $pdo, $tmpl;
        $image_id = (int)$_GET['id'];
        try {
            $stmtImage = $pdo->prepare("SELECT * FROM gallery_images WHERE id = :image_id");
            $stmtImage->bindParam(':image_id', $image_id, PDO::PARAM_INT);
            $stmtImage->execute();
            $image = $stmtImage->fetch(PDO::FETCH_ASSOC);

            if ($image) {
                $tmpl->assign('image', $image);
                $tmpl->assign('tmp_page', 'gallery_image.htm');
            } else {
                msg('الصورة المطلوبة غير موجودة.');
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }
    }
}
