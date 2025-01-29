<?php

class Router {
    // Массив для хранения маршрутов (routes)
    private array $routes = [];

    // Метод для регистрации GET маршрута
    public function get(string $path, callable $handler): void {
        // Добавляем маршрут в массив, где ключ - это путь, а значение - обработчик
        $this->routes['GET'][$path] = $handler;
    }

    // Метод для регистрации POST маршрута
    public function post(string $path, callable $handler): void {
        // Добавляем маршрут в массив, где ключ - это путь, а значение - обработчик
        $this->routes['POST'][$path] = $handler;
    }

    // Метод для обработки входящих запросов
    public function resolve(): void {
        // Получаем метод запроса (GET или POST)
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        // Получаем путь запроса, убирая параметры (например, ?id=1)
        $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Проверяем, есть ли маршруты для данного метода
        foreach ($this->routes[$requestMethod] as $path => $handler) {
            // Сравниваем путь запроса с зарегистрированными маршрутами
            if (preg_match($this->convertToRegex($path), $requestPath, $matches)) {
                // Убираем первый элемент массива $matches, который содержит полный путь
                array_shift($matches);
                // Вызываем обработчик с параметрами
                call_user_func_array($handler, $matches);
                return;
            }
        }

        // Если маршрут не найден, обрабатываем ошибку 404
        $this->handleNotFound();
    }

    // Преобразуем путь в регулярное выражение для проверки
    private function convertToRegex(string $path): string {
        // Заменяем параметры в фигурных скобках на регулярные выражения
        return '#^' . preg_replace('/{(\w+)}/', '([^/]+)', $path) . '$#';
    }

    // Обработка ошибки 404
    private function handleNotFound(): void {
        http_response_code(404); // Устанавливаем статус 404
        echo "404 Not Found"; // Выводим сообщение об ошибке
    }
}