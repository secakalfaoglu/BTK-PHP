<?php

require "libs/functions.php";

session_start();


$id = $_GET['id'];

if (deleteCategory($id)) {
    $_SESSION['message'] = $id. " numaralı kategori başarıyla silindi.";
    $_SESSION['type'] = "danger";

    header('Location: admin-categories.php');

}else {
    $_SESSION['message'] = "Kategori silinirken bir hata oluştu.";
}
?>