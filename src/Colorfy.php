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

    public static $htmlColors = [
        'black'=>'#000000',
        'gray'=>'#808080',
        'red'=>'#B53737',
        'green'=>'#008000',
        'blue'=>'#2B35AF',
        'yellow'=>'#FFFF00',
        'magenta'=>'#78004C',
        'cyan'=>'#00ffff',
        'lightGray'=>'#d3d3d3',
        'lightRed'=>'#FF7F7F',
        'lightGreen'=>'#90EE90',
        'lightBlue'=>'#89CFF0',
        'lightMagenta'=>'#FFD0FF',
        'lightCyan'=>'#ACFFFC',
        'white'=>'#FFFFFF'
    ];

    public static function __callStatic($name, $args)
    {
        if(!self::isSupported())
        return self::colorfyHtml($args[0]??null,$name,$args[1]??null);

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

    private static function colorfyHtml($text, $textColor, $bgColor) {
        $color = self::$htmlColors[$textColor]??self::$htmlColors['black'];
        $bgColor = self::$htmlColors[$bgColor??'white'];
        $text = nl2br($text);

        if($text)
        return "<span style='padding:3px 7px;color:$color;background-color:$bgColor'>$text</span>";
    }

    private static function isSupported()
    {
        if (DIRECTORY_SEPARATOR === '\\') {
            if (function_exists('sapi_windows_vt100_support') && @sapi_windows_vt100_support(STDOUT)) {
                return true;
            } elseif (getenv('ANSICON') !== false || getenv('ConEmuANSI') === 'ON') {
                return true;
            }
            return false;
        } else {
            return function_exists('posix_isatty') && @posix_isatty(STDOUT);
        }
    }

}