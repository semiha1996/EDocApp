<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace EDocApp;

/**
 * Description of Appointment_User
 *
 * @author semih
 */
class Appointment_User {
    private int $id;
    private int $appointment_id;
    private int $patient_id;
    private int $doctor_id;
            
    
    public function __construct(int $id, int $appointment_id, int $patient_id, int $doctor_id) {
        $this->id = $id;
        $this->appointment_id = $appointment_id;
        $this->patient_id = $patient_id;
        $this->doctor_id = $doctor_id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getAppointment_id(): int {
        return $this->appointment_id;
    }

    public function getPatient_id(): int {
        return $this->patient_id;
    }

    public function getDoctor_id(): int {
        return $this->doctor_id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setAppointment_id(int $appointment_id): void {
        $this->appointment_id = $appointment_id;
    }

    public function setPatient_id(int $patient_id): void {
        $this->patient_id = $patient_id;
    }

    public function setDoctor_id(int $doctor_id): void {
        $this->doctor_id = $doctor_id;
    }
}
