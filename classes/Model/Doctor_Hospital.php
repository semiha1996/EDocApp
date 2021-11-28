<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace EDocApp;

/**
 * Description of Doctor_Hospital
 *
 * @author semih
 */
class Doctor_Hospital {
    private int $id;
    private int $user_id;
    private int $hospital_id;
    
    public function __construct(int $id, int $user_id, int $hospital_id) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->hospital_id = $hospital_id;
    }
    public function getId(): int {
        return $this->id;
    }

    public function getUser_id(): int {
        return $this->user_id;
    }

    public function getHospital_id(): int {
        return $this->hospital_id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setUser_id(int $user_id): void {
        $this->user_id = $user_id;
    }

    public function setHospital_id(int $hospital_id): void {
        $this->hospital_id = $hospital_id;
    }
}
