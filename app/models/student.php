<?php

class Student 
{
    private $db; 

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addStudent(string $first_name, string $last_name, string $date_of_birth, string $gender, string $enrollment_date): void 
    {
        $stmt = $this->db->prepare("INSERT INTO Students (first_name, last_name, date_of_birth, gender, enrollment_date) 
                                    VALUES (?,?,?,?,?);");
        $stmt->bind_param('sssss', $first_name, $last_name, $date_of_birth, $gender, $enrollment_date);
        $stmt->execute();
    }

    public function getAllStudents(): array 
    {
        $stmt = $this->db->prepare("SELECT * FROM Students;");
        $stmt->execute();
        $results = $stmt->get_results();
        $students = [];
        while ($row = $results->fethc_assoc()) {
            $students = $row;
        }
        return $students;
    }

    public function getStudentById(int $id): array 
    {
        $stmt = $this->db->prepare("SELECT * FROM Students WHERE student_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $results = $stmt->get_results();
    }

    public function getSheduleByStudent(): array
    {
        $stmt = $this->db->prepare("SELECT * FROM Grades");
        $stmt->execute();
        $results = $stmt->get_results();
        return $results;
    }
}