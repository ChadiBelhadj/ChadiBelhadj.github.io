document.getElementById('sign_up').addEventListener('submit', function(event) {
    var username = document.getElementsByName('nusername')[0].value;
    var password = document.getElementsByName('npassword')[0].value;
    var verify_password = document.getElementsByName('mpassword')[0].value;

    if (password.length < 6) {
        alert("Password must be at least 6 characters");
        event.preventDefault();
        return false;
    }

    if (password !== verify_password) {
        alert("Passwords are different, verify your password");
        event.preventDefault();
        return false;
    }

    if (username.length > 15 || username.length < 4) {
        alert("Username must be at least 4 characters and less than 15");
        event.preventDefault();
        return false;
    }

    return true;
});
