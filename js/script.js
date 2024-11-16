const passwordInput = document.getElementById('password');
const passIcon = document.getElementById('pass-icon');

passIcon.addEventListener('click', () => {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passIcon.src = 'https://cdn-icons-png.flaticon.com/512/159/159604.png'; 
    } else {
        passwordInput.type = 'password';
        passIcon.src = 'https://as1.ftcdn.net/v2/jpg/05/91/81/98/1000_F_591819872_JmdnpNAxXtLFxpmnNupZbuZbZAjijuWz.jpg'; 
    }
});
