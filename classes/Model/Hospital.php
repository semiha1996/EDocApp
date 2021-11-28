<?php
namespace EDocApp;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Hospital
 *
 * @author semih
 */
class Hospital {
    private int $id;
    private string $name;
    private string $address;
    private string $phone;
    private string $email;
    
    public function __construct(int $id, string $name, string $address,string $phone, string $email, Specialisation $specialisations) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }
    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setAddress(string $address): void {
        $this->address = $address;
    }

    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    
}
