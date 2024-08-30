document.getElementById('login').addEventListener('submit',function(event){
    event.preventDefault();
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    var emailerror=document.getElementById('email-error');
    var passworderror=document.getElementById('password-error');
    var valid=true;
    emailerror.textContent="";
    passworderror.textContent='';
    if(!email.includes('@') ||email.length<5){
        emailerror.textContent="invalid email";
    valid=false;
    }
    if(password.length<8){
        passworderror.textContent="invalid password . password must at least have 8 caracteres";
        valid=false;
    }
    if(valid){
        event.target.submit();
    }
});
9