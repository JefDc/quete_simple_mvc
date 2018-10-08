<?php

namespace Controller;

use Model\categoryManager;

class CategoryController
{
    public function index()
    {
        $categoriesManager = new CategoryManager();
        $categories = $categoriesManager->selectAllCategory();
        require __DIR__ . '/../View/category.php';
    }
    public function show($id){
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        require __DIR__ . '/../View/showcategory.php';
    }
}


?>

