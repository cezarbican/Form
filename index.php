<?php

include_once "./Form.php";
include_once "./Input.php";
include_once "./Textarea.php";
include_once "./Button.php";

$form = new Form("/", "POST");

$form->addInput(new Input("test1"));
$form->addInput(new Input("test2"));
$form->addInput(new Textarea("test3"));
$form->addInput(new Button("test4", "submit" ));

$form->display();