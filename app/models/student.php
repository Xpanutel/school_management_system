<?php


class Student 
{
    private $db; 

    /**
     * Student constructor.
     * 
     * @param $db Подключение к базе данных.
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Добавляет нового студента в базу данных.
     * 
     * @param string $first_name Имя студента.
     * @param string $last_name Фамилия студента.
     * @param string $date_of_birth Дата рождения студента.
     * @param string $gender Пол студента.
     * @param string $enrollment_date Дата зачисления студента.
     */
    public function addStudent(string $first_name, string $last_name, string $date_of_birth, string $gender, string $enrollment_date): void 
    {
        $stmt = $this->db->prepare("INSERT INTO Students (first_name, last_name, date_of_birth, gender, enrollment_date) 
                                    VALUES (?,?,?,?,?);");
        $stmt->bind_param('sssss', $first_name, $last_name, $date_of_birth, $gender, $enrollment_date);
        $stmt->execute();
    }

    /**
     * Получает всех студентов из базы данных.
     * 
     * @return array Список всех студентов.
     */
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

    /**
     * Получает студента по ID.
     * 
     * @param int $id Уникальный идентификатор студента.
     * @return array Данные студента.
     */
    public function getStudentById(int $id): array 
    {
        $stmt = $this->db->prepare("SELECT * FROM Students WHERE student_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $results = $stmt->get_results();
    }
}