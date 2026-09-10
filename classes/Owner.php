<?php

class Owner{
    public string $name;
    public string $address;
    public string $zipCode;
    public string $phone;
    public string $email;

    public function __construct(string $name, string $address, string $zipCode, string $phone, string $email){
        $this->setProp(
            $name,
            $address,
            $zipCode,
            $phone,
            $email
        );
    }
    public function setProp(string $name, string $address, string $zipCode, string $phone, string $email): void{
        $this->name = $name;
        $this->address = $address;
        $this->zipCode = $zipCode;
        $this->phone = $phone;
        $this->email = $email;
    }
    public function getProp(): string{
    return
        "Nom : " . $this->name .
        "<br>Adresse : " . $this->address .
        "<br>Code postal : " . $this->zipCode .
        "<br>Téléphone : " . $this->phone .
        "<br>Email : " . $this->email;
    }
}

?>