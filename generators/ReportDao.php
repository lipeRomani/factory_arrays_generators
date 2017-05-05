<?php

class ReportDao {

    private $reportData = [];

    public function __construct() {
        $this->reportData = [
            new ReportDto("Pablo Scobar", 45),
            new ReportDto("Frank Underwood", 63),
            new ReportDto("Jhon Snow", 35),
            new ReportDto("Heisenberg", 45),
            new ReportDto("Demagorgon", 100),
            new ReportDto("Eleven", 11)
        ];
    }

    public function getReport() {
        foreach($this->reportData as $data) {
            yield $data;
        }
    }
}

class ReportDto {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->age = $age;
        $this->name = $name;
    }

    public function getData() {
        return $this->age . " | " . $this->name;
    }

}