<?php 


class Button{

    public $name;
    public $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function input()
    {
        return "<button type='$this->type'>$this->name</button>";
    }
}