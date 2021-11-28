<?php

namespace EDocApp;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Patient
 *
 * @author semih
 */
class User {
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private string $phone;
    private string $sex; 
    private string $role;//???
    private ?string $personal_info;
    
public function __construct(int $id, string $name, string $email, 
        string $password, string $phone, string $sex, string $role,string $personal_info) {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->phone = $phone;
    $this->sex = $sex;
    $this->role = $role;
    $this->personal_infoe = $personal_info;
}

public function getId(): int {
    return $this->id;
}

public function getName(): string {
    return $this->name;
}

public function getEmail(): string {
    return $this->email;
}

public function getPassword(): string {
    return $this->password;
}

public function getPhone(): string {
    return $this->phone;
}

public function getSex(): string {
    return $this->sex;
}

public function getRole(): string {
    return $this->role;
}

public function getPersonal_info(): ?string {
    return $this->personal_info;
}

public function setId(int $id): void {
    $this->id = $id;
}

public function setName(string $name): void {
    $this->name = $name;
}

public function setEmail(string $email): void {
    $this->email = $email;
}

public function setPassword(string $password): void {
    $this->password = $password;
}

public function setPhone(string $phone): void {
    $this->phone = $phone;
}

public function setSex(string $sex): void {
    $this->sex = $sex;
}

public function setRole(string $role): void {
    $this->role = $role;
}

public function setPersonal_info(?string $personal_info): void {
    $this->role = $role;
}

}
