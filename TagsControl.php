<?php

namespace App\Controllers;

use Nette\Application\UI\Control;

class TagsControl extends Control
{
    private $colors;
    private $id;
    private $placeholder;


    public function render(): void
    {
        $this->template->id = $this->id ?? 'tags';
        $this->template->colors = (!empty($this->colors))? $this->colors : ['#0b0d0e','#131617'];
        $this->template->placeholder = $this->placeholder ?? 'Input tags';
        $this->template->render(__DIR__ . '/template/tags.latte');
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setColors($colors)
    {
        $this->colors = $colors;
    }

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }
}