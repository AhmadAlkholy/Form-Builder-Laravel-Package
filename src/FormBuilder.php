<?php

namespace Kholy\FormBuilder;

class FormBuilder
{
    private static $fields=[], $formAttrs=[];

    public static function form($formAttrs)
    {
        self::$formAttrs = $formAttrs;
        return new static();
    }

    public static function fields($fields)
    {
        self::$fields = $fields;
        return new static();
    }

    public static function add($field)
    {
        self::$fields[] = $field;
        return new static();
    }

    public static function make($fields=[])
    {
        $formAttrs = self::$formAttrs;
        if (!$fields) {
            $fields = self::$fields;
        }
        self::reset();
        return view('formbuilder::form_builder', compact('fields', 'formAttrs'));
    }

    private static function reset()
    {
        self::$fields = [];
        self::$formAttrs = [];
    }
}
