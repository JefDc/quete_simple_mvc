<?php

namespace Controller;

use Model\categoryManager;
use Twig_Loader_Filesystem;
use Twig_Environment;

class CategoryController
{
    private $twig;

    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new \Twig_Environment($loader);
    }

    public function index()
    {
        $categoriesManager = new CategoryManager();
        $categories = $categoriesManager->selectAllCategory();


        return $this->twig->render('category.html.twig', ['categories' => $categories]);
    }
    public function show($id){
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        return $this->twig->render('showCategory.html.twig', ['catgory' => $category]);
    }
}


?>

