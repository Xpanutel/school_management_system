<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в систему</title>
    <link rel="stylesheet" href="/app/src/css/index.css">
    <link rel="stylesheet" href="/app/src/css/auth.css">
    <link rel="stylesheet" href="/app/src/css/header.css">
</head>
<body>
    <header>
        <h1>Вход в систему</h1>
    </header>
    <div class="container">
        <main class="main-content">
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">Имя пользователя:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <div style="position: relative;">
                        <input type="password" id="password" name="password" required>
                        <button type="button" class="toggle-password" onclick="togglePassword()" 
                                style="position: absolute; left: 160px; top: 50%; transform: translateY(-50%); 
                                background: none; border: none; cursor: pointer; font-size: 20px; width: auto;">
                            👁️
                        </button>
                    </div>
                </div>                
                <button type="submit">Войти</button>
                <p><a href="password.html" id="forgotPassword">Забыли пароль?</a></p>
            </form>
        </main>
    </div>

    <footer>
        <p>&copy; 2025 Управление школой</p>
    </footer>
    
    <script src="/app/src/js/password.js"></script>
</body>
</html>
