<?php 


class Form{

    public $inputs = [];
    public $action;
    public $method;

    public function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function start()
    {
        return "<form action='$this->action' method='$this->method'>";
    }

    public function end()
    {
        return "</form>";
    }

    public function addInput($input)
    {
        $this->inputs[] = $input->input();
    }

    public function display()
    {
        echo $this->start();

        foreach($this->inputs as $k => $v){
            echo $v;
        }

        echo $this->end();
    }
}