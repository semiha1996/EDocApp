<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace EDocApp;

/**
 * Description of Doctor_Specialisation
 *
 * @author semih
 */
class Doctor_Specialisation {
    private int $id;
    private int $user_id;
    private int $specialisation_id;
    
    public function __construct(int $id, int $user_id, int $specialisation_id) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->specialisation_id = $specialisation_id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getUser_id(): int {
        return $this->user_id;
    }

    public function getSpecialisation_id(): int {
        return $this->specialisation_id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setUser_id(int $user_id): void {
        $this->user_id = $user_id;
    }

    public function setSpecialisation_id(int $specialisation_id): void {
        $this->specialisation_id = $specialisation_id;
    }
}
