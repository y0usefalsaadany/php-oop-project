<?php
namespace Controllers;

use Core\View;
use Models\Article;

class ArticleController {
public function index(){
    $articles = (new Article)->get();
    return View::load('dashboard/articles',[
        'articles' => $articles
    ]);
}
}