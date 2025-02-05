<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сброс пароля</title>
    <link rel="stylesheet" href="/app/src/css/password.css">
    <link rel="stylesheet" href="/app/src/css/index.css">
    <link rel="stylesheet" href="/app/src/css/header.css">
</head>
<body>
    <header>
        <h1>Сброс пароля</h1>
    </header>
    <div class="container">
        <main class="main-content">
            <form id="resetPasswordForm">
                <div class="form-group">
                    <label for="email">Введите ваш адрес электронной почты:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit">Отправить инструкции</button>
                <p><a href="auth.html">Вернуться на страницу входа</a></p>
            </form>
        </main>
    </div>
    <footer>
        <p>&copy; 2025 Управление школой</p>
    </footer>
</body>
</html>
