<?php


namespace App\SBlog\Core;


trait TSingletone
{
    private static $instance;

    public static function instance() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}



/*//12 если тут пусто строгое сравнение- то поместим экземпляр этого класса(13)- и вернем его же (15)*/
