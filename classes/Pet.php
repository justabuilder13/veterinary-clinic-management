<?php

class Pet extends Animal{
    public string $name;
    public string $birthday;

    // Constructeur de Pet qui appel les propriété de Animal et ses propres propriétés
    public function __construct(string $name, string $birthday){
        $this->setProp("Cat", $name, $birthday);
    }

    public function setProp(string $type = "Cat", string $name = "", string $birthday = ""): void{
        parent::setProp($type);
        $this->name = $name;
        $this->birthday = $birthday;
    }

    public function age(): int{
        $birthDate = new DateTime($this->birthday);
        $today = new DateTime();

        return $birthDate->diff($today)->y;
    }

    public function getProp(): string{
    return
        "Nom : " . $this->name .
        "<br>Type : " . $this->type .
        "<br>Date de naissance : " . $this->birthday .
        "<br>Âge : " . $this->age() . " ans";
    }
}

?>