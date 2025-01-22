function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.querySelector('.toggle-password');

    if (!passwordInput || !eyeIcon) {
        console.error('Не найден значок ввода пароля или переключения.');
        return;  
    }
    const isPasswordType = passwordInput.type === "password";

    passwordInput.type = isPasswordType ? 'text' : 'password';
    eyeIcon.textContent = isPasswordType ? '🙈' : '👁';
    eyeIcon.setAttribute('aria-label', isPasswordType ? 'Скрыть пароль' : 'Показать пароль');     
}