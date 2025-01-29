<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление документами</title>
    <link rel="stylesheet" href="src/css/documents.css">
    <link rel="stylesheet" href="src/css/header.css">
</head>
<body>
    <header>
        <h1>Управление документами</h1>
        <nav>
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="teacher_profile.html">Профиль учителя</a></li>
                <li><a href="schedule.html">Расписание</a></li>
                <li><a href="olympiads.html">Олимпиады</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <aside class="sidebar">
            <h2>Документы</h2>
            <ul class="document-list">
                <li><a href="/uploads/documents/math_assignment.pdf">Математическое задание</a></li>
                <li><a href="/uploads/documents/history_project.pdf">Исторический проект</a></li>
                <li><a href="/uploads/documents/science_lab_report.pdf">Лабораторный отчет по науке</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <h2>Загрузить новый документ</h2>
            <form class="upload-form">
                <input type="file" name="document" required>
                <button type="submit">Загрузить</button>
            </form>
        </main>    
    </div>

    <footer>
        <p>&copy; 2025 Управление школой</p>
    </footer>
</body>
</html>
