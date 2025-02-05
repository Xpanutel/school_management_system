<?php

class UserController
{
    private $userModel;

    public function __construct($userModel)
    {
        $this->userModel = $userModel;
    }

    public function addStudent(array $request): void 
    {   
        try {
            $this->userModel->addStudent(
                $request['first_name'],
                $request['last_name'],
                $request['date_of_birth'],
                $request['gender'],
                $request['enrollment_date']
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getAllStudents(): array
    {
        try {
            return $this->userModel->getAllStudents();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getStudentById(int $id): array
    {
        try {
            return $this->userModel->getStudentById($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getSheduleByStudent(): array
    {
        try {
            return $this->userModel->getSheduleByStudent();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
