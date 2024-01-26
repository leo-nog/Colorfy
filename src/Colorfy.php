<?php

namespace Colorfy;

class Colorfy {

    public static $default = "\e[39m\e[49m";

    public static $colors = [
        'default'=>39,
        'black'=>30,
        'gray'=>90,
        'red'=>31,
        'green'=>32,
        'blue'=>34,
        'yellow'=>33,
        'magenta'=>35,
        'cyan'=>36,
        'lightGray'=>37,
        'lightRed'=>91,
        'lightGreen'=>92,
        'lightBlue'=>94,
        'lightMagenta'=>95,
        'lightCyan'=>96,
        'white'=>97
    ];

    public static function __callStatic($name, $args)
    {
        $text = $args[0]??false;
        $color = self::$colors[$name]??self::$colors['default'];
        $bgColor = self::$colors[$args[1]??'default']+10;

        if($color)
        $color = "\e[".$color."m";

        if($bgColor)
        $bgColor = "\e[".$bgColor."m";

        if($text)
        return $bgColor.$color.$text.self::$default;
    }

}