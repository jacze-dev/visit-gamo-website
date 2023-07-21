
const passwordInput = document.querySelector('#password');
const passwordInput1 = document.querySelector('#password1');
const showPasswordButton = document.querySelector('#togglePassword');
const showPasswordButton1 = document.querySelector('#togglePassword1');

showPasswordButton.addEventListener('click', function () {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
 
  } else {
    passwordInput.type = 'password';
    
  }
});

showPasswordButton1.addEventListener('click', function () {
  if (passwordInput1.type === 'password') {
    passwordInput1.type = 'text';
 
  } else {
    passwordInput1.type = 'password';
    
  }
});

