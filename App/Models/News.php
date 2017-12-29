<?php

namespace App\Models;

use PDO;
use Core\Model;

class News extends Model
{

    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM news');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getOne($id)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM news WHERE id = $id LIMIT 1");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function save($data) {
        $name = $data['name'];
        $text = $data['text'];
        $author = $data['author'];
        $img = $data['images'];
        $date = date("Y.m.d H:i:s");

        $db = static::getDB();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO news (name, author, text, date, img)
            VALUES ('$name', '$author', '$text', '$date', '$img')";
        $db->exec($sql);

    }

    public static function update($data) {
        $id = $data['id'];
        $name = $data['name'];
        $text = $data['text'];
        $author = $data['author'];
        $img = $data['images'];
        $date = date("Y.m.d H:i:s");

        $db = static::getDB();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE news SET name='$name', author = '$author', text = '$text', img ='$img', date = '$date'  WHERE id=$id";

        $db->exec($sql);

    }


    public static function delete($id)
    {
        $db = static::getDB();
        $stmt = $db->query("DELETE FROM news WHERE id = $id");
        return;
    }
}
