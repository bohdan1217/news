<?php
/**
 * Created by PhpStorm.
 * User: bohdan
 * Date: 29.12.2017
 * Time: 12:26
 */

namespace App\Controllers;

use \Core\View;
use Core\Controller;
use App\Models\News;

class Main extends Controller {

    public function indexAction()
    {

        $news = News::getAll();

        View::renderTemplate('main/index.php', [
            'news' => $news,
            'title' => "Main page",
        ]);
    }

}