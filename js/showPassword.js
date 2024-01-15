const passwordInput = document.querySelector('input[type="password"]');
const showPasswordButton = document.getElementById('showPassword');

showPasswordButton.addEventListener('click', () => {
    console.log(passwordInput);
    if (passwordInput.getAttribute('type') == 'password') {
        passwordInput.setAttribute('type', 'text');
    }
    else {
        passwordInput.setAttribute('type', 'password');
    }
});
