<?php


class Textarea{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function input()
    {
        return "<textarea name='$this->name'></textarea>";
    }
}