/*==================== RECARGAR PAGINA ====================*/
if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
}
/*==================== LOGIN SHOW and HIDDEN ====================*/
const signUp = document.getElementById('sign-up'),
      signIn = document.getElementById('sign-in'),
      signIn2 = document.getElementById('sign-in2'),
      resetPass = document.getElementById('resetpass'),
      loginIn = document.getElementById('login-in'),
      loginUp = document.getElementById('login-up')
      lostPass = document.getElementById('lostpass')

signUp.addEventListener('click', ()=>{
// Remove classes first if they exist
    loginIn.classList.remove('block');
    loginUp.classList.remove('none');
// Add classes
    loginIn.classList.add('none');
    loginUp.classList.add('block');
});

signIn.addEventListener('click', ()=>{
    // Remove classes first if they exist
        loginIn.classList.remove('none');
        loginUp.classList.remove('block');
    // Add classes
        loginIn.classList.add('block');
        loginUp.classList.add('none');
});

resetPass.addEventListener('click', ()=>{
    // Remove classes first if they exist
        loginIn.classList.remove('block');
        lostPass.classList.remove('none');
    // Add classes
        loginIn.classList.add('none');
        lostPass.classList.add('block');
    });

    signIn2.addEventListener('click', ()=>{
        // Remove classes first if they exist
            loginIn.classList.remove('none');
            lostPass.classList.remove('block');
        // Add classes
            loginIn.classList.add('block');
            lostPass.classList.add('none');
    });