<?php

class Page
{
    private $name;
    private $protected;

    public function __construct(string $name, bool $protected = false)
    {
        $this->name = $name;
        $this->protected = $protected;
    }

    public function getName():string {
        return $this->name;
    }

    public function isProtected():bool {
        return $this->protected;
    }

}
