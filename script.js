function handleLogin(event) {
    event.preventDefault();
    const username  = document.getElementById('input-username').value;
    const password  = document.getElementById('input-password').value;

    console.log(`username:  ${username}`);
    console.log(`password:  ${password}`);

    alert(`Login com:  ${username} \n Password: ${password}`);
 } 
 document.getElementById('login-form').addEventListener('submit', handleLogin);