<?php

class CategoryController
{
    public $modelCategory;

    public function __construct()
    {
        $this->modelCategory = new CategoryModel() ;
    }

    public function index()
    {
       $categories = $this->modelCategory->getAllCategory();

        $title = "Quản lý danh mục";
        $view = "admin/category/list-category";

        require_once PATH_VIEW . 'admin/main.php';
    }
}
