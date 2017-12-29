<?php

namespace App\Controllers;

use \Core\View;
use Core\Controller;
use App\Models\News as NewsModel;

class News extends Controller {

    public function indexAction()
    {
        $news = NewsModel::getAll();

        View::renderTemplate('Main/index.php', [
            'news' => $news,
            'title' => "News",
        ]);
    }

    public function showAction()
    {
        $id = $this->route_params['id'];
        $new = NewsModel::getOne($id);

        View::renderTemplate('Main/show.php', [
            'new' => $new,
            'title' => "News",
        ]);
    }


    public function addAction() {
        if (!empty($_POST))
        {
            $input = $_POST;
            if (isset($_FILES["file"]) && $_FILES["file"]['name'] != '') {
                $path = 'assets/img/';
                $name = time().$_FILES['file']['name'];

                $full_path = $path.$name;

                if($_FILES['file']['error'] == 0){
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $full_path)){
                        $input['images'] = $name;
                        NewsModel::save($input);
                    }
                }
            }
            else {
                $input['images'] = '';
                NewsModel::save($input);
            }
        }

        View::renderTemplate('Main/add.php', [
            'title' => "Add new book",
        ]);
    }


    public function editAction() {
        if (!empty($_POST))
        {
            $input = $_POST;
            if (isset($_FILES["file"]) && $_FILES["file"]['name'] != '') {
                $path = 'assets/img/';
                $name = time().$_FILES['file']['name'];

                $full_path = $path.$name;

                if($_FILES['file']['error'] == 0){
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $full_path)){
                        $input['images'] = $name;
                        NewsModel::update($input);
                    }
                }
            }
            else {
                if(!empty($_POST['old_image'])) {
                    $input['images'] = $_POST['old_image'];
                } else {
                    $input['images'] = '';
                }
                NewsModel::update($input);
            }
        }
        else {
            $id = $this->route_params['id'];
            $new = NewsModel::getOne($id);

            View::renderTemplate('Main/edit.php', [
                'title' => "Edit book",
                'new' => $new,
            ]);
        }

    }

    public function deleteAction() {
        $id = $this->route_params['id'];
        $new = NewsModel::delete($id);
    }

}