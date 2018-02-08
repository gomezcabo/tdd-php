<?php

namespace TaskApi;

class Task
{
    private $title;
    private $type;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
