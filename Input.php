<?php 


class Input{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function input()
    {
        return "<input name='$this->name'>";
    }
}