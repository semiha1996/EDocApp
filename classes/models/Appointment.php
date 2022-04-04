<?php
namespace EDocApp;
/**
 * Description of Appointment
 *
 * @author semiha
 */
class Appointment {
    private int $id;
    private DateTime $date;
    private Specialisation $specialisation;
    private Hospital $hospital;
    private string  $medications;
    
    public function __construct(int $id, Specialisation $specialisation, Hospital $hospital, DateTime $date, string $medications) {
        $this->id = $id;
        $this->date = $date;
        $this->specialisation = $specialisation;
        $this->hospital = $hospital;
        $this->medications = $medications;
    }

    
    public function getId(): int {
        return $this->id;
    }

    public function getSpecialisation(): Specialisation {
        return $this->specialisation;
    }

    public function getHospital(): Hospital {
        return $this->hospital;
    }

    public function getDate(): DateTime {
        return $this->date;
    }

    public function getMedications(): string {
        return $this->medications;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setSpecialisation(Specialisation $specialisation): void {
        $this->specialisation = $specialisation;
    }

    public function setHospital(Hospital $hospital): void {
        $this->hospital = $hospital;
    }

    public function setDate(DateTime $date): void {
        $this->date = $date;
    }

    public function setMedications(string $medication): void {
        $this->medications = $medications;
    }
    
}
