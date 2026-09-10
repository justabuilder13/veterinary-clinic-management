<?php

abstract class Animal {
    protected string $type;

    public function __construct(){
        $this->setProp();
    }

    public function setProp(): void{
        $this->type = "Cat";
    }
    
    public function getProp(): string{
        return $this->type;
    }
}

?>