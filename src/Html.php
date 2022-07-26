<?php

namespace sagittaracc;

/**
 * This is me html helper
 * I use it for sagittaracc/suql
 * 
 * @author Yuriy Arutyunyan <sagittaracc@gmail.com>
 */
class Html
{
    /**
     * Генерация тэга
     * @param string $name имя тэга
     * @param array $options перечень атрибутов
     * @param string $content содержимое тэга
     * @return string
     */
    public static function tag($name, $options = [], $content = '')
    {
        $openTag = "<$name{{attr}}>";
        $closeTag = "</$name>";

        $attrList = [];
        foreach ($options as $attr => $value) {
            $attrList[] = $attr . '=' . '"' . $value . '"';
        }

        return
            str_replace('{{attr}}', !empty($attrList) ? ' ' . implode(' ', $attrList) : '', $openTag) .
            $content .
            $closeTag;
    }
}