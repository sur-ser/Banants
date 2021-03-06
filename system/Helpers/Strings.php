<?php
/**
 * Created by PhpStorm.
 * User: Hovhannisyan
 * Date: 17.04.2016
 * Time: 21:38
 */

namespace Helpers;


class Strings
{

    /**
     * Удаляет HTML и PHP-теги из строки
     * и возврошает заданную количество слов
     * @param $string
     * @param int $wordLimit
     * @return string
     */
    static function limitWords($string, $wordLimit = 20) {

        // Другой метод для обрезки
//        if (strlen($string)>200)
//        {
//            $string = mb_substr($string, 0, strpos ($string, " ", 200));
//        }
//        return $string;

        $words = explode(" ", strip_tags($string));
        return implode(" ", array_splice($words, 0 ,$wordLimit));
    }

    static function generateRandomString($length = 10) {
        $characters = '@#$%^&*()-_=+*!0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%^&*()-_=+*!';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}