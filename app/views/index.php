<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление школой</title>
    <link rel="stylesheet" href="/app/src/css/index.css">
    <link rel="stylesheet" href="/app/src/css/header.css">
    <link rel="stylesheet" href="/app/src/css/footer.css">
</head>
<body>
    <header>
        <h1>Управление школой</h1>
        <nav>
            <ul>
                <li><a href="auth.html">Вход</a></li>
                <li><a href="olympiads.html">Олимпиады</a></li>
                <li><a href="documents.html">Документы</a></li>
                <li><a href="schedule.html">Расписание</a></li>
                <li><a href="teacher_profile.html">Профиль</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <aside class="sidebar">
            <h2>Информация о пользователе</h2>
            <p><strong>Имя:</strong> Иван Иванов</p>
            <p><strong>Должность:</strong> Учитель</p>
            <p><strong>Класс:</strong> 10А</p>
        </aside>
        <main class="main-content">
            <section class="performance">
                <h2>Успеваемость учеников</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Имя ученика</th>
                            <th>Оценка</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Петя Петров</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Саша Сидоров</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Маша Иванова</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="schedule">
                <h2>Расписание уроков</h2>
                <ul>
                    <li>Понедельник: Математика, Русский язык, Физика</li>
                    <li>Вторник: Химия, Биология, Литература</li>
                    <li>Среда: География, История, Информатика</li>
                    <li>Четверг: Английский язык, Физкультура, Искусство</li>
                    <li>Пятница: Обществознание, Технология</li>
                </ul>
            </section>
            <section class="statistics">
                <h2>Статистика успеваемости</h2>
                <p>Средняя оценка класса: 4.5</p>
                <p>Количество отличников: 5</p>
                <p>Количество двоечников: 1</p>
            </section>
        </main>
        <aside class="events">
            <h2>События в школе</h2>
            <ul>
                <li>01.10.2023 - День учителя</li>
                <li>15.10.2023 - Спортивные соревнования</li>
                <li>30.10.2023 - Конкурс чтецов</li>
            </ul>
        </aside>
    </div>

    <footer>
        <p>&copy; 2025 Управление школой</p>
    </footer>
</body>
</html>
