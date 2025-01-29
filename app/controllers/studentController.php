<?php

/**
 * Class UserController
 * Контроллер для управления пользователями (студентами).
 */
class UserController
{
    private $userModel;

    /**
     * UserController constructor.
     * 
     * @param Student $userModel Модель для работы с данными студентов.
     */
    public function __construct($userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * Добавляет нового студента.
     * 
     * @param array $request Данные студента для добавления.
     * @throws \Throwable Если произошла ошибка при добавлении студента.
     */
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

    /**
     * Получает всех студентов.
     * 
     * @return array Список всех студентов.
     * @throws \Throwable Если произошла ошибка при получении студентов.
     */
    public function getAllStudents(): array
    {
        try {
            return $this->userModel->getAllStudents();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Получает студента по ID.
     * 
     * @param int $id Уникальный идентификатор студента.
     * @return array Данные студента.
     * @throws \Throwable Если произошла ошибка при получении студента.
     */
    public function getStudentById(int $id): array
    {
        try {
            return $this->userModel->getStudentById($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
