<?php
namespace App;

class Helper{
    public static function strip_tags_with_whitespace($string, $allowable_tags = null)
    {
        $string = str_replace('<', ' <', $string);
        $string = str_replace('&nbsp; ', ' ', $string);
        $string = str_replace('&nbsp;', ' ', $string);
        $string = strip_tags($string, $allowable_tags);
        $string = str_replace('  ', ' ', $string);
        $string = trim($string);

        return $string;
    }
}
